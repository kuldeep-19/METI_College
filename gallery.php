<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="./css/global.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .magazine-card {
            border-radius: 14px;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .magazine-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        /* Image */
        .img-wrapper {
            height: 220px;
            overflow: hidden;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Expand section */
        .more-content {
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            opacity: 0;
        }

        /* Active state */
        .card.active .more-content {
            max-height: 300px;
            opacity: 1;
        }

        /* Button rotate animation */
        .see-more-btn {
            transition: 0.3s;
        }

        .card.active .see-more-btn {
            transform: rotate(180deg);
        }
.gallery-modal {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.84);
    display: none;
    color: white;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    overflow: hidden;
}

.gallery-modal img {
    width: 100%;
    height: 65vh; /* 🔥 bigger image */
    object-fit: cover;
    border-radius: 10px;
}

.gallery-info {
    color: white;
    text-align: center;
    margin-top: 15px;
}

.close-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    color: white;
    cursor: pointer;
}

.nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 30px;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
}

.prev { left: 20px; }
.next { right: 20px; }

.gallery-card {
    cursor: pointer;
    transition: 0.3s;
}
.gallery-card:hover {
    transform: scale(1.03);
}
.gallery-modal h4 {
    color: #ffffff;
    font-weight: 600;
}

.gallery-modal p {
    color: #ffffff;
    font-size: 16px;
}
    </style>
</head>

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
                <div class="card shadow-sm h-100 gallery-card"
                    onclick="openGallery(<?= $index ?>)">

                    <img src="<?= $item['images'][0]['img'] ?>"
                        class="card-img-top">

                    <div class="card-body">
                        <h5><?= $item['title'] ?></h5>
                        <p><?= $item['images'][0]['desc'] ?></p>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>
            </div>
</section>
    <!-- videos -->
    <section class="container my-5">
    </section>


    <section class="container mb-5 magazine-section">

        <div class="text-center my-4">
            <h2 class="section-title">Magazines & Newsletters</h2>
            <p class="text-muted">Explore our publications</p>
        </div>

        <div class="row">

            <!-- LEFT SIDE (Magazine List) -->
            <div class="col-md-8" style="max-height:800px; overflow-y:auto;">

                <!-- ROW -->
                <div class="row">
                    <!-- CARD 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card magazine-card h-100 shadow-sm">
                            <div class="img-wrapper">
                                <img
                                    src="https://assets.hongkiat.com/uploads/42-free-online-magazines-for-designers/digitalarts-magazine.jpg">
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">METI Magazine 2026</h5>
                                <p class="text-muted small">January 2026</p>

                                <p class="card-text flex-grow-1">
                                    This edition covers innovation in hydropower and AI systems.
                                </p>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-sm"
                                        onclick="openPDF('1-POts-METI (5).pdf')">View</button>
                                    <button class="btn btn-outline-secondary btn-sm see-more-btn" style="max-height:100px; overflow-y:auto;">
                                        See More ▼
                                    </button>
                                </div>

                                <div class="more-content">
                                    <hr>
                                    <p>Full details here... Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Voluptatum deleniti ab pariatur cum animi corporis exercitationem modi officiis,
                                        quisquam ipsa aliquam omnis nulla neque perferendis quae numquam beatae dolorum,
                                        cumque expedita consequatur esse. Inventore, sapiente explicabo!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <button class="nav prev position-absolute start-0 top-50 translate-middle-y" onclick="prevSlide()">❮</button>
            <button class="nav next position-absolute end-0 top-50 translate-middle-y" onclick="nextSlide()">❯</button>
    </div>

</div>
    <?php include './include/footer.php'; ?>
    <script>
        function openPDF(file) {
            document.getElementById("pdfViewer").src = file;
        }

        document.querySelectorAll(".see-more-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                const card = this.closest(".card");

                card.classList.toggle("active");

                // Change text
                if (card.classList.contains("active")) {
                    this.innerText = "See Less ▲";
                } else {
                    this.innerText = "See More ▼";
                }
            });
        });
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
document.addEventListener("keydown", function(e) {
    if (e.key === "Escape") closeGallery();
    if (e.key === "ArrowRight") nextSlide();
    if (e.key === "ArrowLeft") prevSlide();
});
</script>
</body>

</html>