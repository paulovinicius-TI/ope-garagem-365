 <?php 

  if (!$sock = @fsockopen('www.google.com.br', 80, $num, $error, 5)){
    $internet_connection = "true";
  }
  else{
    $internet_connection = "false";
 } 

 ?>