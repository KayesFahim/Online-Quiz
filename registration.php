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
  <body class="text-center">
    <div class="container">
            <form autocomplete="off" class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>

            <input autocomplete="off" type="email"  class="form-control" name="email" placeholder="Email address" required>
            <input autocomplete="off" type="text"  class="form-control" name="name" placeholder="Full Name" required>
            <input autocomplete="off" type="phone"  class="form-control" name="phone" placeholder="Phone Number" required>
            <input autocomplete="off" type="password" class="form-control" name="password" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign UP</button>
            
            </form>

            <?php

                include 'config.php';

								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									$vName = $_POST['name'];
									$vEmail = $_POST['email'];
									$vPhone = $_POST['phone'];
									$Password = $_POST['password'];


									$sqlquery = "INSERT INTO `users`(                                            
										`email`,
										`name`,
										`phone`,		
										`password`
									)
									VALUES(
										'$vEmail',
										'$vName',
										'$vPhone',
										'$Password'
									)";
										
										if ($conn->query($sqlquery) === TRUE) {

											print '<script>
																	swal({
																	title: "Success!",
																	text: "Registration Successfully!",
																	type: "success",
																	confirmButtonText: "Now You Can Login"
																	},
																	function(){
																		window.location=\'login.php\'
																		});
																	</script>';
											
											
										}
																													
								}

							?>
            

    </div>
  </body>
</html>
