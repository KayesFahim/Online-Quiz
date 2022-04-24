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
        <h2 class="text-center mt-10"> GK Quiz System </h2>
        <h2 class="text-center mb-10"> Round 1 </h2>
        <form method="POST">
        
        <?php

												$sql = "SELECT * FROM quiz where round ='1' ORDER BY id DESC";
												$result = $conn->query($sql);
                                                $i =0;
												if ($result->num_rows > 0) {
  												while($row = $result->fetch_assoc()) {	
                                                      $i++;												  
													  $Question = $row['question'];
                                                      $Option1 = $row['option1'];
                                                      $Option2 = $row['option2'];
                                                      $Option3 = $row['option3'];
                                                      $Option4 = $row['option4'];
                                                      ${'Ans'.$i} = $row['answere'];

                                                    

													echo "<div class='container'>
                                                            <h5>$i . $Question</h5><br/>
                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio' name='ans$i' value='$Option1'>
                                                                <label class='form-check-label' for='opt1for$i'>
                                                                    $Option1
                                                                </label>
                                                                
                                                            </div>
                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio' name='ans$i' value='$Option2'>
                                                                <label class='form-check-label' for='opt2for$i'>
                                                                    $Option2
                                                                </label>
                                                            </div>
                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio' name='ans$i' value='$Option3'>
                                                                <label class='form-check-label' for='opt3for$i'>
                                                                    $Option3
                                                                </label>
                                                            </div>
                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio' name='ans$i' value='$Option4'>
                                                                <label class='form-check-label' for='opt4for$i'>
                                                                    $Option4
                                                                </label>
                                                            </div>
                                                          
                                                          </div>
                                                          <hr>
                                                            ";   											
												  }
												}
												?>

                                                
                                                <button type="submit" class="btn btn-primary"> Submit </button>
                                                </form>

                                                <?php

                                                if($_SERVER["REQUEST_METHOD"] == "POST") {

                                                    $count=0;
                                                    $x = 1;
                                                    for($x == 1; $x <= 5; $x++){
                                                        $Ans = 'ans'.$x;
                                                        ${'Answere'.$x} = $_POST[$Ans];

                                                        if(${'Answere'.$x} == ${'Ans'.$x}){
                                                            $count+=10;

                                                        }else{
                                                            $count+=0;
                                                        }
                                                    }
                                                    
                                                    $_SESSION['round1'] = $count;
                                                    
                                                    if($count >= 20){

                                                        echo "<script> window.alert('Your Passed ! Your Mark $count'); </script>";

                                                        print '<script>
																	swal({
																	title: "Success!",
																	text: " You passed the 1st Round !",
																	type: "success",
																	confirmButtonText: "Next Round"
																	},
																	function(){
																		window.location=\'round2.php\'
																		});
																	</script>';
                                                       

                                                    }else{
                                                        echo "<script> window.alert('Your failed ! Your Mark $count'); </script>";

                                                        print '<script>
																	swal({
																	title: "Error!",
																	text: " You Failed 1st Round ! Try Again",
																	type: "error",
																	confirmButtonText: "Ops! Try Again"
																	},
																	function(){
																		window.location=\'round1.php\'
																		});
																	</script>';
                                                    }
                                                    
                                                    
                    
                                                }

                                                ?>

            

    </div>
  </body>
</html>
