<?php
$topTabsId = $topTabsConfig['id'] ?? 'top-tabs-section';
$topTabsTitle = $topTabsConfig['title'] ?? '';
$topTabsImage = $topTabsConfig['image'] ?? './Assets/577a7723-2643x1762.jpg';   //remove after testing
$topTabsAlt = $topTabsConfig['image_alt'] ?? 'METI banner';
$topTabsButtons = $topTabsConfig['buttons'] ?? [];
$topTabsActive = $topTabsConfig['active_tab'] ?? ($topTabsButtons[0]['tab'] ?? '');
$topTabsWrapperClass = trim($topTabsConfig['wrapper_class'] ?? '');
$topTabsAos = $topTabsConfig['aos'] ?? 'fade-up';
?>
<div id="<?= htmlspecialchars($topTabsId, ENT_QUOTES, 'UTF-8'); ?>"
    class="top-tabs-banner mb-5 <?= htmlspecialchars($topTabsWrapperClass, ENT_QUOTES, 'UTF-8'); ?>"
    data-aos="<?= htmlspecialchars($topTabsAos, ENT_QUOTES, 'UTF-8'); ?>">
    <img src="<?= htmlspecialchars($topTabsImage, ENT_QUOTES, 'UTF-8'); ?>"
        alt="<?= htmlspecialchars($topTabsAlt, ENT_QUOTES, 'UTF-8'); ?>" class="top-tabs-banner-image">
    <div class="top-tabs-banner-overlay"></div>
    <div class="top-tabs-content">
        <h1 class="top-tabs-title">
            <?= htmlspecialchars($topTabsTitle, ENT_QUOTES, 'UTF-8'); ?>
        </h1>
        <?php if (!empty($topTabsButtons)): ?>
        <div class="top-tabs-actions d-flex justify-content-center flex-wrap gap-3">
            <?php foreach ($topTabsButtons as $button): ?>
            <?php
                    $buttonTab = $button['tab'] ?? '';
                    $buttonLabel = $button['label'] ?? '';
                    $buttonIcon = trim($button['icon'] ?? '');
                    $buttonClass = $buttonTab === $topTabsActive ? ' active' : '';
                    ?>
            <button type="button" class="top-tab<?= $buttonClass; ?>"
                data-tab="<?= htmlspecialchars($buttonTab, ENT_QUOTES, 'UTF-8'); ?>"
                onclick="showTabSection('<?= htmlspecialchars($buttonTab, ENT_QUOTES, 'UTF-8'); ?>')">
                <?php if ($buttonIcon !== ''): ?>
                <i class="<?= htmlspecialchars($buttonIcon, ENT_QUOTES, 'UTF-8'); ?> me-2"></i>
                <?php endif; ?>
                <?= htmlspecialchars($buttonLabel, ENT_QUOTES, 'UTF-8'); ?>
            </button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>