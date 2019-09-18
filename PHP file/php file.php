<?php
   $email = $_POST['email'];
   $password = $_POST['password'];
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
      }
      function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      }                 
            echo "<p>Or login with your email</p>"
            echo $email;
            echo "<br>";
            echo $password;
            ?>
<?php
//define error variables\\
$emailErr = $passwordErr ="";
if($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST["email"])){
        $emailErr = "Email is Required";
    }
    else {
        $email = test_input($_POST["email"])
    }
}

if($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST["password"])){
        $passwordErr = "Password is Required";
    }
    else {
        $password = test_input($_POST["password"])
    }
}
?>