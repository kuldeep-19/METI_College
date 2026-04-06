<?php
$videoData = [
    [
        "title" => "Hydropower Overview",
        "videos" => [
            [
                "video" => "https://www.w3schools.com/html/mov_bbb.mp4",
                "title" => "Plant Overview",
                "desc" => "Complete hydropower plant overview. This video covers the full technical structure and operation of a modern hydropower plant, including dam stability and energy conversion."
            ],
            [
                "video" => "https://www.w3schools.com/html/movie.mp4",
                "title" => "Daily Maintenance",
                "desc" => "A deep dive into the daily maintenance routines required to keep the plant running efficiently."
            ]
        ]
    ],
    [
        "title" => "Turbine Working",
        "videos" => [
            [
                "video" => "https://www.w3schools.com/html/movie.mp4",
                "title" => "Turbine Demo",
                "desc" => "How turbine works. This demonstration explains how water pressure is converted into mechanical energy through the blade rotation systems."
            ]
        ]
    ]
];

$categoryIndex = isset($_GET['category']) ? (int)$_GET['category'] : 0;
$category = isset($videoData[$categoryIndex]) ? $videoData[$categoryIndex] : $videoData[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $category['title'] ?> - Video Gallery</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <style>
        .video-player-container {
            display: none;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 50px;
        }
        .video-card {
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }
        .video-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .play-icon-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3rem;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        .video-card:hover .play-icon-overlay {
            opacity: 1;
        }
        .video-desc-box {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        video {
            border-radius: 10px;
            width: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #1b1b1cff;
            font-weight: 500;
            transition: color 0.3s;
        }
        .btn-back:hover { color: #034f91ff; }
    </style>
</head>
<body>
    <?php include './include/navbar.php'; ?>

    <main class="container my-5">
        <a href="gallery.php#video-gallery" class="btn-back">
            <i class="fa fa-arrow-left"></i> Back to Gallery
        </a>

        <div class="text-center">
            <h2 class="section-title"><?= $category['title'] ?></h2>
        </div>

        <!-- SEARCH/FILTER (Optional enhancement) -->
        
        <!-- VIDEO PLAYER SECTION (Initially Hidden) -->
        <div id="videoPlayerSection" class="video-player-container">
            <div class="row align-items-center">
                <!-- Description Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="video-desc-box pe-md-4">
                        <h2 id="currentPlayerTitle" class="fw-bold mb-3"></h2>
                        <p id="currentPlayerDesc" class="text-muted lh-base"></p>
                    </div>
                </div>
                <!-- Video Right -->
                <div class="col-md-6">
                    <video id="mainVideoPlayer" controls controlsList="nodownload">
                        <source id="videoSource" src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

        <!-- VIDEO GRID -->
        <div class="row g-4">
            <?php foreach($category['videos'] as $index => $v): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card video-card shadow-sm h-100" 
                     onclick='playVideo(<?= json_encode($v['title']) ?>, <?= json_encode($v['desc']) ?>, <?= json_encode($v['video']) ?>)'>
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759" class="card-img-top" style="height: 180px; object-fit: cover;">
                        <div class="play-icon-overlay">
                            <i class="fa fa-circle-play"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-bold mb-1"><?= $v['title'] ?></h6>
                        <p class="small text-muted mb-0"><?= substr($v['desc'], 0, 80) ?>...</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include './include/footer.php'; ?>

    <script>
        function playVideo(title, desc, src) {
            const playerSection = document.getElementById('videoPlayerSection');
            const mainVideo = document.getElementById('mainVideoPlayer');
            const videoSource = document.getElementById('videoSource');
            
            // Set content
            document.getElementById('currentPlayerTitle').innerText = title;
            document.getElementById('currentPlayerDesc').innerText = desc;
            
            // Set source and refresh player
            videoSource.src = src;
            mainVideo.load();
            
            // Show section
            playerSection.style.display = 'block';
            
            // Smooth scroll to player
            playerSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Auto play
            mainVideo.play();
        }
    </script>
</body>
</html>
