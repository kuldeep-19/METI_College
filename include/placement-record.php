    <!-- Placement record -->
            <div class="container">
                                        <h5 class="d-inline-flex justify-content-center align-items-center text-navy section-title"> Student Success Highlights</h5>
                        <div class="student-swiper-container position-relative">
                            <div class="swiper student-swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($data['students'] as $st): ?>
                                        <div class="swiper-slide">
                                            <div class="student-success-card">
                                                <div class="student-img-wrapper mb-3">
                                                    <?php if ($st['img']): ?>
                                                        <img src="<?= $st['img'] ?>" alt="<?= $st['name'] ?>">
                                                    <?php elseif ($st['logo']): ?>
                                                        <img src="<?= $st['logo'] ?>" alt="<?= $st['company'] ?>" class="logo-fallback">
                                                    <?php else: ?>
                                                        <i class="fas fa-user-tie fa-2x text-muted opacity-50"></i>
                                                    <?php endif; ?>
                                                </div>
                                                <h6 class="fw-bold mb-1 card-student-name"><?= $st['name'] ?></h6>
                                                <p class="small text-muted mb-0 card-student-pos"><?= $st['pos'] ?></p>
                                                <div class="company-tag mt-2"><?= $st['company'] ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Add Pagination if needed -->
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                            <!-- Add Navigation Arrows -->
                            <div class="swiper-button-next student-swiper-next"></div>
                            <div class="swiper-button-prev student-swiper-prev"></div>
                        </div>
            </div>