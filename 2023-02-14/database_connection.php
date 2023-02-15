<?php 



 try{
  $db =  new mysqli('localhost', 'root', '', 'animals');
  //$db = mysqli_connect('localhost', 'root', '', 'animals');
 } catch(Exception $klaida) {
  echo 'Nepavyksta prisijungti prie duomenu bazes <br />';
  exit;
 }

 echo 'kodas kompiliuojamas toliau...';

 //Pasirenkam norima atvaizduoti faila mySQL
 $result = $db->query('SELECT * FROM list');
 echo '<pre>';
 //Grazinam masyva su ciklu
 while($row = $result->fetch_assoc()) {
  print_r($row);
 }

 $result = $db->query('SELECT * FROM list WHERE id = 2');
 print_r($result->fetch_assoc());

 $result = $db->query('SELECT * FROM list');


//  print_r($result->fetch_all());

//  $db->query('INSERT INTO list (animal, weight, height, food_supply, accesories) 
//  VALUES("Crocodile", 5000, 40, 100, 0)');

//Naujo iiraso paeimimas i masyva
$animal = 'Aligator';

 $db->query(sprintf(
  "INSERT INTO list (animal, weight, height, food_supply, accesories) VALUES(%s, %d, %d, %d, %d)", 
  $animal, 5000, 40, 100, 0));

//  if($db->connect_error) {
//   echo 'Nepavyksta prisijungti prie duomenu bazes';
//  } else {
//   print_r($db);
//  }

?>