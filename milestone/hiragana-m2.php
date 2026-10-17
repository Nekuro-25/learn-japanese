<?php
require_once __DIR__ . '/../config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 2: Hiragana Derivatives - Learn Japanese</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>

<body>
    <div class="card">
        <header class="title">
            <div class="title-text">
                <h1>MILESTONE 2: INTERMEDIATE HIRAGANA</h1>
                <p class="subtitle">
                    Mastering the Dakuten and Handakuten in 3 days
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
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <p>
                        I won't explain too much, but since me and you have already master Hiragana (Just suggestion). I have a high hopes to master Dakuten and Handakuten in 3 days.
                    </p>
                    <p>
                        Okay so what is Dakuten and Handakuten? It's basically the 46 basic Hiragana with a bit additional cosmetic. Dakuten has 2 small stripes on the top right menu-container, while the Handakuten has small circle on the top right corner.
                    </p>

                    <h2 style="font-size: 1.1rem; color: var(--text-primary); margin-top: 8px;">1. Learn and Master 25 Additional Hiragana (Dakuten and Handakuten)</h2>
                    <p>
                        Then again, the first thing i do is to practice writing (Although it's just stripes and small circle, but still writing is the basic). Then read full paragraphs (i use ai btw) to practice my Reading.
                    </p>
                    <p>
                        <strong>Day 1:</strong> Full writing and memorizing.<br>
                        <strong>Day 2:</strong> Reading and speaking.<br>
                        <strong>Day 3:</strong> Full test... you need to read 46 basic hiragana, and 25 dakuten handakuten fluently (fast read, not the accent).
                    </p>
                    <p>
                        I only can continue to the second milestone if I can read without delay in each word.
                    </p>
                    <p style="margin-top: 8px;">
                        Okay so that's it for the second milestone, goodbye.
                    </p>
                </div>
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
