<?php 

if ($_GET['gender'] == "") {
	header('Location: https://leonisgeweldig.be/dev');
}
$gender = $_GET['gender'];
$genderarray = array("Transexual Male", 
				"Transexual Female", 
				"Metrosexual Male", 
				"Metrosexual Female", 
				"Male, But Curious What Being a Female is Like", 
				"Female, But Curious What Being a Male is Like", 
				"Male, But With Boobs", 
				"Female, But Have an Adam's Apple", 
				"Conjoined Twin - Male", 
				"Conjoined Twin - Female", 
				"Born Without Genitals - Identify as a Male", 
				"Born Without Genitals - Identify as a Female", 
				"Born Without Genitals - Proud of it", 
				"Born a Male, Bad Circumcision, Raised Female",
				"Other",
				"None",
				"Prefer Not to Say");

if (in_array($gender, $genderarray)) {
	header('Location: retard');
}elseif ($gender == "attackchopper") {
	header('Location: brrrrr');
}elseif ($gender == "blind") {
	header('Location: blind');
}elseif ($gender == "male") {
	header('Location: https://pornhub.com');
}elseif ($gender == "female") {
	header('Location: https://feminist.com/');
}
?>