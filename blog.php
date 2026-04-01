<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METI BLOG</title>
    <link rel="stylesheet" href="./css/global.css">
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

        /*--------------------------------------------------------------
# Events Section
--------------------------------------------------------------*/
.events .card {
  background-color: var(--background-color);
  border: 0;
  padding: 0 30px;
  margin-bottom: 60px;
  position: relative;
}

.events .card-img {
  width: calc(100% + 60px);
  margin-left: -30px;
  overflow: hidden;
  z-index: 9;
  border-radius: 0;
}

.events .card-img img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.events .card-body {
  z-index: 10;
  background: var(--surface-color);
  border-top: 4px solid var(--surface-color);
  padding: 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-top: -60px;
  transition: 0.3s;
}

.events .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
}

.events .card-title a {
  color: var(--default-color);
  transition: 0.3s;
}

.events .card-text {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.events .card:hover img {
  transform: scale(1.1);
}

.events .card:hover .card-body {
  border-color: var(--accent-color);
}

.events .card:hover .card-body .card-title a {
  color: var(--accent-color);
}

/* Latest Blog Sidebar */
.latest-blog-sidebar {
  position: sticky;
  top: 100px;
  background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);
  border: 2px solid rgba(13, 110, 253, 0.15);
  border-radius: 15px;
  padding: 25px;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
}

.sidebar-header {
  margin-bottom: 25px;
  border-bottom: 2px solid rgba(13, 110, 253, 0.2);
  padding-bottom: 15px;
}

.sidebar-title {
  color: var(--default-color);
  font-weight: 700;
  font-size: 1.1rem;
  margin: 0;
  display: flex;
  align-items: center;
  gap: 8px;
}

.sidebar-title i {
  color: #f0a500;
  font-size: 1.2rem;
}

.notification-list {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-bottom: 20px;
}

.notification-item {
  display: flex;
  gap: 12px;
  padding: 12px;
  border-radius: 10px;
  background: white;
  border-left: 4px solid var(--accent-color);
  transition: all 0.3s ease;
  cursor: pointer;
}

.notification-item:hover {
  background: rgba(13, 110, 253, 0.05);
  transform: translateX(5px);
  box-shadow: 0 4px 12px rgba(13, 110, 253, 0.1);
}

.notification-number {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 32px;
  height: 32px;
  background: linear-gradient(135deg, #0d6efd, #0a58ca);
  color: white;
  border-radius: 50%;
  font-weight: 700;
  font-size: 0.9rem;
}

.notification-content {
  flex: 1;
}

.notification-title {
  margin: 0 0 6px 0;
  font-size: 0.95rem;
  font-weight: 600;
  line-height: 1.4;
}

.notification-title a {
  color: var(--default-color);
  text-decoration: none;
  transition: color 0.3s ease;
}

.notification-title a:hover {
  color: var(--accent-color);
}

.notification-date {
  margin: 0;
  font-size: 0.85rem;
  color: #64748b;
  display: flex;
  align-items: center;
  gap: 5px;
}

.sidebar-footer {
  text-align: center;
  padding-top: 15px;
  border-top: 1px solid rgba(13, 110, 253, 0.1);
}

.view-all-btn {
  color: var(--accent-color);
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  display: inline-block;
}

.view-all-btn:hover {
  color: #0d6efd;
  transform: translateX(5px);
}

/* Responsive Sidebar */
@media (max-width: 991.98px) {
  .latest-blog-sidebar {
    position: relative;
    top: 0;
    margin-bottom: 30px;
  }
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
  border: 2px solid rgba(13, 110, 253, 0.2) !important;
  border-radius: 12px !important;
  padding: 12px 18px !important;
  font-size: 0.95rem !important;
  transition: all 0.3s ease !important;
  background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%) !important;
}

.search-box:focus {
  border-color: var(--accent-color) !important;
  box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.1) !important;
  background: white !important;
}

.search-box::placeholder {
  color: #9ca3af;
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

  $events = [
            [
              'title' => 'Introduction to webdesign',
              'date' => 'Sunday, September 26th at 7:00 pm',
              'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
              'description' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'
            ],
            [
              'title' => 'Marketing Strategies',
              'date' => 'Sunday, November 15th at 7:00 pm',
              'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
              'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo'
            ],   [
              'title' => 'Marketing Strategies',
              'date' => 'Sunday, November 15th at 7:00 pm',
              'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
              'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo'
            ],
               [
              'title' => 'Marketing Strategies',
              'date' => 'Sunday, November 15th at 7:00 pm',
              'image' => 'https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg',
              'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo'
            ]
          ];

  ?>
 <?php include "./include/top-tabs-banner.php"; ?>
        <!-- Search -->
    <div class="row mb-5">
                <div class="section-title">
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="col-md-3 ms-auto">
            <input type="text" class="form-control search-box" placeholder="🔍 Search blog...">
        </div>
    </div>
 <div class="container">

    <!-- Events Section -->
    <section id="events" class="events section">
        
        <div class="row g-4" data-aos="fade-up">
            <!-- Left Section: Blog Posts Grid -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php foreach ($events as $event): ?>
                        <div class="col-md-6 d-flex">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href=""><?php echo htmlspecialchars($event['title']); ?></a></h5>
                                    <p class="fst-italic text-center"><?php echo htmlspecialchars($event['date']); ?></p>
                                    <p class="card-text"><?php echo htmlspecialchars($event['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Section: Fixed Latest Blog Notifications -->
            <div class="col-lg-4">
                <div class="latest-blog-sidebar">
                    <div class="sidebar-header">
                        <h5 class="sidebar-title">
                            <i class="fa-solid fa-fire"></i> Latest Updates
                        </h5>
                    </div>
                    
                    <div class="notification-list">
                        <?php foreach (array_slice($events, 0, 5) as $index => $post): ?>
                            <div class="notification-item">
                                <div class="notification-number"><?php echo $index + 1; ?></div>
                                <div class="notification-content">
                                    <h6 class="notification-title">
                                        <a href=""><?php echo htmlspecialchars($post['title']); ?></a>
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
                        <a href="#" class="view-all-btn">View All Posts →</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Events Section -->

    <!-- ACTIVITIES -->
    <h2 class="section-title mt-5">Activities</h2>
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg" class="blog-img">
                <div class="card-body">
                    <h5>Web Development Workshop</h5>
                    <p class="text-muted"><i class="fa-solid fa-calendar"></i> Jan 10, 2025</p>
                    <p>Hands-on workshop on modern web technologies.</p>
                    <span class="tag">Workshop</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://thumbs.dreamstime.com/b/blogging-blog-concepts-ideas-worktable-blogging-blog-concepts-ideas-white-worktable-110423482.jpg" class="blog-img">
                <div class="card-body">
                    <h5>Community Service</h5>
                    <p class="text-muted"><i class="fa-solid fa-calendar"></i> Dec 5, 2024</p>
                    <p>Students engaged in social activities and support programs.</p>
                    <span class="tag">Social</span>
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

    <!-- SUBSCRIBE -->
    <div class="mt-5 text-center">
        <h4>Subscribe for Updates</h4>
        <input type="email" class="form-control w-50 mx-auto my-3" placeholder="Enter your email">
        <button class="btn btn-primary px-4">
            <i class="fa-solid fa-envelope"></i> Subscribe
        </button>
    </div>

</div>

    <?php include('./include/footer.php'); ?>
<script src="./js/common.js"></script>
</body>
</html>