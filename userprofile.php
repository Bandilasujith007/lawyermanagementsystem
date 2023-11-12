<?php
session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title>Update Profile</title>
<style>
  .has-error .help-block {
  color: red;
}
.log{
	margin-top:-67px;
	margin-left:500px;
}
.bg-success {
    background-color: #244065!important;
}

.registerform {
    margin: 160px 0px;
}

.customnav a {
    margin: 9px -101px;
	font-size:25px;
}
.ellipse-26, .ellipse-26 * {
     box-sizing: border-box;
     }
.ellipse-26 {
    border-radius: 50%;
     width: 119.82px;
     height: 100px;
     position: relative;
    }






  </style>

	</head>
	<body>
	<?php include 'navbar.php'; ?>
		<section class="registerform">
			
			<center>
				<div class="log">
			<div class="container">
				<div class="row">
                    <div style="margin-left:200px;">
                    <img class="ellipse-26" src="https://cdn1.vectorstock.com/i/1000x1000/45/65/user-icon-human-person-sign-vector-20444565.jpg" />

                    </div>
                    <!-- For more settings use the AutoHTML plugin tab ... --> 
					<!-- <div class="col-md-6">
						<h2>Hello !!! <i class="fas fa-hand-paper"></i></h2><hr/>
						<h4>Login here to find suitable lawyers or User Request <i class="fas fa-hand-point-right"></i></h4>
					</div> -->
     

<?php
                // Database connection
                $db_host = 'localhost';
                $db_user = 'root';
                $db_pass = '';
                $db_name = 'lawyermanagement';

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
$id = $_SESSION["user_id"];
                // Query to select all images from the table
                $sql = "SELECT * FROM user where user_id='$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Retrieve the image data
                        $name = $row['first_name'];
                        $email = $row['email'];
                        $password = $row['password'];

                        // Generate the HTML for each image with Bootstrap card styling

                      
                   
                    }
                } else {
                    echo $id;
                    echo 'No images found in the table.';
                }

                $conn->close();
                ?>
 
						<form action="updatebk.php" method="POST"  id="validateForm" style=" margin-right:500px;">

							<div class="form-group">
								<label for="Name" style="margin-right:500px;">Name</label>
								<input type="text" class="form-control" value="<?php echo $name ?>" name="name" id="Name" placeholder="Enter Your name">
							</div>
							<div class="form-group">
								<label for="num" style="margin-right:500px;">Email</label>
								<input type="email" class="form-control" value="<?php echo $email ?>" name="email" id="Email" placeholder="Enter Your Email">
							</div>
                            <div class="form-group">
								<label for="num" style="margin-right:500px;">Password</label>
								<input type="text" class="form-control" value="<?php echo $password ?>" name="password" id="Email" placeholder="Enter Your Password">
							</div>

							<input name="Update" type="submit" class="btn btn-block btn-success" value="Update"  style=" background-color: #244065; border-color:#244065; color:white; text-align:center; justify-content:center;"
/><br>
							<!--after signup redirect user dashboard page-->
							<!-- <a href="user_register.php" style="color:black;"><p>signup</p></a> -->
						</form>
					</div>
				</div>
			</div>
		</div>
		</center>
		</section>
		<!-- <footer class ="bg-success">
			<div class="container ">
				<div class="row">
					<div class="col">
						<h5>All rights reserved 2022
							<script>document.write(new Date().getFullYear());</script>
						</h5>
					</div>
				</div>
			</div>
		</footer> -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		<script>
			$('#validateForm').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your Password'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>
