<?php
require __DIR__ . '/functions.php';
echo twig_render(basename(__FILE__, '.php').'.html', $_GET);
?>
