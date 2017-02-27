<?php
$post_data = file_get_contents('php://input');
$filePath = uniqid().'.wav';
file_put_contents($filePath, $post_data);

echo $filePath;

?>
