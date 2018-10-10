<?
include 'controller/model.php';

$count_show = 6;
$images = getAll($connect, 'good', $count_show);

if (isset($_POST[id])) {
	$id= $_POST[id];
}
$img = getOne($connect, $id, 'good');

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	$template = $twig->LoadTemplate('index.tmpl');

	echo $template->render(array (
		'images' => $images
	));  
} catch (Exception $e) {
	die ('ERROR: ' . $e->getMessage());
}