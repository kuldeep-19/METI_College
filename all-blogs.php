<?php
require __DIR__ . '/include/blog-data.php';

$eventLookup = [];
foreach ($events as $event) {
    if (!isset($event['slug']) || $event['slug'] === '') {
        continue;
    }
    $eventLookup[$event['slug']] = $event;
}

$defaultPostSlug = array_key_first($eventLookup) ?: '';
$activePostSlug = isset($_GET['post']) ? (string) $_GET['post'] : $defaultPostSlug;
if (!isset($eventLookup[$activePostSlug])) {
    $activePostSlug = $defaultPostSlug;
}

$commentsFile = __DIR__ . '/data/blog-comments.json';
if (!file_exists($commentsFile)) {
    file_put_contents($commentsFile, "{}\n", LOCK_EX);
}

$commentsJson = file_get_contents($commentsFile);
$commentsByPost = json_decode($commentsJson ?: '{}', true);
if (!is_array($commentsByPost)) {
    $commentsByPost = [];
}

$commentError = '';
$commentSuccess = isset($_GET['comment']) && $_GET['comment'] === 'posted';
$commentNameValue = '';
$commentMessageValue = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'blog_comment') {
    $submittedSlug = isset($_POST['post_slug']) ? (string) $_POST['post_slug'] : $defaultPostSlug;
    if (!isset($eventLookup[$submittedSlug])) {
        $submittedSlug = $defaultPostSlug;
    }

    $activePostSlug = $submittedSlug;
    $commentNameValue = trim((string) ($_POST['comment_name'] ?? ''));
    $commentMessageValue = trim((string) ($_POST['comment_message'] ?? ''));

    if ($commentNameValue === '' || $commentMessageValue === '') {
        $commentError = 'Please enter your name and comment before posting.';
        $commentSuccess = false;
    } elseif (strlen($commentNameValue) > 80 || strlen($commentMessageValue) > 1200) {
        $commentError = 'Please keep your name under 80 characters and comment under 1200 characters.';
        $commentSuccess = false;
    } else {
        $commentsByPost[$submittedSlug] = $commentsByPost[$submittedSlug] ?? [];
        $commentsByPost[$submittedSlug][] = [
            'name' => $commentNameValue,
            'message' => $commentMessageValue,
            'created_at' => date('d M Y, h:i A'),
        ];

        $encodedComments = json_encode($commentsByPost, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        if ($encodedComments !== false && file_put_contents($commentsFile, $encodedComments . PHP_EOL, LOCK_EX) !== false) {
            header('Location: all-blogs.php?post=' . urlencode($submittedSlug) . '&comment=posted#blog-comments');
            exit;
        }

        $commentError = 'Your comment could not be saved right now. Please try again.';
        $commentSuccess = false;
    }
}

$activePost = $eventLookup[$activePostSlug] ?? null;
$activeComments = array_reverse($commentsByPost[$activePostSlug] ?? []);
$commentCounts = [];
foreach ($eventLookup as $slug => $event) {
    $commentCounts[$slug] = isset($commentsByPost[$slug]) && is_array($commentsByPost[$slug])
        ? count($commentsByPost[$slug])
        : 0;
}
?>
<?php
$page_title = "All Blogs";
include __DIR__ . "/include/header.php";
?>
<body>
    <?php include __DIR__ . "/include/navbar.php"; ?>
    <?php
    $topTabsConfig = [
        'id' => 'top-tabs-section',
        'title' => 'all blogs',
        'image' => './Assets/577a7723-2643x1762.jpg',
        'image_alt' => 'METI campus banner',
        'active_tab' => 'blog',
    ];
    ?>
    <?php include __DIR__ . "/include/top-tabs-banner.php"; ?>

    <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
        <div>
            <h2 class="section-title mb-0">All Blog Posts</h2>
        </div>
        <a href="blog.php" class="btn btn-outline-navy rounded-pill px-4 py-2">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Blog
        </a>
    </div>

    <section id="all-blogs" class="section">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-9">
                    <div class="blog-archive-feed">
                        <?php foreach ($events as $event): ?>
                            <?php
                            $postSlug = $event['slug'];
                            $isActivePost = $postSlug === $activePostSlug;
                            $shareUrl = 'all-blogs.php?post=' . rawurlencode($postSlug) . '#article-' . rawurlencode($postSlug);
                            ?>
                            <article id="article-<?php echo htmlspecialchars($postSlug); ?>" class="blog-article<?php echo $isActivePost ? ' is-active' : ''; ?>">
                                <div class="blog-article-media">
                                    <img
                                        src="<?php echo htmlspecialchars($event['image']); ?>"
                                        alt="<?php echo htmlspecialchars($event['title']); ?>"
                                        class="blog-article-image"
                                    >
                                </div>
                                <div class="blog-article-content">
                                    <p class="blog-article-subtitle"><?php echo htmlspecialchars($event['subtitle']); ?></p>
                                    <h3 class="blog-article-title"><?php echo htmlspecialchars($event['title']); ?></h3>
                                    <div class="blog-article-meta">
                                        <span>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?php echo htmlspecialchars($event['date']); ?>
                                        </span>
                                        <span>
                                            <i class="fa-regular fa-comments"></i>
                                            <?php echo $commentCounts[$postSlug]; ?> comments
                                        </span>
                                    </div>
                                    <p class="blog-article-description"><?php echo htmlspecialchars($event['description']); ?></p>
                                    <div class="blog-article-actions">
                                        <button type="button" class="blog-action-btn js-like-post" data-post="<?php echo htmlspecialchars($postSlug); ?>">
                                            <i class="fa-regular fa-heart"></i>
                                            <span class="js-like-label">Like</span>
                                        </button>
                                        <a
                                            href="all-blogs.php?post=<?php echo urlencode($postSlug); ?>#blog-comments"
                                            class="blog-action-btn<?php echo $isActivePost ? ' is-current' : ''; ?>"
                                        >
                                            <i class="fa-regular fa-comment"></i>
                                            <span>Comment</span>
                                            <span class="blog-action-count"><?php echo $commentCounts[$postSlug]; ?></span>
                                        </a>
                                        <button
                                            type="button"
                                            class="blog-action-btn js-share-post"
                                            data-url="<?php echo htmlspecialchars($shareUrl); ?>"
                                            data-title="<?php echo htmlspecialchars($event['title']); ?>"
                                        >
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <span class="js-share-label">Share</span>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <?php if ($activePost !== null): ?>
                        <section id="blog-comments" class="blog-comments-panel">
                            <span class="blog-comments-kicker">Discussion</span>
                            <h3 class="blog-comments-title">Comments for <?php echo htmlspecialchars($activePost['title']); ?></h3>
                            <p class="blog-comments-target">
                                <?php echo htmlspecialchars($activePost['subtitle']); ?>.
                                Join the discussion below and share your thoughts on this post.
                            </p>

                            <h4 class="blog-comments-count">Reader Comments (<?php echo count($activeComments); ?>)</h4>
                            <div class="blog-comment-list">
                                <?php if (!empty($activeComments)): ?>
                                    <?php foreach ($activeComments as $comment): ?>
                                        <?php $avatarLetter = strtoupper(substr($comment['name'], 0, 1)); ?>
                                        <article class="blog-comment-item">
                                            <div class="blog-comment-avatar"><?php echo htmlspecialchars($avatarLetter); ?></div>
                                            <div class="blog-comment-body">
                                                <div class="blog-comment-top">
                                                    <h5 class="blog-comment-name"><?php echo htmlspecialchars($comment['name']); ?></h5>
                                                    <span class="blog-comment-time"><?php echo htmlspecialchars($comment['created_at']); ?></span>
                                                </div>
                                                <p class="blog-comment-message"><?php echo nl2br(htmlspecialchars($comment['message'])); ?></p>
                                            </div>
                                        </article>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="blog-comment-empty">
                                        No comments yet for this post. Be the first one to share your thoughts.
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="blog-comment-form-card">
                                <h4 class="blog-comment-form-title">Post a Comment</h4>
                                <p class="blog-comment-form-text">
                                    Your comment will appear above this section after submission.
                                </p>

                                <?php if ($commentSuccess): ?>
                                    <div class="alert alert-success blog-comment-alert" role="alert">
                                        Your comment has been posted successfully.
                                    </div>
                                <?php endif; ?>

                                <?php if ($commentError !== ''): ?>
                                    <div class="alert alert-danger blog-comment-alert" role="alert">
                                        <?php echo htmlspecialchars($commentError); ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post" action="all-blogs.php?post=<?php echo urlencode($activePostSlug); ?>#blog-comments">
                                    <input type="hidden" name="form_type" value="blog_comment">
                                    <input type="hidden" name="post_slug" value="<?php echo htmlspecialchars($activePostSlug); ?>">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input
                                                type="text"
                                                name="comment_name"
                                                class="blog-comment-input"
                                                placeholder="Your name"
                                                maxlength="80"
                                                value="<?php echo htmlspecialchars($commentNameValue); ?>"
                                                required
                                            >
                                        </div>
                                        <div class="col-12">
                                            <textarea
                                                name="comment_message"
                                                class="blog-comment-textarea"
                                                placeholder="Write your comment here..."
                                                maxlength="1200"
                                                required
                                            ><?php echo htmlspecialchars($commentMessageValue); ?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="blog-comment-submit">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3">
                    <?php
                    $blogSidebarLinkUrl = 'all-blogs.php#all-blogs';
                    include __DIR__ . '/include/blog-sidebar.php';
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/include/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/common.js"></script>
    <script>
        const likeStorageKey = 'metiBlogLikes';
        const likedPosts = JSON.parse(localStorage.getItem(likeStorageKey) || '{}');

        document.querySelectorAll('.js-like-post').forEach((button) => {
            const slug = button.dataset.post;
            const label = button.querySelector('.js-like-label');

            if (likedPosts[slug]) {
                button.classList.add('is-liked');
                if (label) {
                    label.textContent = 'Liked';
                }
            }

            button.addEventListener('click', () => {
                likedPosts[slug] = !likedPosts[slug];
                button.classList.toggle('is-liked', likedPosts[slug]);

                if (label) {
                    label.textContent = likedPosts[slug] ? 'Liked' : 'Like';
                }

                localStorage.setItem(likeStorageKey, JSON.stringify(likedPosts));
            });
        });

        document.querySelectorAll('.js-share-post').forEach((button) => {
            button.addEventListener('click', async () => {
                const label = button.querySelector('.js-share-label');
                const originalLabel = label ? label.textContent : 'Share';
                const shareUrl = new URL(button.dataset.url, window.location.href).toString();

                try {
                    if (navigator.share) {
                        await navigator.share({
                            title: button.dataset.title,
                            url: shareUrl,
                        });
                        return;
                    }

                    await navigator.clipboard.writeText(shareUrl);
                    if (label) {
                        label.textContent = 'Link Copied';
                        setTimeout(() => {
                            label.textContent = originalLabel;
                        }, 1800);
                    }
                } catch (error) {
                    if (label && error && error.name !== 'AbortError') {
                        label.textContent = 'Try Again';
                        setTimeout(() => {
                            label.textContent = originalLabel;
                        }, 1800);
                    }
                }
            });
        });

        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <?php include __DIR__ . '/include/blog-sidebar-script.php'; ?>
</body>
</html>
