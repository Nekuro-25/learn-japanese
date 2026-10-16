<?php
require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1: Basic Hiragana - Learn Japanese</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>

<body>
    <div class="card">
        <header class="title">
            <div class="title-text">
                <h1>MILESTONE 1: BASIC HIRAGANA</h1>
                <p class="subtitle">
                    Mastering the 46 Gojūon Letters in 1 Week
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
                        Okay, so when I'm working, I realize "Why use the time for study? Why don't I use milestones so I would know how much I've learned" and boom... That's the reason I create this page.
                    </p>
                    <p>
                        Okay so I want to make 3 milestones to master Hiragana. I don't wanna have too many milestones for 1 part, so if I think it's easy, I would go with short milestones. Without further ado, let's go to the first milestone!
                    </p>

                    <h2 style="font-size: 1.1rem; color: var(--text-primary); margin-top: 8px;">1. Learn and Master 46 Basic Hiragana (Gojūon)</h2>
                    <p>
                        So I want you all (and me!) to master 46 basic hiragana in 1 week. I don't know how, but you must master it.
                    </p>
                    <p>
                        <strong>Day 1, 2, 3:</strong> Full writing and memorizing.<br>
                        <strong>Day 4, 5, 6:</strong> Reading and speaking.<br>
                        <strong>Day 7:</strong> Full test... you need to read 46 basic hiragana fluently (fast read, not the accent).
                    </p>
                    <p>
                        I only can continue to the second milestone if I can read without delay in each word.
                    </p>
                    <p style="margin-top: 8px;">
                        Okay so that's it for the first milestone, goodbye.
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
