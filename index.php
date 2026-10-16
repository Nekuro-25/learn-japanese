<?php
require_once __DIR__ . '/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to Learn Japanese</title>

    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>

<body>
    <div class="card">
        <header class="title">
            <div class="title-text">
                <h1>LEARN JAPANESE</h1>

                <p class="subtitle">
                    Learn Japanese • Improve English • Coding Documentation
                </p>
            </div>

            <!-- Tombol Garis Tiga di Pojok Kanan Atas -->
            <nav aria-label="Main navigation">
                <details class="menu-container">
                    <summary class="menu-toggle" title="Menu">
                        <span>☰</span>
                    </summary>

                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>index.php">
                            Home
                        </a>
                        <a href="<?php echo $base_url; ?>page/intro.php">
                            Introduction
                        </a>

                        <span class="nav-label">Kana Section</span>
                        <div class="nav-group">
                            <a href="<?php echo $base_url; ?>page/kana/intro-kana.php">
                                Kana Introduction
                            </a>
                        </div>

                        <span class="nav-label">Milestones</span>
                        <div class="nav-group">
                            <a href="<?php echo $base_url; ?>milestone/hiragana-m1.php">
                                Milestone 1: Basic Hiragana
                            </a>
                        </div>
                    </div>
                </details>
            </nav>
        </header>

        <div class="content-body">
            <main>
                <p>
                    A personal project where I document my Japanese
                    learning journey while improving my English
                    and coding skills.
                </p>
            </main>

            <footer>
                <p>
                    &copy; 2026 Learn Japanese. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
</body>

</html>
