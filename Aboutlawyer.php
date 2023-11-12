
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic Book Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* CSS */
.button-8 {
  background-color: #A2B2FC;
  border-radius: 3px;
  border: 1px solid #7aa7c7;
  box-shadow: rgba(255, 255, 255, .7) 0 1px 0 0 inset;
  box-sizing: border-box;
  color: #39739d;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI","Liberation Sans",sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.15385;
  margin: 0;
  outline: none;
  padding: 8px .8em;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  white-space: nowrap;

}

.button-8:hover,
.button-8:focus {
  background-color: #b3d3ea;
  color: #2c5777;
}

.button-8:focus {
  box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
}

.button-8:active {
  background-color: #a0c7e4;
  box-shadow: none;
  color: #2c5777;
}
    </style>
    <style>
        /* Basic Styles - Customize as needed */
.favorite-icon {
    color: #9BABF6;
    font-size: 24px;
    margin-right: 5px;
}

.favorite-icon.favorite-filled {
    color: red; /* Change to your preferred color */
}


        .container {
            width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
          
        }
        .book-image {
            float: left;
            max-width: 200px;
            margin-right: 20px;
            padding: 10px;
        }
        .book-details {
            overflow: hidden;
        }
        .book-title {
            font-size: 24px;
            margin: 0;
            padding: 0;
        }
        .favorite-icon {
            color: #9BABF6;
            font-size: 24px;
            margin-right: 5px;
        }
        .rating {
            font-size: 18px;
            margin-top: 10px;
        }
        .rate-button {
            background-color: #9BABF6;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .book-description {
            margin-top: 20px;
        }

       
    
    </style>
    <style>
       .con {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 10px;
        }

        .slot {
            width:146px;
            font-size:14px;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color:#244065; 
            color:white;
        }
    </style>
    <style>
        .bg-success {
    background-color: #244065!important;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
        </style>
</head>
<body>
    
<header class="customnav bg-success" style="    margin-top: -15px;
    margin-left: -17px;">
			<div class="container" style="    background-color: #244065;">
				<!-- <div class="row"> -->
					<!-- <div class="col-md-12"> -->
						<!-- <nav class="navbar navbar-expand-lg "> -->
						<h3 style="color:white;">Lawyer Up<h3>
							
			
					<!-- </div> -->
				<!-- </div> -->
			</div>
		</header>
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
    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?>


      
    <div class="container" style="margin-top:50px;">
        <div class="book-image" style="margin-left:100px;">
            <img style="width:200px;" src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="Book Image">
        </div>
        
        <div class="book-details" style="margin-top:100px;">
        <span class="favorite-icon" style="margin-left:600px;" id="like-button">&#9825;</span></a>
            <script>
    $(document).ready(function () {
        var isLiked = false;

        // When the heart icon is clicked
        $("#like-button").click(function () {
            if (isLiked) {
                // Handle unlike logic here (e.g., send an AJAX request to remove the like)
                // Example:
                // $.post('/unlike/', { book_id: {{x.id}} }, function(data) {
                //     // Handle the response and update the UI
                // });
                $(this).css("color", "#9BABF6");
                isLiked = false;
            } else {
                // Handle like logic here (e.g., send an AJAX request to add the like)
                // Example:
                // $.post('/like/', { book_id: {{x.id}} }, function(data) {
                //     // Handle the response and update the UI
                // });
                $(this).css("color", "red");
                isLiked = true;
            }
        });
    });
</script>
            <span class="rating">198 Reviews <p style="margin-left:600px;">Conveninence Fee - <?php echo $fees; ?></p></span>
            <h1 class="book-title"><?php echo $name; ?></h1>
            <p > Area of practise</p>
            <p><?php echo $case; ?></p>
            <h4>Biography</h4>
            <p>This passionate lawyer dedicated their life to fighting for justice and advocating for their clients' rights.</p>
         
            <p>    <img style="margin-top:-10px; width:20px; height:20px;" src="uploads/loc.png" alt=""> <?php echo $city; ?></p>
            <p><img style="margin-top:-10px; width:20px; height:20px;" src="uploads/Vector.png" alt=""><?php echo $exp; ?></p>
            <p> <img style="margin-top:-10px; width:20px; height:20px;" src="uploads/loc.png" alt=""><?php echo $full_address; ?></p>
        

            <!-- <button ></button> -->
          
            
        </div>
        <h1 style="    margin-left: 102px;">Available Slots</h1>
        <div class="con" style="    margin-right: 214px;     margin-left: 96px;" >
        <div class="slot"> 8:00 AM - 9:00 AM</div>
        <div class="slot"> 10:00 AM - 11:00 AM</div>
        <div class="slot"> 1:00 PM - 2:00 PM</div>
        <div class="slot"> 3:00 PM - 4:00 PM</div>
        <div class="slot"> 5:00 PM - 6:00 PM</div>
        <div class="slot"> 9:00 AM - 10:00 AM</div>
    </div>
    
        <!-- HTML !-->
        <a href="book_now.php?id=<?php echo $id; ?>">
                <button class="button-8" role="button" style="width:200px; color:white; margin-left:500px; margin-top:30px;">Book Now</button>
                <div class="book-description" style="margin-left:530px;">
                <p>Back to Search</p>
            </div>
        </a>


    </div>



</body>
</html>