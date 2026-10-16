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
            <h1>LEARN JAPANESE</h1>

            <p class="subtitle">
                Learn Japanese • Improve English • Coding Documentation
            </p>
        </header>

        <div class="content-body">
            <nav class="vertical-nav" aria-label="Main navigation">
                <a href="<?php echo $url; ?>page/intro.php">
                    Introduction
                </a>

                <a href="<?php echo $url; ?>page/kana/intro-kana.php">
                    Kana Introduction
                </a>
            </nav>

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
