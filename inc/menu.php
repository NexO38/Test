<?php
$files = glob('content/*.md');
echo '<nav id="menu"><ul>';
foreach ($files as $file) {
  $name = basename($file, '.md');
  $label = ucfirst($name);
  echo "<li><a href='?page=$name'>$label</a></li>";
}
echo '</ul></nav>';
?>