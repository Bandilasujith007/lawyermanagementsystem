
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
	
<head>
<title>Comic Home</title>
<link href="/static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<!--theme-style-->
<link href="/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->

<style>
	img{
		height:250px;
		width: 200px;
	}
</style>
<link rel="stylesheet" type="text/css" href="/static/css/component.css" />
</head>
<body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="rename_style.css">
    <style>

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;

        }
        nav .logo a{
  font-weight: 500;
  font-size: 35px;
  color: white;
}
        .category-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .category-item1 {
            background-color: #fff;
            padding: 0px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-item2 {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .category-title {
            font-size: 18px;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color:black;
        }
        .nav-links li a{
  text-decoration: none;
  color: white;
  font-size: 18px;
  font-weight: 500;
  padding: 10px 4px;
  transition: all 0.3s ease;
}
        nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 11px;
  transition: all 0.4s ease;
  color:white;
 
}
p {
    margin-top: 0;
    margin-bottom: 0rem;
}
    </style>
</head>
<body>

  <section class="home">
    <div class="container">
        <div style="text-align:center;">
            <h1>Divorce lawyer</h1><br>
<!--        <p>Choose your genre to find Category titles here!</p>-->
        </div>
        <br><br>

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

        // Query to select all images from the table
        $sql = "SELECT * FROM lawyer where case_handle= 'Divorce lawyer'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $image = $row['image'];
                $case = $row['case_handle'];
                $first_name = $row['first_Name'];
                $id = $row['id'];

                // Generate the HTML for each image with Bootstrap card styling


              

           echo ' <a href="Aboutlawyer.php?id='.$id.'">';
           echo ' <li class="category-item1 d-flex flex-row">';
            echo '    <span class="category-icon"><img style="margin-left:100px; text-align:center; width:100px; height:120px;" src="data:image/jpeg;base64,' . base64_encode($image) . '" alt=""></span>';
            echo '    <div class="ml-5 mt-5">';
            echo        '<h2 class="category-title" style="margin-left:300px;" >'.$first_name.'</h2>';
            echo    '</div>';
            echo '</li>';
        echo '</a>';
               
            }
        } else {
            echo 'No images found in the table.';
        }

        $conn->close();
        ?>

                  

        </ul>
    </div>
    </section>
    <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>

</html>