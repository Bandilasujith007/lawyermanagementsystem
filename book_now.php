<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
   </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
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

// Check if the user ID is provided in the query parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch user details by ID
    $sql = "SELECT * FROM lawyer WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['first_Name'];
        $email = $row['email'];
        $case = $row['case_handle'];
        $image = $row['image'];
        $city = $row['city'];
        $fees = $row['fees'];
        $exp = $row['practise_Length'];
        $full_address = $row['full_address'];

        $_SESSION["lawyer_id"] = $id;
        $_SESSION["lawyer"] = $name;
        $_SESSION["fees"] = $row['fees'];
    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?>
<body style="background-color:white;">
  <div class="container" style="background-color:white;">
    <div class="title">Upload</div>
    <div class="content">
      <form action="book_nowbk.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Applicant</span>
            <input type="text" name="ap_name" placeholder="Applicant name" required>
          </div>

          <div class="input-box">
            <span class="details">Lawyer Name</span>
            <input type="text" name="res_name" value="<?php echo $name; ?>" placeholder="Lawyer name" required>
          </div>

          <div class="input-box">
            <span class="details">Content</span>
            <textarea name="content" style="width:640px; height:100px;"></textarea>
          </div>
            <!-- dummy data -->
          <div class="input-box">
            <span class="details"></span>
          </div>

          <div class="input-box">
            <span class="details">Posted BY</span>
            <input type="text" name="posted_by" placeholder="Posted by" required>
          </div>
          <div class="input-box">
            <span class="details">Document</span>
            <input type="file" name="image" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Appointment Date</span>
            <input type="date" name="ap_date" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Appointment Time</span>
            <input type="time" name="ap_time" placeholder="" required>
            <!-- <textarea style="width:640px; height:100px;"></textarea> -->
          </div>
          <input type="hidden" name="case_details" placeholder="Case name" value="<?php echo $case; ?>" required>

        </div>
       
        
        <div class="button" style="background-color:#244065;">
          <input  type="submit" value="Book Now">
        </div>
      </form>
    </div>
  </div>

</body>
</html>