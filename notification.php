<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>
    .desktop {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.desktop .div {
  background-color: #ffffff;
  width: 1440px;
  height: 1024px;
  position: relative;
}

.desktop .group {
  position: absolute;
  width: 71px;
  height: 30px;
  top: 898px;
  left: 694px;
}

.desktop .text-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  font-family: "Poppins-Medium", Helvetica;
  font-weight: 500;
  color: var(--light-blue);
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .group-2 {
  position: absolute;
  width: 1440px;
  height: 99px;
  top: 0;
  left: 0;
  background-color: #244065;
}

.desktop .overlap {
  position: absolute;
  width: 903px;
  height: 269px;
  top: 243px;
  left: 138px;
  background-color: var(--light-blue);
  border-radius: 6px;
}

.desktop .text-wrapper-2 {
  position: absolute;
  width: 336px;
  top: 7px;
  left: 235px;
  font-family: "Poppins-Medium", Helvetica;
  font-weight: 500;
  color: #000000;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .rectangle {
  position: absolute;
  width: 139px;
  height: 104px;
  top: 18px;
  left: 21px;
}

.desktop .overlap-group-wrapper {
  position: absolute;
  width: 242px;
  height: 58px;
  top: 195px;
  left: 641px;
}

.desktop .overlap-group {
  position: relative;
  width: 240px;
  height: 58px;
  background-color: #244065;
  border-radius: 6px;
}

.desktop .text-wrapper-3 {
  position: absolute;
  width: 127px;
  top: 19px;
  left: 102px;
  font-family: "Poppins-Medium", Helvetica;
  font-weight: 500;
  color: #f6fafc;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-4 {
  position: absolute;
  width: 166px;
  top: 73px;
  left: 323px;
  font-family: "Poppins-SemiBold", Helvetica;
  font-weight: 600;
  color: #000000;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .overlap-wrapper {
  position: absolute;
  width: 131px;
  height: 37px;
  top: 74px;
  left: 526px;
}

.desktop .overlap-2 {
  position: relative;
  width: 127px;
  height: 37px;
}

.desktop .text-wrapper-5 {
  width: 85px;
  top: 0;
  left: 0;
  color: #000000;
  font-size: 12px;
  position: absolute;
  font-family: "Poppins-SemiBold", Helvetica;
  font-weight: 600;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-6 {
  position: absolute;
  width: 44px;
  top: 4px;
  left: 83px;
  opacity: 0.6;
  font-family: "Poppins-Medium", Helvetica;
  font-weight: 500;
  color: #000000;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .element {
  width: 105px;
  top: 17px;
  left: 777px;
  color: transparent;
  font-size: 14px;
  position: absolute;
  font-family: "Poppins-SemiBold", Helvetica;
  font-weight: 600;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .span {
  color: #75b1ce;
}

.desktop .text-wrapper-7 {
  color: #000000;
}

.desktop .text-wrapper-8 {
  position: absolute;
  width: 292px;
  top: 140px;
  left: 21px;
  font-family: "Poppins-Medium", Helvetica;
  font-weight: 500;
  color: #75b1ce;
  font-size: 13px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-9 {
  position: absolute;
  width: 208px;
  top: 189px;
  left: 21px;
  opacity: 0.8;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: var(--dark-blue);
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-10 {
  position: absolute;
  width: 246px;
  top: 229px;
  left: 21px;
  opacity: 0.8;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: var(--dark-blue);
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-11 {
  position: absolute;
  width: 273px;
  top: 189px;
  left: 271px;
  opacity: 0.8;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: var(--dark-blue);
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .line {
  height: 28px;
  top: 192px;
  left: 250px;
  position: absolute;
  width: 1px;
}

.desktop .img {
  height: 26px;
  top: 79px;
  left: 508px;
  position: absolute;
  width: 1px;
}

.desktop .group-3 {
  position: absolute;
  width: 57px;
  height: 43px;
  top: 69px;
  left: 241px;
}

.desktop .text-wrapper-12 {
  position: absolute;
  width: 124px;
  top: 158px;
  left: 158px;
  font-family: "Poppins-SemiBold", Helvetica;
  font-weight: 600;
  color: #000000;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
}

  </style>
  <body>
  <?php include 'navbar.php'; ?>
    <div class="desktop">
      <div class="div">
        <!-- <div class="group"><div class="text-wrapper">Logout</div></div> -->
       
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
                $user_id = $_SESSION["user_id"];
              
                // Query to select all images from the table
                // $sql = "SELECT * from appointment where status='1' AND user_id='$user_id' ";
                $sql = "SELECT lc.image, cc.res_name, cc.case_name, cc.content, cc.id, cc.ap_date, cc.ap_time FROM appointment cc INNER JOIN lawyer lc ON cc.res_name = lc.first_Name  where cc.status='1' AND cc.user_id='$user_id' ";
                // $sql = "SELECT lc.image, cc.user_name, cc.message, cc.time FROM community_chat cc INNER JOIN lawyer lc ON cc.user_id = lc.lawyer_id ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Retrieve the image data
                      
                        $name = $row['res_name'];
                        $case = $row['case_name'];
                        $content = $row['content'];
                        $id = $row['id'];
                        $ap_date = $row['ap_date'];
                        $ap_time = $row['ap_time'];
                        $time = $row['ap_time'];
                        $formattedTime = date("h:i A", strtotime($time));
                        $image = $row['image'];

                        // Generate the HTML for each image with Bootstrap card styling

                     
                        // new 
                        echo '<div class="overlap" style="background-color:#F6FAFC;">';
                        echo '<div class="text-wrapper-2" style="margin-left:-130px;"> ' . ucwords($name) . '</div>';
                        echo '<img class="rectangle" src="data:image/jpeg;base64,' . base64_encode($image) . '" />';
                        
                        echo '<a href="chat_app.php"><div class="overlap-group-wrapper">
                          <div class="overlap-group"><div class="text-wrapper-3">Message</div></div>
                        </div></a>';
                        echo '<div class="text-wrapper-4">' . $ap_date . '</div>';
                        echo '<div class="overlap-wrapper">';
                          echo '<div class="overlap-2">
                            <div class="text-wrapper-5">' . $formattedTime . '</div>
                           
                          </div>
                        </div>
                        <p class="element"><span class="span">4.7 </span> <span class="text-wrapper-7">⭐️ </span></p>
                        <div class="text-wrapper-8">Area of practice</div>
                        <div class="text-wrapper-9">' . $case . '</div>
                      
                        <img class="line" src="img/line-56.svg" />
                        <img class="img" src="img/line-58.svg" />
                        <img class="group-3" src="time.png" />
                      </div>';
                        
                    }
                } else {
                    echo 'No images found in the table.';
                   
                }

                $conn->close();
                ?>
        

        <div class="text-wrapper-12">Notifications</div>
      </div>
    </div>
  </body>
</html>
