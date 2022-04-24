<?php

include "session.php";


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Round 1</title>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <?php

        $Result = $_SESSION['round1'] + $_SESSION['round2'] + $_SESSION['round3'];


        $sql = "INSERT INTO `result`(`email`, `result`, `round`) VALUES ('$login_session','$Result','all')";

        if ($conn->query($sql) === TRUE) {

        }


        
        ?>
        <h2 class="text-center mt-10"> You are Passed </h2>
        <h2 class="text-center mb-10"> Your Score : <?php echo $Result ?></h2>

        <a href="history.php" class="btn btn-primary me-5" > View History </a>
        <a href="logout.php" class="btn btn-primary"> Log Out </a>
        
    </div>
  </body>
</html>
