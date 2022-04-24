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

    <title> History</title>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="card-body">
            <a href="round1.php" class="btn btn-primary me-5" > Start Quiz Again</a>
            <a href="logout.php" class="btn btn-primary"> Log Out </a>
									<div class="table-responsive">
										<table class="datatable table table-stripped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Result</th>
													<th>Time</th>
												</tr>
											</thead>
											<tbody>

												<?php

												$sql = "SELECT * FROM result where email='$login_session' ORDER BY id DESC";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
  												while($row = $result->fetch_assoc()) {													  
													  
													echo "<tr><td>".$row["id"]."</td>
																<td>".$row["result"]."</td> 
																<td>".$row["tiemdate"]."</td>														 																		
																 </tr>";   											
												  }
												} else {

											    }
												?>


											</tbody>
										</table>
									</div>
								</div>

        
        
    </div>
  </body>
</html>
