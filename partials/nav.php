<nav aria-label="Main navigation">
    <details class="menu-container">
        <summary class="menu-toggle" aria-label="Open navigation menu">
            <span aria-hidden="true">☰</span>
        </summary>

        <div class="dropdown-content">
            <a href="<?= e($base_url) ?>index.php"
               <?= ($current_page ?? '') === 'home' ? 'class="active" aria-current="page"' : '' ?>>
                Home
            </a>
            <a href="<?= e($base_url) ?>page/intro.php"
               <?= ($current_page ?? '') === 'intro' ? 'class="active" aria-current="page"' : '' ?>>
                Introduction
            </a>

            <span class="nav-label">Kana Section</span>
            <div class="nav-group">
                <a href="<?= e($base_url) ?>page/kana/intro-kana.php"
                   <?= ($current_page ?? '') === 'kana-intro' ? 'class="active" aria-current="page"' : '' ?>>
                    Kana Introduction
                </a>
				<a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php"
					<?= ($current_page ?? '') === 'hiragana-chart' ? 'class="active" aria-current="page"' : '' ?>>
					Hiragana Chart
				</a>
            </div>

            <span class="nav-label">Milestones</span>
            <div class="nav-group">
                <a href="<?= e($base_url) ?>milestone/hiragana-m1.php"
                   <?= ($current_page ?? '') === 'm1' ? 'class="active" aria-current="page"' : '' ?>>
                    Milestone 1: Basic Hiragana
                </a>
                <a href="<?= e($base_url) ?>milestone/hiragana-m2.php"
                   <?= ($current_page ?? '') === 'm2' ? 'class="active" aria-current="page"' : '' ?>>
                    Milestone 2: Hiragana Derivatives
                </a>
            </div>
        </div>
    </details>
</nav>
