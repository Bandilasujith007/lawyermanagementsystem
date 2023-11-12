<?php
session_start();
?>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
   Tailwind CSS Website
  </title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="sidebar.css">
<style>
    b{
        color:white;
        margin-left:10px;
        font-size:17px;
        
    }
</style>
 </head>



 <body class="bg-gray-100">
 <div class="sidebar close" >

<ul class="nav-links">
  <li>
    <a href="chatapp.php">
      <b>Home</b>
    </a>
  </li>
    <br>
    
    <li>
    <a href="lawyer_chat.php">
      <b>Chat</b>
    </a>
    </li>
    <br>

    <li>
    <a href="cases.php">
      <b>Cases</b>
    </a>
    </li>
    <br>
    <li>
    <a href="lawyerprofile.php">
      <b>Profile</b>
    </a>
    </li>
    <br>

  <li>
    <a href="Llogin.php">
      <b>Logout</b>
    </a>
    
  </li>

  <li>

</li>
</ul>
</div>

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
				// SELECT lc.image, cc.user_name, cc.message, cc.time FROM community_chat cc INNER JOIN lawyer lc ON cc.user_id = lc.lawyer_id 
                // Query to select all images from the table
				$law_name = $_SESSION["first_Name"];
                $sql = "SELECT us.first_name, us.image, ap.ap_name, ap.case_name, ap.content, ap.id, ap.ap_date, ap.ap_time  FROM appointment ap INNER JOIN user us ON ap.user_id = us.user_id where ap.res_name = '$law_name' AND ap.status='1'  ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Retrieve the image data
                        
						// $image = $row['image'];
                        $name = $row['ap_name'];
                        $username = $row['first_name'];
						$case = $row['case_name'];
                        $content = $row['content'];
						$id = $row['id'];
						$ap_date = $row['ap_date'];
						$ap_time = $row['ap_time'];
						$time = $row['ap_time'];
						$formattedTime = date("h:i A", strtotime($time));
						$image = $row['image'];



                  

						
                        // Generate the HTML for each image with Bootstrap card styling
						echo '
                        <a href="status.php?id='.$id.'">
                        <div class="max-w-xl mx-auto py-8">
                        <div class="bg-blue-500 text-white p-4 mb-4" style="  border-radius: 30px; border: 1px solid; box-shadow: 3px 5px #888888;   background: dimgray;">
                         <div class="flex justify-between items-center">
                          <h2 class="text-lg font-semibold">
                            <center style="    margin-left: 199px;">'.$name.'</center>
                          </h2><br>
                          </div>
                          <!-- You can animate the clock using CSS animations if desired -->
                          <div class="flex items-center">
                           <!-- <svg class="h-6 w-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> -->
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                           </svg>
                           <br>
                           <img  src="data:image/jpeg;base64,' . base64_encode($image) . '"" style="width:30px;height:30px;">
                          
                           <span class="font-bold" style="margin-left: 155px;">
                           <i class="fa-regular fa-calendar"></i>
                           <!-- <i class="fa-duotone fa-calendar-day" style="--fa-primary-color: #256be4; --fa-secondary-color: #77a8fd;"></i>  -->
                     
                           '.$ap_date.' | ' . $formattedTime . '
                           </span>
                          </div>
                        
                         <p class="text-sm" style="    margin-left: 56px;">
                          Applicant: '.$username.'
                          <br>
                          case:'.$case.'
                          <a href="lawyer_chat.php"><button style="     width: 94px;
                         height: 27px;
                          background: darkblue;
                         border-radius: 5px;
                         margin-left: 333px;"> Messages</button></a>
                         </p>
                        </div>
                       </div>
		                  </a>      ';
                        
                    }
                } else {
                    echo 'No data found in the table.';
                }

                $conn->close();
                ?>
  
  </body>
</body></html>