<?php
require_once __DIR__ . '/config.php';

$page_title       = "Learn Japanese";
$page_heading     = "LEARN JAPANESE";
$page_subtitle    = "Learn Japanese • Improve English • Coding Documentation";
$page_description = "A personal project documenting a Japanese learning journey.";
$current_page     = "home";

include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main id="main" tabindex="-1">
	<div class="content-stack">
		<p>
			A personal project where I document my Japanese
			learning journey while improving my English
			and coding skills.
		</p>

		<?php include __DIR__ . '/partials/pager.php'; ?>
	</div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
