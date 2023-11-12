<?php
session_start();
?>
<?php
// Database connection parameters
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ap_id = $_SESSION['ap_id'];
// SQL query to select data from the table



$sql = "SELECT * FROM appointment where id = $ap_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $appointmentStatus = $row['status'];
       
    } else {
        echo 'User not found.';
    }

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Razorpay Payment Gateway Integration </title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<link rel="stylesheet" href="loader.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
  }
  .card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
  }
  .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
  }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
  }

  .label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
  }

  .card-product .price-old {
    color: #999;
  }
</style>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
<br><br><br>

<?php
$appointmentStatus = $row["status"];
?>

<?php if ($appointmentStatus != '1'): ?>
    <h1 style="justify-content:center; text-align:center; color: #4a00e0;">Waiting for Lawyer Approval</h1>
    <div class="loading">
        <span>Waiting..</span>
    </div>
<?php else: ?>
    <div class="row" style="margin-top:200px; text-align:center; justify-content:center;">
        <div class="col-md-4">
            <figure class="card card-product">
                <figcaption class="info-wrap">
                    <p class="desc">Proceed to Make Payment Here...</p>
                    <div class="rating-wrap"></div>
                </figcaption>
                <div class="bottom-wrap" style="text-align:center; justify-content:center;">
                    <a style="justify-content:center; text-align:center; margin-right:120px;" href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now"
                        data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png"
                        data-amount='<?php echo $_SESSION["fees"]; ?>' data-id="1">Pay Now</a>
                    <div class="price-wrap h5"></div>
                </div>
            </figure>
        </div>
    </div>
<?php endif; ?>








<!--container.//-->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_SWTSaPUZjK3oQF",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_SWTSaPUZjK3oQF", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
</body>
</html>
