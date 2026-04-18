<?php
$topbar = [
    "logo" => "https://cslmeti.in/assets/images/new-logo-1-137x75.jpg",
    "title" => "Cochin Shipyard Limited",
    "subtitles" => [
        "A Government of India Enterprise • Miniratna Company",
        "Ministry of Ports, Shipping & Waterways"
    ],
    "institute" => "Marine Engineering Training Institute (METI) – Vigyana Sagar",
    "apply_link" => "course-admission.php#Apply-Now",
    "apply_text" => "Apply Now"
];
?>


<?php
function renderTopBar($data) {
?>
<div class="top-bar py-2">
  <div class="container d-flex align-items-center justify-content-between flex-wrap">

    <!-- Left Section -->
    <div class="d-flex align-items-center gap-3">
      
      <div class="logo">
        <img src="<?= $data['logo']; ?>" alt="Logo">
      </div>

      <div class="title-text">
        <h1><?= $data['title']; ?></h1>

        <?php foreach ($data['subtitles'] as $sub): ?>
          <p class="subtitle"><?= $sub; ?></p>
        <?php endforeach; ?>

        <div class="meti"><?= $data['institute']; ?></div>
      </div>

    </div>

    <!-- Apply Button -->
    <a href="<?= $data['apply_link']; ?>" class="apply-btn">
      <?= $data['apply_text']; ?>
    </a>

  </div>
</div>
<?php
}
?>
<?php renderTopBar($topbar); ?>
<?php
$menus = [
    [
        "title" => "Home",
        "link" => "index.php",
        "icon" => "fa-solid fa-house",
        "children" => []
    ],
    [
        "title" => "About Us",
        "link" => "#",
        "icon" => "fa-solid fa-circle-info",
        "children" => [
            ["title" => "About METI", "link" => "about.php#tab-about", "icon" => "fa-solid fa-building-columns"],
            ["title" => "Why Us", "link" => "about.php#tab-whyus", "icon" => "fa-solid fa-star"],
            ["title" => "Staff & Faculty", "link" => "about.php#tab-staff-faculty", "icon" => "fa-solid fa-users"],
            ["title" => "Facilities", "link" => "about.php#tab-facilities", "icon" => "fa-solid fa-building"],
        ]
    ],
    [
        "title" => "Course & Admission",
        "link" => "#",
        "icon" => "fa-solid fa-graduation-cap",
        "children" => [
            ["title" => "Course", "link" => "course-admission.php#course", "icon" => "fa-solid fa-book-open"],
            ["title" => "Apply Now", "link" => "course-admission.php#Apply-Now", "icon" => "fa-solid fa-pen-to-square"],
            ["title" => "Fee Payment", "link" => "course-admission.php#Fee-Payment", "icon" => "fa-solid fa-credit-card"],
            ["title" => "Admission Info", "link" => "course-admission.php#Admission-Information", "icon" => "fa-solid fa-clipboard-list"],
        ]
    ],
    [
        "title" => "Placement & Career",
        "link" => "placement-career.php",
        "icon" => "fa-solid fa-briefcase",
        "children" => []
    ],
    [
        "title" => "Alumni",
        "link" => "alumni.php",
        "icon" => "fa-solid fa-user-group",
        "children" => []
    ],
    [
        "title" => "Blog",
        "link" => "blog.php",
        "icon" => "fa-solid fa-blog",
        "children" => [
            ["title" => "Event", "link" => "blog.php", "icon" => "fa-solid fa-calendar-days"],
            ["title" => "Activities", "link" => "blog.php#activities", "icon" => "fa-solid fa-person-running"],
            ["title" => "Photo", "link" => "blog.php#photo-gallery", "icon" => "fa-solid fa-camera"],
        ]
    ],
    [
        "title" => "Contact",
        "link" => "contact.php",
        "icon" => "fa-solid fa-envelope",
        "children" => []
    ],
    [
        "title" => "Gallery",
        "link" => "gallery.php",
        "icon" => "fa-solid fa-images",
        "children" => []
    ],
    [
        "title" => "Login",
        "link" => "#",
        "icon" => "fa-solid fa-right-to-bracket",
        "children" => []
    ]
];
?>
<?php
function renderMenu($menus) {
    foreach ($menus as $menu) {

        $hasChild = !empty($menu['children']);

        if ($hasChild) {
            echo '<li class="nav-item dropdown">';
            echo '<a class="nav-link dropdown-toggle" href="'.$menu['link'].'" data-bs-toggle="dropdown">';
            echo '<i class="'.$menu['icon'].'"></i> '.$menu['title'].'</a>';

            echo '<ul class="dropdown-menu">';
            foreach ($menu['children'] as $child) {
                echo '<li><a class="dropdown-item" href="'.$child['link'].'">';
                echo '<i class="'.$child['icon'].'"></i> '.$child['title'].'</a></li>';
            }
            echo '</ul>';

            echo '</li>';
        } else {
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="'.$menu['link'].'">';
            echo '<i class="'.$menu['icon'].'"></i> '.$menu['title'].'</a>';
            echo '</li>';
        }
    }
}
?>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top nav-container">
  <div class="container">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-auto">
        <?php renderMenu($menus); ?>
      </ul>
    </div>

  </div>
</nav>

 

