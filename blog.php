<?php
$page_title = "All Blogs";
include('include/header.php');
?>
<body>
    <?php include "./include/navbar.php"; ?>
    <?php
  $topTabsConfig = [
    'id' => 'top-tabs-section',
    'title' => 'blog',
    'image' => './Assets/577a7723-2643x1762.jpg',
    'image_alt' => 'METI campus banner',
    'active_tab' => 'blog',
  ];
  require __DIR__ . '/include/blog-data.php';
  $previewEvents = array_slice($events, 0, 4);
  ?>
 <?php include "./include/top-tabs-banner.php"; ?>
        <!-- Search -->
    <div class="container mt-3 mb-3">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4">
                <h2 class="section-title mb-0">Blogs</h2>
            </div>
            <div class="col-md-3">
                <div class="input-group input-group-lg shadow-sm">
                    <span class="input-group-text bg-white border-0">
                        <i class="fa-solid fa-magnifying-glass text-primary"></i>
                    </span>
                    <input type="text" class="form-control search-box border-0" placeholder="Search blog posts..." id="blogSearchInput">
                    <button class="btn btn-primary px-4" type="button" id="searchBtn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
 <div class="container">

    <!-- Events Section -->
    <section id="events" class="events section">
        
        <div class="row g-5" data-aos="fade-up">
            <!-- Left Section: Blog Posts Grid -->
            <div class="col-lg-9">
                <div class="row g-4">
                    <?php foreach ($previewEvents as $event): ?>
                        <div class="col-md-4 d-flex blog-card-item">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"><a href="all-blogs.php"><?php echo htmlspecialchars($event['title']); ?></a></h6>
                                    <p class="fst-italic text-center"><?php echo htmlspecialchars($event['date']); ?></p>
                                    <p class="card-text"><?php echo htmlspecialchars($event['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="events-preview-footer">
                    <a href="all-blogs.php" class="see-more-link">
                        See More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right Section: Fixed Latest Blog Notifications -->
            <div class="col-lg-3">
                <?php
                $blogSidebarLinkUrl = 'all-blogs.php#all-blogs';
                include __DIR__ . '/include/blog-sidebar.php';
                ?>
            </div>
        </div>
    </section><!-- /Events Section -->
                      <div id="notFoundMessage" class="text-center mt-4 text-danger fw-bold" style="display:none;">
    ❌ No matching blog found
</div>
    <!-- ACTIVITIES -->
    <h2 class="section-title mt-5">Activities</h2>
    <div class="row g-4 align-items-start">

        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg" class="blog-img">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                        <h5 class="mb-0">Web Development Workshop</h5>
                        <span class="tag">Workshop</span>
                    </div>
                    <p class="text-muted"><i class="fa-solid fa-calendar"></i> Jan 10, 2025</p>
                    <p class="desc-preview">Hands-on workshop on modern web technologies.</p>
                    
                    <button type="button" class="btn-collapse" data-bs-toggle="collapse" data-bs-target="#desc1" aria-expanded="false" aria-controls="desc1">
                        <i class="fa-solid fa-chevron-down"></i> Read More
                    </button>
                    
                    <div class="collapse collapse-desc" id="desc1">
                        Learn the latest techniques in web development including HTML5, CSS3, JavaScript, and popular frameworks. This workshop covers responsive design, best practices, and real-world project implementations.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg" class="blog-img">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                        <h5 class="mb-0">Community Service</h5>
                        <span class="tag">Social</span>
                    </div>
                    <p class="text-muted"><i class="fa-solid fa-calendar"></i> Dec 5, 2024</p>
                    <p class="desc-preview">Students engaged in social activities and support programs.</p>
                    
                    <button type="button" class="btn-collapse" data-bs-toggle="collapse" data-bs-target="#desc2" aria-expanded="false" aria-controls="desc2">
                        <i class="fa-solid fa-chevron-down"></i> Read More
                    </button>
                    
                    <div class="collapse collapse-desc" id="desc2">
                        Our students actively participate in community service initiatives, helping local organizations and families in need. From educational outreach to environmental conservation, we're committed to making a positive impact in society.
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <!-- GALLERY -->
    <div class="gallery-section-header">
        <h2 class="section-title mt-5 mb-2">Photo Gallery</h2>
    </div>

    <?php
    $galleryItems = [
        [
            'title' => 'Workshop Highlights',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
             'date' => 'April 5, 2026',
        'desc' => 'This workshop covered modern web development including HTML, CSS, JS and frameworks. Students built real-world projects.',
        'likes' => 12
        ],
        [
            'title' => 'Student Activities',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
            'date' => 'March 20, 2026',
        'desc' => 'Students participated in community services and creative events across campus.',
        'likes' => 8
        ],
        [
            'title' => 'Creative Projects',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
              'date' => 'April 5, 2026',
        'desc' => 'This workshop covered modern web development including HTML, CSS, JS and frameworks. Students built real-world projects.',
        'likes' => 12
        ],
        [
            'title' => 'Campus Memories',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
            'date' => 'March 20, 2026',
        'desc' => 'Students participated in community services and creative events across campus.',
        'likes' => 8
        ],
        [
            'title' => 'Campus Memories',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
            'date' => 'March 20, 2026',
        'desc' => 'Students participated in community services and creative events across campus.',
        'likes' => 8
        ],
        [
            'title' => 'Campus Memories',
            'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
            'date' => 'March 20, 2026',
        'desc' => 'Students participated in community services and creative events across campus.',
        'likes' => 8
        ],
    ];
    ?>

    <section class="mb-4">
            <div class="row g-4">
                <?php foreach ($galleryItems as $galleryItem): ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <article class="photo-gallery-card gallery-item"
                        data-title="<?= $galleryItem['title']; ?>"
                        data-image="<?= $galleryItem['image']; ?>"
                        data-date="<?= $galleryItem['date']; ?>"
                        data-desc="<?= $galleryItem['desc']; ?>"
                        data-likes="<?= $galleryItem['likes']; ?>">
                            <img src="<?= $galleryItem['image']; ?>" class="photo-gallery-image">

        <div class="photo-gallery-caption">
            <h3><?= $galleryItem['title']; ?></h3>
        </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>
</div>
    <?php include('./include/footer.php'); ?>
    <?php include __DIR__ . '/include/blog-sidebar-script.php'; ?>
<div class="modal fade" id="galleryModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="row g-0">

        <!-- LEFT IMAGE -->
        <div class="col-md-7 bg-dark">
          <img id="modalImage" class="w-100 h-100 object-fit-cover">
          <div class="modal-prev modal-nav"><i class="fa fa-chevron-left"></i></div>
<div class="modal-next modal-nav"><i class="fa fa-chevron-right"></i></div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-5 d-flex flex-column" style="height:600px">

          <!-- HEADER -->
          <div class="p-3 border-bottom">
            <h5 id="modalTitle" class="mb-1 fw-bold"></h5>
            <small id="modalDate" class="text-muted"></small>
          </div>

          <!-- DESCRIPTION -->
          <div class="p-3 border-bottom">
            <p id="modalDesc"></p>
          </div>

          <!-- LIKE + SHARE -->
          <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
            <div>
              👍 <span id="likeCount">0</span> Likes
            </div>

            <div class="d-flex gap-2">
              <button class="btn btn-light btn-sm" id="likeBtn">👍 Like</button>
              <button class="btn btn-light btn-sm" id="shareBtn">🔗 Share</button>
            </div>
          </div>

          <!-- COMMENTS -->
          <div class="flex-grow-1 overflow-auto p-3" id="commentList">
            <!-- comments will appear here -->
          </div>

          <!-- COMMENT INPUT -->
          <div class="p-3 border-top">
            <div class="input-group">
              <input type="text" id="commentInput" class="form-control" placeholder="Write a comment...">
              <button class="btn btn-primary" id="postComment">Post</button>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/common.js"></script>
<script>
const searchInput = document.getElementById('blogSearchInput');
const searchBtn = document.getElementById('searchBtn');
const blogCardContainers = document.querySelectorAll('#events .blog-card-item');
const notFound = document.getElementById('notFoundMessage');

function filterBlogs() {
    const searchTerm = searchInput.value.toLowerCase();
    let visibleCount = 0;

    blogCardContainers.forEach(container => {
        const card = container.querySelector('.card');
        const title = card.querySelector('.card-title')?.textContent || '';
        const description = card.querySelector('.card-text')?.textContent || '';
        const text = (title + description).toLowerCase();

        if (text.includes(searchTerm)) {
            container.style.display = 'flex';
            visibleCount++;
        } else {
            container.style.display = 'none';
        }
    });

    // Show / Hide Not Found
    if (visibleCount === 0) {
        notFound.style.display = 'block';
    } else {
        notFound.style.display = 'none';
    }
}

// Button click
searchBtn.addEventListener('click', filterBlogs);

// Enter key
searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        filterBlogs();
    }
});

