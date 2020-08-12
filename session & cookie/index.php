<?php

session_start();

if (isset($_SESSION['email']) || isset($_COOKIE['click'])){
    header("location: admin.php");
}



define("EMAIL" , "raj@gmail.com");
define("PASSWORD" , "123");

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
   $password = $_POST['password'];
   $click = isset($_POST['click']) ? $_POST['click'] : "";

    if (EMAIL==$email && PASSWORD==$password){

        $_SESSION['email'] = EMAIL;
        $_SESSION['password'] = PASSWORD;

        if (isset($click)){
            setcookie(click, $email, time()+(60*24) );
        }


        header("location: admin.php");

    } else {

       $massage = "Invalid!";
    }
}

?>


<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">

</head>

    <body>
    <div class="loginform">
        <form action="" method="POST">
            <lable for="email">Email</lable>
            <input type="text" id="email" placeholder="input your email" name="email">
            <br>
            <br>
            <lable for="password">Password</lable>
            <input type="password" id="password" placeholder="input password here" name="password">
            <br>
            <br>
            <input class="click" type="checkbox" name="click">
            <br>
            <br>
            <lable><input type="submit" value="Submit" name="submit"></lable>
            <h3><?php echo (isset($massage)) ? $massage  : '' ?></h3>
        </form>

    </div>

    </body>

</html>





<?php


/*Indexing

80-100      = A+
75-79       = A
70-74       = A-
65-79       = B+
60-64       = B
55-59       = C+
50-54       = C
40-49       = D
0-39        = Failed
Other input = Invalid Input!

*/


/*$mark = (100);

if ($mark >= 80 && $mark <= 100) {
    echo "A+";
}
else if ($mark >= 75 && $mark <= 79){
    echo "A";
}
else if ($mark >= 74 && $mark <= 70){
    echo "A-";
}
else if ($mark >= 65 && $mark <= 69){
    echo "B+";
}
else if ($mark >= 54 && $mark <= 60){
    echo "B";
}
else if ($mark >= 55 && $mark <= 59){
    echo "C+";
}
else if ($mark >= 54 && $mark <= 50){
    echo "C";
}
else if ($mark >= 40 && $mark <= 49){
    echo "D";
}
else if ($mark >= 0 && $mark <= 39){
    echo "Failed";
}
else {
    echo "Invalid Input!";
}*/



/*for ($i = 1; $i <= 2; $i++){
	for ($j = 1; $j <= 3; $j++){
	    echo $i . $j;

    }
    echo '</br>';

 }*/

/*$x = 'I am a programmer to overcome my present position';

echo str_pos('$x', );
*/




/*$sum = 0;

for ($i = 1; $i <= 100; $i++){

    if ($i % 4 == 0){
        $sum = $sum+= $i;
    }

}

echo $sum;*/


//echo sqrt(8);




/* =============
squareroot
==============*/


/*function SquertRoot($number){
 if ($number > 0)
	{
		$root = $number / 3;
		for ($i = 0; $i < 32; $i++)
			$root = ($root + $number / $root) / 2;
		return $root;
	}
}
 echo SquertRoot(25)
*/

/*$x = 300;

$r = 200;

$g = 100;



if ($x > $r) {
    echo "x is big";
} else {
    echo "r is big";
}*/


/*$do = ["me", 20, 4.50];


$result = gettype($do);


if ($result == 'array'){
    echo "Yes";
} else {
    echo "No";
}*/


/*function info(){
    return 1;
};

if (!function_exists("info")){
    echo "yes";
} else {
    echo "no";
}*/



/*$info = isset($_GET["name"]) ? $_GET["name"] : "";


echo $info;*/

/*$c = 20;
$h = 30;

function x(){
   $GLOBALS['c'] = $GLOBALS['c'] + $GLOBALS['h'];
}
x();

echo $c;*/


