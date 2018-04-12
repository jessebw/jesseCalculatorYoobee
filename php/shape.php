<?php

error_reporting(E_ALL);
error_reporting(-1);

function br(){
	echo "<br>";
}

if (isset($_GET["shapeRadio"])){

	$shapeVal = $_GET['shapeRadio'];

	if(isset($_GET["submit"])){

		if ($shapeVal == "Circle"){
			// echo "selected ".$_GET['shapeRadio'];
			circle();
		} else if ($shapeVal == "Square"){
			// echo "selected ".$_GET['shapeRadio'];
			square();
		} else if ($shapeVal == "Rectangle") {
			// echo "selected ".$_GET['shapeRadio'];
			rect();
		} else {
			echo "Please Select a shape!";
		}

	}
}

function circle(){

	$r=$_GET["number"];
	$d=2*$r;
	$area=3.14*$r*$r;
	$circum=2*3.14*$r;

	echo "<pre> WOO HOOO a Circle! \n</pre>";
	br();
	echo "<pre> Given radius is $r\n </pre";
	echo "<pre> Diameter is $d\n</pre>";
	echo "<pre>Area of the circle is $area\n</pre>";
	echo "<pre>Circumference of the circle is $circum\n</pre>";
}

function square(){

	$length=$_GET["number"];
	$area=$length*$length;
	$perim=$length*4;

	echo "<pre> WOO Hooo a Square! \n</pre>";
	br();
	echo "<pre> Given side length is $length\n </pre";
	echo "<pre> Area is $area\n</pre>";
	echo "<pre>Perimeter of the square is $perim\n</pre>";
}

function rect(){

	$length=$_GET["number"];
	$width=$_GET["width"];
	$area=$length*$width;
	$lw=$length+$width;
	$perim=$lw*2;

	echo "<pre> WOO Hooo a Rectangle! \n</pre>";
	br();
	echo "<pre> Given length is $length\n </pre";
	echo "<pre> Given width is $width\n </pre";
	echo "<pre> Area is $area\n</pre>";
	echo "<pre>Perimeter of the rectangle is $perim\n</pre>";
}

?>