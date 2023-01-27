<?php
echo '<h1>First task</h1>';

echo '<br />';





function getArray() {
  

  for($i = 0; $i < 29; $i++) {
    $array[] = rand(5,25);
  }
  var_dump($array);
}

getArray(); // call the function


echo '<br /> <br />';
echo '<h1>Second task</h1>';



//Second task

function randomLetter() {
for($i = 0; $i < 200; $i++) {
  $letters = 'ABCD';
  $letLength = strlen($letters);
  $randomString = '';
  echo $randomString .= $letters[rand(0, $letLength - 1)] . ', ' ;
}
}

randomLetter();

// function randomLetter() {
//   for($i = 0; $i < 200; $i++) {
//     $letters = array('A','B','C','D');
//     $letLength = sizeof($letters);
//     $randomLetter = [];
//     $randLetter .= rand(0, $letLength) . ', ';
//     $masyvas = array(0 => $randLetter);
//     print_r($masyvas);
//   }
// }
  
//   randomLetter();

// echo '<br /> <br />';
// echo '<h1>Third task</h1>';





?>