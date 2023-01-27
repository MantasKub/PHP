<?php





  for($i = 0; $i < 2; $i++) {
  
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $letLength = strlen($letters);
    $randomString1 .= $letters[rand(0, $letLength - 1)];
    ++$randomString1;
  };
  echo 'Pirmas stringas: ' . $randomString1 . '<br />';


  file_put_contents('tekstas.txt', $randomString1);


  for($i = 0; $i < 2; $i++) {
  
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $letLength = strlen($letters);
    $randomString2 .= $letters[rand(0, $letLength - 1)];
    echo $randomString2;
  }
  
  // echo  'Antras stringas: ' . $randomString2 . '<br />';
  // file_put_contents('catch.php', $randomString2);
  

 

   

 
  


  




  



?>