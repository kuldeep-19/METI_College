    <section class="partners-section-new py-2">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="h2 fw-bold text-navy section-title">Our Top Partners in Recruitment</h2>
                <p class="lead text-muted">Leading global shipping companies that trust METI for their future officers.</p>
            </div>

            <div class="logo-slider mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="logo-track">
                    <?php
                    $partners = [
                        ["name" => "Maersk Line", "logo" => "Assets/image/maersk-advrt-2-886x1083.jpg"],
                        ["name" => "Synergy Group", "logo" => "Assets/partner-log/synergy1-355x352.jpg"],
                        ["name" => "Bernhard Schulte", "logo" => "Assets/partner-log/bsm1-1-173x100.jpg"],
                        ["name" => "Fleet Management", "logo" => "Assets/partner-log/fleet-logo1-256x97.jpg"],
                        ["name" => "d'Amico", "logo" => "Assets/partner-log/damico-logo1-195x231.jpg"],
                        ["name" => "Elegant Marine", "logo" => "Assets/partner-log/elegant-logo1-311x114.jpg"],
                        ["name" => "K Line", "logo" => "Assets/partner-log/klsm1-256x248.jpg"],
                        ["name" => "Sima Marine", "logo" => "Assets/partner-log/sima-marine-logo-new-126x98.jpg"],
                        ["name" => "Wilhelmsen", "logo" => "Assets/partner-log/wilhelmsen1-506x260.jpg"],
                    ];
                    // Repeat list for smooth loop
                    $display_partners = array_merge($partners, $partners);
                    foreach ($display_partners as $partner):
                    ?>
                        <div class="partner-card-modern">
                            <div class="partner-inner">
                                <?php if ($partner['logo'] != ""): ?>
                                    <img src="<?= $partner['logo'] ?>" alt="<?= $partner['name'] ?>" class="partner-logo-img mb-3">
                                <?php else: ?>
                                    <i class="fa-solid fa-anchor mb-3 text-teal opacity-50"></i>
                                <?php endif; ?>
                                <h6 class="fw-bold mb-0 text-navy"><?= $partner['name'] ?></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>