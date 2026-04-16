<?php
require __DIR__ . '/include/gallery-data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$item = null;

foreach ($galleryItems as $gItem) {
    if ($gItem['id'] === $id) {
        $item = $gItem;
        break;
    }
}

// Redirect if item not found
if (!$item) {
    header('Location: blog.php');
    exit;
}

$page_title = $item['title'] . " - Gallery Detail";
include __DIR__ . '/include/header.php';
?>

<style>
    .image-card {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        aspect-ratio: 4/3;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        cursor: pointer;
    }

    .image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .image-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .image-card:hover img {
        transform: scale(1.1);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-card:hover .image-overlay {
        opacity: 1;
    }

</style>

<body>
    <?php include __DIR__ . "/include/navbar.php"; ?>

    <main class="gallery-grid">
        <div class="container my-5">
        <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
            <div class="text-center">
                <h2 class="section-title">
                    <?= htmlspecialchars($item['title']) ?>
                </h2>
            </div>
        <a href="blog.php#photo-gallery" class="btn btn-outline-navy rounded-pill px-4 py-2">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Gallery
        </a>
    </div>
            <div class="row g-4">
                <!-- Cover Image -->
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="image-card">
                        <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                        <div class="image-overlay">
                            <h6>Featured Image</h6>
                        </div>
                    </div>
                </div>

                <!-- Related Images -->
                <?php foreach ($item['related_images'] as $index => $relImg): ?>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= ($index + 1) * 100 ?>">
                    <div class="image-card">
                        <img src="<?= $relImg ?>" alt="Gallery Image <?= $index + 1 ?>">
                        <div class="image-overlay">
                            <h6>Moment #
                                <?= $index + 1 ?>
                            </h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/include/footer.php'; ?>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>