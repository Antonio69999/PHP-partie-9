<?php

//Exercice1
// $date = date ("d/m/Y");

// echo ("Date = ".$date);


//Exercice2
// $date = date ("d-m-Y");

// echo ("Date = ".$date);

//Exercice 3

// $date = date ("l j F Y");

// echo ("Date = ".$date);

//Bonus date en Français

// $jour = getdate();
// // echo (getdate());
// $semaine = array("Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi ",
// " vendredi "," samedi");
// $mois = array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
// " juillet "," août "," septembre "," octobre "," novembre "," décembre ");

// echo ($semaine[$jour['wday']].$jour['mday'].$mois[$jour['mon']]. $jour['year']);

//Exercice 4

//different way to get timestamp

// echo time();
// echo ("<br>");
// echo strtotime("now");
// echo ("<br>");
// //timestamp du 2 aout 2016
// $t1 = mktime(15, 00, 0, 8, 02, 2016);
// echo ('Timestamp du 2 août 2016 15h00 : '.$t1);

//Exercice 5

// $today = strtotime("now");
// $date = mktime(00,null,null, 5, 16, 2016);
// echo ($today);
// echo ('<br>');
// echo ($date);
// echo ('<br>');


// $nbJourTimestamp = $today - $date;
// $nbJour = floor($nbJourTimestamp/86400); //convertir en jour = divisé par nombre de seconde dans une journée (60*60*24)

// echo ("Nombre de jours séparant les deux dates : ".$nbJour);

//Exercice 6

// echo cal_days_in_month(CAL_GREGORIAN, 02, 2016);

//Exercice 7

echo date('Y-m-d', strtotime("+22 days"));


//Exercice 8

echo date('Y-m-d', strtotime("+22 days"));



?>