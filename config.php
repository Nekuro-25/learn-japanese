<?php

/**
 * Pengaturan global proyek.
 *
 * - $base_url: ubah ke "/learn-jp/" jika proyek dijalankan di subfolder.
 * - $site_name: dipakai di <title> dan footer.
 */

$base_url  = "/";
$site_name = "Learn Japanese";

/** Escape output HTML supaya aman. */
function e($s)
{
	return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
