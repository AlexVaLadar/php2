<?

$images = [
	['name'=>'pic1', 'way_full' =>'photo/1.jpg', 'way_small' => 'photo/small/1.jpg'],
	['name'=>'pic2', 'way_full' =>'photo/2.jpg', 'way_small' => 'photo/small/2.jpg'],
	['name'=>'pic3', 'way_full' =>'photo/3.jpg', 'way_small' => 'photo/small/3.jpg'],
	['name'=>'pic4', 'way_full' =>'photo/4.jpg', 'way_small' => 'photo/small/4.jpg'],
	['name'=>'pic5', 'way_full' =>'photo/5.jpg', 'way_small' => 'photo/small/5.jpg'],
	['name'=>'pic6', 'way_full' =>'photo/6.jpg', 'way_small' => 'photo/small/6.jpg']
];

require_once 'connect.php';

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