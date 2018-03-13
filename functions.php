<?php
function load_page(){
	(isset($_GET['p'])) ? $page = $_GET['p'] : $page = 'home';
	if(file_exists('page_'.$page.'.php')):
		require_once('page_'.$page.'.php');
	else:
		require_once('page_home.php');
	endif;
}
function titles(){
	(isset($_GET['p'])) ? $page = $_GET['p'] : $page = 'home';
	switch ($page):
		case 'clients':
			$title = 'Ateliers';
			break;

		case 'contact':
			$title = 'Contatez Nous';
			break;

		case 'services':
			$title = 'Services';
			break;

		case 'services':
			$title = 'Services';
			break;

		case 'services':
			$title = 'Services';
			break;

		default:
			$title = 'Zoo';
			break;
	endswitch;
	return $title;
	}

?>