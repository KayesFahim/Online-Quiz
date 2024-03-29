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

    <title>Login</title>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body class="login text-center">>
    <div class="container" style="margin-top: 15%;">
            <form autocomplete="off" class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="color: white;">Please sign in</h1>

            <input autocomplete="off" type="email" name="inputEmail" class="form-control" placeholder="Email address" required>
            <input autocomplete="off" type="password" name="inputPassword" class="form-control" placeholder="Password" required>

            <p style="color: white;">Not Registered ? <a href="registration.php"> Create Account</a></p>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button>
            
            </form>

            <?php

                include("config.php");
                session_start();

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                                    
                    $userEmail = $_POST['inputEmail'];
                    $mypassword = $_POST['inputPassword']; 
                                  
                    $sql = "SELECT id FROM users WHERE email = '$userEmail' and password = '$mypassword'";

                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
                    $count = mysqli_num_rows($result);

                    if($count == 1) {
                    $_SESSION['login_user'] = $userEmail;      
                    header("location: round1.php");
                    }else {
                    print '<script>
                                    swal({
                                    title: "Error!",
                                    text: "Login Credentials Doesnt Match",
                                    type: "error",
                                    confirmButtonText: "ops"
                                    },
                                    function(){
                                    window.location=\'index.php\'
                                    });
                                    </script>';        
                        }
                    }

                ?>

    </div>
  </body>
</html>
