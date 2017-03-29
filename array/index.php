<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hello</h1>
	<?php 
	/*Объявление массива*/
		$name[0] = "Alex";
		$name[1] = "Jeff";
		$name[2] = "Mary";
	/*или так*/
		$chiks = array("Jinnie", "Francis", "EverytimeYes");
	/*или так*/
		$gays = ["Piter", "Thomas", "Stiven"];
	/*или ассоциативный массив*/
		$player = [
			"catcher" => "H.Potter",
			'puncher' => "R.Whisley",
			'goalkeaper' => "S.Leh"
		];
	/*вывод елементов*/
		foreach ($player as $key=>$val){
			echo $key." is ".$val."<br>";
		}
	/*********************************************************/
	/**************дво- много- уровневые массивы**************/
	/*********************************************************/
	$data_storage = [
		'Tim Cook' => ["gender"=>"male", "age"=>"65", "weight" => "90"],
		'Stephany Aledra' => ["gender"=>"female", "age"=>"25", "weight" => "40"],
		'Bob Doe' => ["gender"=>"not shure", "age"=>"250", "weight" => "666"]
	];
	/*Вывод данных*/
	echo ($data_storage["Tim Cook"]["gender"]);
	/*вывод в цикле*/
	foreach ($data_storage as $key => $value) { //перебераем первый уровень данных
		foreach ($data_storage[$key] as $val) {//для всех подмасивов определим свой цикл foreach
			echo $val." ";
		}
		echo "<br>";
	}

	 ?>
</body>
</html>