// Live typing
searchInput.addEventListener('input', filterBlogs);
</script>
<script>
let currentIndex = 0;
let items = document.querySelectorAll(".gallery-item");
let currentLikes = 0;

// OPEN MODAL
items.forEach((item, index) => {
    item.addEventListener("click", () => {
        currentIndex = index;
        loadData(item);

        const modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('galleryModal'));
        modal.show();
    });
});

// LOAD DATA
function loadData(item){
    const title = item.dataset.title;
    const image = item.dataset.image;
    const date = item.dataset.date;
    const desc = item.dataset.desc;
    currentLikes = parseInt(item.dataset.likes || 0);

    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalImage").src = image;
    document.getElementById("modalDate").innerText = date;
    document.getElementById("modalDesc").innerText = desc;
    document.getElementById("likeCount").innerText = currentLikes;
}

// NEXT
document.querySelector(".modal-next").onclick = () => {
    currentIndex = (currentIndex + 1) % items.length;
    loadData(items[currentIndex]);
};

// PREV
document.querySelector(".modal-prev").onclick = () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    loadData(items[currentIndex]);
};

// LIKE ANIMATION
document.getElementById("likeBtn").onclick = function(){
    currentLikes++;
    document.getElementById("likeCount").innerText = currentLikes;

    this.classList.add("liked");
    setTimeout(()=> this.classList.remove("liked"), 300);
};

// COMMENT
document.getElementById("postComment").onclick = function(){
    const input = document.getElementById("commentInput");
    if(input.value.trim() === "") return;

    document.getElementById("commentList").innerHTML +=
        `<div class="mb-2 p-2 bg-white rounded shadow-sm">${input.value}</div>`;

    input.value="";
};
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
