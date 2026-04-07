<?php
$page_title = "Gallery";
include('include/header.php');
?>

<body>
    <?php include './include/navbar.php'; ?>
    <!-- photo -->
    <?php
    $galleryData = [
        [
            "title" => "Hydropower Plant",
            "images" => [
                [
                    "img" => "https://images.unsplash.com/photo-1506744038136-46273834b3fb",
                    "title" => "Dam View",
                    "desc" => "Front view of hydropower dam"
                ],
                [
                    "img" => "https://images.unsplash.com/photo-1501785888041-af3ef285b470",
                    "title" => "Water Flow",
                    "desc" => "High pressure water flow"
                ]
            ]
        ],
        [
            "title" => "Turbine System",
            "images" => [
                [
                    "img" => "https://images.unsplash.com/photo-1516117172878-fd2c41f4a759",
                    "title" => "Turbine",
                    "desc" => "Electric turbine system"
                ]
            ]
        ]
    ];
?>
    <?php
$videoData = [
    [
        "title" => "Hydropower Overview",
        "videos" => [
            [
                "video" => "https://www.w3schools.com/html/mov_bbb.mp4",
                "title" => "Plant Overview",
                "desc" => "Complete hydropower plant overview"
            ]
            ],
             "videos" => [
            [
                "video" => "https://www.w3schools.com/html/mov_bbb.mp4",
                "title" => "Plant Overview",
                "desc" => "Complete hydropower plant overview"
            ]
        ]
    ],
    [
        "title" => "Turbine Working",
        "videos" => [
            [
                "video" => "https://www.w3schools.com/html/movie.mp4",
                "title" => "Turbine Demo",
                "desc" => "How turbine works"
            ]
        ]
    ]
];
?>
    <section class="container my-5">
        <div class="text-center mb-4">
            <h2 class="section-title">Photo Gallery</h2>
            <p class="text-muted">Explore our collection of photos</p>
        </div>

        <div class="row">
            <?php foreach($galleryData as $index => $item): ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100 gallery-card" onclick="openGallery(<?= $index ?>)">

                    <img src="<?= $item['images'][0]['img'] ?>" class="card-img-top">

                    <div class="card-body">
                        <h5>
                            <?= $item['title'] ?>
                        </h5>
                        <p>
                            <?= $item['images'][0]['desc'] ?>
                        </p>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </section>
    <!-- videos -->
    <section class="container my-5">
        <div class="text-center mb-4" id="video-gallery">
            <h2 class="section-title">Video Gallery</h2>
            <p class="text-muted">Explore our collection of videos</p>
        </div>

        <div class="row">
            <?php foreach($videoData as $index => $item): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100 gallery-card"
                    onclick="window.location.href='video-gallery.php?category=<?= $index ?>'">

                    <div class="video-placeholder position-relative">
                        <img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759" class="card-img-top"
                            style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa fa-play-circle fa-3x text-white opacity-75"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5>
                            <?= $item['title'] ?>
                        </h5>
                        <p class="small text-muted">
                            <?= count($item['videos']) ?> Videos Available
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- magazines & Newslettters start -->

    <section class="container mb-5 magazine-section">

        <div class="text-center my-4">
            <h2 class="section-title">Magazines & Newsletters</h2>
            <p class="text-muted">Explore our publications</p>
        </div>

        <div class="row">

            <!-- LEFT SIDE (Magazine List) -->
            <div class="col-md-8" style="max-height:800px; overflow-y:auto; padding-right: 15px;">

                <!-- Magazine List Item 1 -->
                <div class="card mag-horizontal-card mb-4 shadow-sm border-0 ">
                    <div class="row g-0">
                        <!-- Left Side: Image -->
                        <div class="col-lg-4 col-md-5 mag-img-container">
                            <img src="https://assets.hongkiat.com/uploads/42-free-online-magazines-for-designers/digitalarts-magazine.jpg" class="img-fluid" alt="Magazine Image">
                        </div>
                        
                        <!-- Right Side: Content -->
                        <div class="col-lg-8 col-md-7 mag-content">
                            <!-- View Button Top Right -->
                            <button class="btn btn-primary btn-sm mag-view-btn px-3" onclick="openPDF('1-POts-METI (5).pdf')">
                                <i class="fa fa-eye me-1"></i> View
                            </button>

                            <h4 class="mag-title text-primary">METI Magazine 2026</h4>
                            <div class="mag-meta">
                                <span><i class="fa fa-calendar-alt me-1"></i> January 2026</span>
                                <span class="ms-3"><i class="fa fa-clock me-1"></i> 10:30 AM</span>
                            </div>

                            <p class="mag-desc-text" id="desc-1">
                                This edition covers innovation in hydropower and AI systems. METI is at the forefront of combining sustainable energy solutions with cutting-edge artificial intelligence to revolutionize the industry. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum deleniti ab pariatur cum animi corporis exercitationem modi officiis, quisquam ipsa aliquam omnis nulla neque perferendis quae numquam beatae dolorum, cumque expedita consequatur esse. Inventore, sapiente explicabo! Full details here... Explore the deep technical insights and future projections in this comprehensive guide.
                            </p>
                            <button class="read-more-toggle" onclick="toggleDescription('desc-1', this)">Read More ▼</button>
                        </div>
                    </div>
                </div>

                <!-- You can add more list items here following the same structure -->

            </div>

            <!-- RIGHT SIDE (PDF VIEWER) -->
            <div class="col-md-4">
                <div class="border rounded shadow-sm" style="height:500px;">
                    <iframe id="pdfViewer" src="" width="100%" height="100%" style="border:none;">
                    </iframe>
                </div>
            </div>

        </div>

    </section>

    <!-- magazines & Newslettters end -->
    <div id="galleryModal" class="gallery-modal">

        <!-- CLOSE -->
        <span class="close-btn position-absolute top-0 end-0 m-3" onclick="closeGallery()">×</span>

        <div class="container">
            <div class="row align-items-center">

                <!-- IMAGE -->
                <div class="col-md-6 text-center">
                    <img id="modalImage" class="img-fluid rounded">
                </div>

                <!-- TEXT -->
                <div class="col-md-6">
                    <h4 id="modalTitle"></h4>
                    <p id="modalDesc"></p>
                </div>

            </div>
            <!-- CONTROLS -->
            <button class="nav prev position-absolute start-0 top-50 translate-middle-y"
                onclick="prevSlide()">❮</button>
            <button class="nav next position-absolute end-0 top-50 translate-middle-y" onclick="nextSlide()">❯</button>
        </div>

    </div>
    <?php include './include/footer.php'; ?>
    <script>
        function openPDF(file) {
            document.getElementById("pdfViewer").src = file;
        }

        function toggleDescription(descId, btn) {
            const desc = document.getElementById(descId);
            desc.classList.toggle('expanded');
            
            if (desc.classList.contains('expanded')) {
                btn.innerText = "Read Less ▲";
            } else {
                btn.innerText = "Read More ▼";
            }
        }
    </script>
    <script>
        const galleryData = <?= json_encode($galleryData); ?>;

        let currentGallery = [];
        let currentIndex = 0;

        function openGallery(index) {
            document.body.style.overflow = "hidden"; // prevent background scroll
            currentGallery = galleryData[index].images;
            currentIndex = 0;

            const modal = document.getElementById("galleryModal");
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            modal.style.top = scrollTop + "px";
            modal.style.display = "flex";

            updateModal();
        }

        function closeGallery() {
            document.body.style.overflow = ""; // restore scroll
            const modal = document.getElementById("galleryModal");
            modal.style.display = "none";
            setTimeout(() => {
                modal.style.top = "";
            }, 300);
        }

        function updateModal() {
            const item = currentGallery[currentIndex];

            document.getElementById("modalImage").src = item.img;
            document.getElementById("modalTitle").innerText = item.title;
            document.getElementById("modalDesc").innerText = item.desc;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % currentGallery.length;
            updateModal();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
            updateModal();
        }

        // Keyboard support
        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") closeGallery();
            if (e.key === "ArrowRight") nextSlide();
            if (e.key === "ArrowLeft") prevSlide();
        });
    </script>
</body>

</html>