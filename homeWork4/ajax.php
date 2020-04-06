<?php

require_once('controller/model.php');

$offset = $_POST['offset'];

$rows = getPhotoWithOffset($connect, 'good', $offset);

$content = '';
foreach ($rows as $row) {
	$full  = $row['full_src'];
	$small = $row['small_src'];
	$content .= "
	    <a class='image-source-link' href='{$full}' target='_blank'>
	        <img src='{$small}' style='margin: 20px'>
	    </a>
    ";
}

$offset += 6;
echo json_encode([
	'content' => $content,
	'offset'  => $offset,
]);