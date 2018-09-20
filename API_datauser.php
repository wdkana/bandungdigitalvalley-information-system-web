<?php
	include_once "core/init.php";
	global $link;

	header('Content-Type: application/json');

	define("VIEW_NONE", -1);
	define("VIEW_DEFAULT", 0);
	define("VIEW_FULL", 1);
	define("VIEW_MORE", 2);

	$viewType = VIEW_DEFAULT;

	function loadRequest() {
		// Bisa ditambah query-query lain yang diambil dari method get
		// Query yang ngaruh ke sql di push ke array $option 
		global $viewType;

		$option = [];
		if(isset($_GET['email'])) {
			$email = $_GET['email'];
			array_push($option, "email='".$email."'");
		}
		if(isset($_GET['group'])) {
			$group = $_GET['group'];
			if($group == "full") {
				$viewType = VIEW_FULL;
			} else if($group == "more"){
				$viewType = VIEW_MORE;
			} else {
				$viewType = VIEW_NONE;
			}
		}
		return $option;

	}

	function buildQuery() {
		$option = loadRequest();
		$query = "SELECT * FROM tb_user ";
		$sizeOfOption = count($option);
		$queryOption = "";
		if($sizeOfOption != 0) {
			$where = "WHERE ";
			for($i = 0; $i < $sizeOfOption; ++$i) {
				$queryOption = $queryOption.$option[$i];
				if($i != $sizeOfOption-1) {
					$queryOption = $queryOption." AND ";
				}
			}
		} else {
			$where = "";
		}

		 return $query.$where.$queryOption."ORDER BY id_user";
	}

	$query = buildQuery();
	$result = mysqli_query($link,$query);
	// $row = mysqli_fetch_object($result);
	$i = 0;
	$data = array();
	while(($row = mysqli_fetch_array($result))) {
		$data[$i]['nama'] = $row[1];
		$data[$i]['pass'] = $row[2];
		$data[$i]['email'] = $row[6];
		if($viewType == VIEW_FULL || $viewType == VIEW_MORE) {
			$data[$i]['gender'] = $row[3];
			$data[$i]['kota'] = $row[5];
			$data[$i]['tgl_lahir'] = $row[4];
			$data[$i]['no_hp'] = $row[7];
			$data[$i]['profesi'] = $row[8];
			$data[$i]['perusahaan'] = $row[9];
			$data[$i]['keahlian'] = $row[10];
		}
		if($viewType == VIEW_FULL) {
			$data[$i]['instagram'] = $row[11];
			$data[$i]['linkedln'] = $row[12];
			$data[$i]['facebook'] = $row[13];
			$data[$i]['hash'] = $row[14];
			$data[$i]['active'] = $row[15];
			$data[$i]['foto'] = base64_encode($row[16]);
		}
		$i++;
	}

	if($viewType != VIEW_NONE && $data == NULL) {
		$user_list = array("status_code" => "error");
		$user_list["user_list"] = NULL;
	} else {
		$user_list = array("status_code" => "success");
		$user_list["user_list"] = $data;
	}

	echo json_encode($user_list);
?>
