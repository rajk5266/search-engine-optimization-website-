<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- NAVBAR  -->
    <?php include "navbar.php"; ?>
    <!-- NAVBAR  -->

    
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    // $phone = $_POST["phone"];
    $message = $_POST["message"];
    


}

// echo '<script>
// setTimeout(function(){
//     window.location.href = "index.php";
// }, 3000); // 3-second delay
// </script>';

?>

<?php
$to = "kushwaharaj903@gmail.com";
$subject = "Hello, Raj!";
$message = "This is a test email sent from PHP.";
$from = "digiigrowwork@gmail.com";
$headers = "From : $from";

if(mail($to, $subject, $message, $headers)){
     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>' . htmlspecialchars($name) . '</strong> Sit back and relax till we reach you.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';   
}else{
    echo "Email failed"
}
?>


<!-- FOOTER  -->
<?php include "footer.php"; ?>
<!-- FOOTER  -->

<script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>