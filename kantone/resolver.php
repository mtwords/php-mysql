<?php
	require_once("KantonHandler.php");

	$service = htmlspecialchars($_GET["service"]);
	$methode = htmlspecialchars(strtolower($_GET["methode"]));
	$sort = htmlspecialchars(strtolower($_GET["sort"]));
	$id = htmlspecialchars(strtolower($_GET["id"]));

	if (isset($service) && isListAndSort($methode, $sort)) {
		if ($sort === 'name') {
			echo json_encode(KantonHandler::getInstance()->sortByName());
		} else if ($sort === 'hauptort') {
			echo json_encode(KantonHandler::getInstance()->sortByHauptort());
		} else if ($sort === 'einwohner') {
			echo json_encode(KantonHandler::getInstance()->sortByEinwohner());
		} else if ($sort === 'beitritt') {
			echo json_encode(KantonHandler::getInstance()->sortByBeitritt());
		}
	} else if (isset($service) && isSingleAndId($methode, $id)) {
		echo json_encode(KantonHandler::getInstance()->findKantonByKuerzel($id));
	} else {
		die("opperation not supported");
	}

	// -------------- helpers --------------
	function isListAndSort($methode, $sort) {
		if ($methode != 'list') {
			return false;
		}

		if ($sort === 'name') {
			return true;
		} else if ($sort === 'hauptort') {
			return true;
		} else if ($sort === 'einwohner') {
			return true;
		} else if ($sort === 'beitritt') {
			return true;
		}
		return false;
	}

	function isSingleAndId($methode, $id) {
		if ($methode != 'single') {
			return false;
		}

		if ($id === 'zh') {
			return true;
		} else if ($id === 'be') {
			return true;
		} else if ($id === 'lu') {
			return true;
		} else if ($id === 'ur') {
			return true;
		} else if ($id === 'sz') {
			return true;
		} else if ($id === 'ow') {
			return true;
		} else if ($id === 'nw') {
			return true;
		} else if ($id === 'gl') {
			return true;
		} else if ($id === 'zg') {
			return true;
		} else if ($id === 'fr') {
			return true;
		} else if ($id === 'so') {
			return true;
		} else if ($id === 'bs') {
			return true;
		} else if ($id === 'bl') {
			return true;
		} else if ($id === 'sh') {
			return true;
		} else if ($id === 'ar') {
			return true;
		} else if ($id === 'ai') {
			return true;
		} else if ($id === 'sg') {
			return true;
		} else if ($id === 'gr') {
			return true;
		} else if ($id === 'ag') {
			return true;
		} else if ($id === 'tg') {
			return true;
		} else if ($id === 'ti') {
			return true;
		} else if ($id === 'vd') {
			return true;
		} else if ($id === 'vs') {
			return true;
		} else if ($id === 'ne') {
			return true;
		} else if ($id === 'ge') {
			return true;
		} else if ($id === 'ju') {
			return true;
		}
		return false;
	}

?>