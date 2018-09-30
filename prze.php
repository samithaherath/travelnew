<?php


// echo $_POST['days'];
$car1=60;
$car23=55;
$car4=50;

$mini_car1=50;
$mini_car23=45;
$mini_car4=40;

$mini_van1=60;
$mini_van23=55;
$mini_van4=50;

$van1 = 80;
$van23 =75;
$van4 = 70;

if(isset($_POST['vehicle'])	){
	$prize =0;
	$vehicle = $_POST['vehicle'];
	$days = $_POST['days'];

	if($vehicle == 'car' && $days == 1){
		$prize = $car1 * $days;
		
	}
	else if($vehicle == 'car' && $days >= 2 && $days < 4){
		$prize = $car23 * $days;

	}
	else if($vehicle == 'car' && $days > 3){
		$prize = $car4 * $days;

	}


	else if($vehicle == 'mini_car' && $days == 1){
		$prize = $mini_car1 * $days;
		
	}
	else if($vehicle == 'mini_car' && $days >= 2 && $days < 4){
		$prize = $mini_car23 * $days;

	}
	else if($vehicle == 'mini_car' && $days > 3){
		$prize = $mini_car4 * $days;

	}


	else if($vehicle == 'mini_van' && $days == 1){
		$prize = $mini_van1 * $days;
		
	}
	else if($vehicle == 'mini_van' && $days >= 2 && $days < 4){
		$prize = $mini_van23 * $days;

	}
	else if($vehicle == 'mini_van' && $days > 3){
		$prize = $mini_van4 * $days;

	}

		else if($vehicle == 'van' && $days == 1){
		$prize = $van1 * $days;
		
	}
	else if($vehicle == 'van' && $days >= 2 && $days < 4){
		$prize = $van23 * $days;

	}
	else if($vehicle == 'van' && $days > 3){
		$prize = $van4 * $days;

	}

	else{
		$prize = 0;
	}

	echo "$".$prize;

}		

?>