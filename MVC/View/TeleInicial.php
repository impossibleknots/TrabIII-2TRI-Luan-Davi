<?php

include('protect.php');

if(!isset($_SESSION)){
    session_start();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPetS</title>
</head>
<body>
    
  Seja bem vindo, <?php echo $_SESSION['nome']; ?>

</body>
</html>