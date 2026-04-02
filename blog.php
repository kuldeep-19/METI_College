<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METI BLOG</title>
  <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .section-title {
            font-weight: 700;
            margin-bottom: 30px;
        }

.events-preview-footer {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.see-more-link {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 24px;
  border-radius: 999px;
  background: var(--nav-bg);
  color: #ffffff;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 10px 24px rgba(10, 22, 40, 0.18);
  transition: var(--transition-smooth);
}

.see-more-link:hover {
  color: #ffffff;
  transform: translateY(-3px);
  box-shadow: 0 16px 30px rgba(10, 22, 40, 0.24);
}

/* Reduce Left-Right Margins */
.container {
  padding-left: 12px !important;
  padding-right: 12px !important;
}

#events.section .container {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.row.g-4 {
  margin-left: -8px !important;
  margin-right: -8px !important;
}

.row.g-4 > [class*="col-"] {
  padding-left: 8px !important;
  padding-right: 8px !important;
}

/* Search Box Styling */
.search-box {
  border: none !important;
  border-radius: 0 !important;
  padding: 12px 18px !important;
  font-size: 0.95rem !important;
  transition: all 0.3s ease !important;
  background: white !important;
}

.search-box:focus {
  box-shadow: none !important;
  outline: none !important;
  background: white !important;
}

.search-box::placeholder {
  color: #9ca3af;
}

/* Input Group Enhancement */
.input-group-lg .input-group-text {
  border: none !important;
  padding: 0 15px !important;
  font-size: 1.1rem !important;
  color: var(--accent);
  background: white !important;
}

.input-group-lg .btn {
  border: none !important;
  border-radius: 0 8px 8px 0 !important;
  transition: var(--transition-smooth) !important;
  font-weight: 600;
  background: linear-gradient(135deg, var(--accent), #1e3a5f ) !important;
  color: white !important;
}

.input-group-lg .btn:hover {
  transform: translateX(5px);
  box-shadow: 0 4px 15px rgba(0, 180, 216, 0.3) !important;
}

.input-group-lg {
  border-radius: 8px !important;
  overflow: hidden !important;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08) !important;
}

.input-group-lg .input-group-text {
  border-radius: 8px 0 0 8px !important;
}

/* Activities & Blog Cards */
.blog-card {
  border: none;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  transition: var(--transition-smooth);
}

.blog-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px rgba(0, 180, 216, 0.15);
}

.blog-card .blog-img {
  width: 100%;
  height: 240px;
  object-fit: cover;
  display: block;
  transition: var(--transition-smooth);
}

.blog-card:hover .blog-img {
  transform: scale(1.05);
}

.blog-card .card-body {
  padding: 20px;
}

.blog-card h5 {
  color: var(--text-dark);
  font-weight: 700;
  margin-bottom: 12px;
  transition: var(--transition-smooth);
}

.blog-card:hover h5 {
  color: var(--accent);
}

.blog-card .text-muted {
  font-size: 0.9rem;
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.blog-card .text-muted i {
  color: var(--accent);
}

.blog-card .desc-preview {
  font-size: 0.95rem;
  margin-bottom: 12px;
  line-height: 1.5;
}

.blog-card .tag {
  display: inline-block;
  padding: 4px 12px;
  background: linear-gradient(135deg, var(--accent), #008ba3);
  color: white;
  border-radius: 15px;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.4px;
  width: fit-content;
  transition: var(--transition-smooth);
  margin-left: 8px;
}

.blog-card .tag:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 12px rgba(0, 180, 216, 0.35);
}

.collapse-desc {
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px solid #e8edf3;
  font-size: 0.9rem;
  line-height: 1.6;
  color: var(--text-muted);
}

.btn-collapse {
  background: none;
  border: none;
  color: var(--accent);
  font-weight: 600;
  padding: 0;
  cursor: pointer;
  font-size: 0.9rem;
  transition: var(--transition-smooth);
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.btn-collapse i {
  transition: transform 0.2s ease;
}

.btn-collapse[aria-expanded="true"] i {
  transform: rotate(180deg);
}

.btn-collapse:hover {
  color: var(--primary);
}
    </style>

</head>
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

    <!-- GALLERY -->
    <h2 class="section-title mt-5">Photo Gallery</h2>
    <div class="row g-3 gallery">

        <div class="col-md-3">
            <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg">
        </div>
        <div class="col-md-3">
            <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg">
        </div>
        <div class="col-md-3">
            <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg">
        </div>
        <div class="col-md-3">
            <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg">
        </div>

    </div>
</div>

    <?php include('./include/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/common.js"></script>
<script>
    // Blog Search Functionality - Only target blog cards in Events section
    const searchInput = document.getElementById('blogSearchInput');
    const searchBtn = document.getElementById('searchBtn');
    const blogCardContainers = document.querySelectorAll('#events .blog-card-item'); // Only Events section

    function filterBlogs() {
        const searchTerm = searchInput.value.toLowerCase();
        
        blogCardContainers.forEach(container => {
            const card = container.querySelector('.card');
            const title = card.querySelector('.card-title')?.textContent || '';
            const description = card.querySelector('.card-text')?.textContent || '';
            const text = (title + description).toLowerCase();
            
            if (text.includes(searchTerm)) {
                container.style.display = 'flex';
            } else {
                container.style.display = 'none';
            }
        });
    }

    // Search on button click
    searchBtn.addEventListener('click', filterBlogs);

    // Search on Enter key
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            filterBlogs();
        }
    });

    // Real-time search
    searchInput.addEventListener('input', filterBlogs);

</script>
<?php include __DIR__ . '/include/blog-sidebar-script.php'; ?>
</body>
</html>
