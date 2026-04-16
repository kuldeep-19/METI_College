<?php
$blogSidebarLinkUrl = $blogSidebarLinkUrl ?? 'all-blogs.php#all-blogs';
?>
<div class="sidebar-stack">
    <div class="latest-blog-sidebar">
        <div class="sidebar-header">
            <h5 class="sidebar-title">
                <i class="fa-solid fa-fire"></i> Latest Blog Updates
            </h5>
        </div>

        <div class="notification-list">
            <?php foreach (array_slice($events, 0, 5) as $post): ?>
                <div class="notification-item">
                    <div class="notification-content">
                        <h6 class="notification-title">
                            <a href="<?php echo htmlspecialchars($blogSidebarLinkUrl); ?>">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </a>
                        </h6>
                        <p class="notification-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo htmlspecialchars($post['date']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sidebar-footer">
            <a href="<?php echo htmlspecialchars($blogSidebarLinkUrl); ?>" class="view-all-btn">View All Posts →</a>
        </div>
    </div>

    <div class="blog-subscribe-card">
        <h5 class="subscribe-title">
            <i class="fa-solid fa-envelope-open-text"></i> Subscribe Now
        </h5>
        <p class="subscribe-text">
            Get new blog posts and updates directly in your inbox.
        </p>
        <form class="subscribe-form js-blog-subscribe-form" novalidate>
            <input
                type="email"
                class="subscribe-input js-blog-subscribe-email"
                placeholder="Enter your email address"
                required
            >
            <button type="submit" class="subscribe-btn">Subscribe</button>
            <p class="subscribe-status js-blog-subscribe-status" aria-live="polite"></p>
        </form>
    </div>
</div>
