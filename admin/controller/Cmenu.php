<?php

	require_once "model/Mmenu.php";

	$menu = new Menu();
	switch ($action) {
		case 'add':
			if ($_POST) {
				$data = $_POST['frm'];
				var_dump($data);
				exit;
			}
			break;
	}

	require_once "view/$controller/V$action.php";

?>