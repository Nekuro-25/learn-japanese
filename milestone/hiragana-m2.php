<?php
require_once __DIR__ . '/../config.php';

$page_title       = "Milestone 2: Hiragana Derivatives - Learn Japanese";
$page_heading     = "MILESTONE 2: INTERMEDIATE HIRAGANA";
$page_subtitle    = "Mastering Dakuten and Handakuten in 3 Days";
$page_description = "A three-day plan to master the 25 dakuten and handakuten characters.";
$current_page     = "m2";

include __DIR__ . '/../partials/head.php';
include __DIR__ . '/../partials/header.php';
?>

<main>
    <div class="content-stack">
        <p>
            I won't explain too much, but since you and I have (hopefully)
            already mastered Hiragana, I have high hopes of mastering
            Dakuten and Handakuten in 3 days.
        </p>
        <p>
            So, what are Dakuten and Handakuten? They're basically the
            46 basic hiragana with a small cosmetic addition.
            <strong>Dakuten</strong> are two small strokes at the top-right
            corner, while <strong>Handakuten</strong> is a small circle at
            the top-right corner.
        </p>

        <h2 class="subsection-title">1. Learn and Master 25 Additional Hiragana (Dakuten and Handakuten)</h2>
        <p>
            As before, the first thing I do is practice writing (even
            though it's just adding strokes and a circle — writing is
            still fundamental). Then I read full paragraphs (I use AI for
            this) to practice reading.
        </p>
        <ul class="schedule">
            <li><strong>Day 1:</strong> Full writing and memorization.</li>
            <li><strong>Day 2:</strong> Reading and speaking.</li>
            <li><strong>Day 3:</strong> Full test — read all 46 basic hiragana plus the 25 dakuten and handakuten fluently (fast reading; accent not required).</li>
        </ul>
        <p>
            I can only move on to the next milestone once I can read
            every character without delay.
        </p>
        <p class="spaced">
            Okay, that's it for the second milestone — goodbye.
        </p>
        <p>
            Practice with the
            <a href="<?= e($base_url) ?>page/kana/hiragana/hiragana-chart.php">
                Hiragana chart →
            </a>
        </p>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
