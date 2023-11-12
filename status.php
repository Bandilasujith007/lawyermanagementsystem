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
    $sql = "SELECT * FROM appointment WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['ap_name'];
        $respodent = $row['res_name'];
        $content = $row['content'];
        $postedby = $row['posted_by'];
        $document_name = $row['document_name'];
       

     
    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lawyermanagement</title>
    <style>
        /* CSS */
.button-66 {
  background-color: #0a6bff;
  border-radius: 55px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 13px;
  font-weight: 700;
  line-height: 24px;
  margin: 0;
  min-height: 56px;
  min-width: 120px;
  padding: 16px 20px;
  position: relative;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}

.button-66:hover {
  background-color: #065dd8;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button-66 {
    padding: 16px 44px;
    min-width: 150px;
  }
}
    </style>
    <style>
.status{
    margin-top: 50px;
    margin-right: 221px;
}.p{
    margin-left: -359px;
}
.area{    margin-left: 183px;
    margin-right: -64px;
    width: 405px;}
        </style>
</head>
<body><br>
    <br>
    <center>
    <fieldset style="width:23em; height:33em;"><br>

<div class="status">
    <img src="login.png" width=110px; height=100px; style="border-radius:60px;margin-left: 179px;">
    <p style="margin-left: -300px;"><b>Applicant:<?php echo $name; ?></b></p><br>
    <p style="margin-left: -300px;"><b>Response:<?php echo $respodent; ?></b></p><br>
    <textarea  class="area"rows="5";cols="60"; style=" margin-right: 5px;"><?php echo $content; ?> </textarea>
    <!-- HTML !-->



    <h3 style="margin-left: -170px;">Image:<a style="text-decoration:none; " href="download_img.php?id=<?php echo $document_name; ?>" download> <button  class="button-66" role="button">Download</button></a></h3>
    <p style="margin-left: -290px;"><b>Posted By:<?php echo $postedby; ?></b></p>
    </fieldset>
</div>
</center>
</body>
</html>