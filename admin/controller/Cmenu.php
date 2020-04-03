<?php

	require_once "model/Mmenu.php";

	$menu = new Menu();
	switch ($action) {
		case 'add':
      		if ($_POST) {
				$data = $_POST['frm'];
				$menu->addMenu($data);
			}
			$listChid = $menu->listChid(['1', '0']);
			$total = count($listChid); 
    		break;
		case 'list':
			$listMenu = $menu->listMenu();
			$total = count($listMenu);
    		break;
		case 'edit':

    		break;
	}

	require_once "view/$controller/V$action.php";

?>