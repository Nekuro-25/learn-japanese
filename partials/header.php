<header class="title">
    <div class="title-text">
        <h1><?= e($page_heading ?? $page_title) ?></h1>
        <?php if (!empty($page_subtitle)): ?>
            <p class="subtitle"><?= e($page_subtitle) ?></p>
        <?php endif; ?>
    </div>

    <?php include __DIR__ . '/nav.php'; ?>
</header>
