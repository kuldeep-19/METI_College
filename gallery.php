<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/global.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include './include/navbar.php'; ?>
    <section class="container my-5 ">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Magazines & Newsletters</h2>
            <p class="text-muted">Explore our publications</p>
        </div>

        <div class="row">

            <!-- LEFT SIDE (Magazine List) -->
            <div class="col-md-8" style="max-height:500px; overflow-y:auto;">
                <div class="row g-3">

                    <!-- Magazine 1 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="cover1.jpg" class="card-img-top" alt="Magazine">

                            <div class="card-body">
                                <h6 class="card-title">METI Magazine 2026</h6>
                                <p class="text-muted small">January 2026</p>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-sm" onclick="openPDF('1-POts-METI (5).pdf')">
                                        View
                                    </button>

                                    <a href="./1-POts-METI (5).pdf" download class="btn btn-outline-secondary btn-sm">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Magazine 1 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="cover1.jpg" class="card-img-top" alt="Magazine">

                            <div class="card-body">
                                <h6 class="card-title">METI Magazine 2026</h6>
                                <p class="text-muted small">January 2026</p>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-sm" onclick="openPDF('1-POts-METI (5).pdf')">
                                        View
                                    </button>

                                    <a href="./1-POts-METI (5).pdf" download class="btn btn-outline-secondary btn-sm">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Magazine 2 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="cover2.jpg" class="card-img-top" alt="Magazine">

                            <div class="card-body">
                                <h6 class="card-title">METI Magazine 2025</h6>
                                <p class="text-muted small">December 2025</p>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-sm" onclick="openPDF('mag2.pdf')">
                                        View
                                    </button>

                                    <a href="mag2.pdf" download class="btn btn-outline-secondary btn-sm">
                                        Download
                                    </a>
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

    <?php include './include/footer.php'; ?>
    <script>
        function openPDF(file) {
            document.getElementById("pdfViewer").src = file;
        }
    </script>
</body>

</html>