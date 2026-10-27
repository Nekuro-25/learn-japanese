<?php

/**
 * 404 fallback — dipanggil via .htaccess rewrite atau ErrorDocument.
 *
 * Cukup require render.php: karena URL /404.php tidak ada di
 * $page_hierarchy, render.php akan set current_page = null dan
 * merender halaman 404 dalam layout penuh.
 */

require __DIR__ . '/lib/render.php';
