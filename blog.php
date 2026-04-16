<?php
$page_title = "Blogs";
include __DIR__ . '/include/header.php';
?>
<body>
    <?php include __DIR__ . "/include/navbar.php"; ?>
     
    <?php
  $topTabsConfig = [
    'id' => 'top-tabs-section',
    'title' => 'blog',
    'image' => './Assets/577a7723-2643x1762.jpg',
    'image_alt' => 'METI campus banner',
    'active_tab' => 'blog',
  ];
  include __DIR__ . "/include/top-tabs-banner.php"; 
  require __DIR__ . '/include/blog-data.php';
  require __DIR__ . '/include/gallery-data.php';
  
  $events = isset($events) ? $events : [];
  $previewEvents = array_slice($events, 0, 4);
  ?>

        <!-- Search -->
    <div class="container mt-3 mb-3">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4">
                <h2 class="section-title mb-0">Events</h2>
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
    <div class="container activities-section-header" id="activities">
        <h2 class="section-title mt-5">Activities</h2>
    </div>
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

<div class="container" id="photo-gallery">
    <!-- GALLERY -->
    <div class="container pt-3">
        <h2 class="section-title mt-5 mb-2">Photo Gallery</h2>
    </div>

    <section class="mb-4">
            <div class="row g-4">
                <?php foreach ($galleryItems as $galleryItem): ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="gallery-detail.php?id=<?= $galleryItem['id']; ?>" class="text-decoration-none">
                            <article class="photo-gallery-card">
                                <img src="<?= $galleryItem['image']; ?>" class="photo-gallery-image" alt="<?= $galleryItem['title']; ?>">
                                <div class="photo-gallery-caption">
                                    <h3><?= $galleryItem['title']; ?></h3>
                                    <p class="mb-0 small text-white-50"><?= $galleryItem['date']; ?></p>
                                </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>
</div>

    <?php include __DIR__ . '/include/footer.php'; ?>
    <?php include __DIR__ . '/include/blog-sidebar-script.php'; ?>
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

// Initialize AOS
AOS.init({
    duration: 800,
    once: true
});
</script>
</body>
</html>
