<?php
	$id = $_POST['id'] * 1;
	$result = "ごめん、ない。";
	switch ($id) {
		case 1:
			$result = "最初のデータです。";
			break;
		case 2:
			$result = "次のデータです。";
			break;
		case 3:
			$result = "最後のデータです。";
			break;
	}
	header ('Content-type:text/plain; charset=utf8');
	echo $result;

