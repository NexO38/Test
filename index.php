<?php
require_once 'lib/Parsedown.php';

$slug = $_GET['page'] ?? 'start';
$filename = "content/$slug.md";
$content = file_exists($filename) ? file_get_contents($filename) : '# Seite nicht gefunden';

$Parsedown = new Parsedown();
$html = $Parsedown->text($content);

include 'inc/header.php';
include 'inc/menu.php';
echo "<main>$html</main>";
include 'inc/footer.php';
?>