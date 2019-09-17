<?php
    include 'index.html';
?>
<?php
   // define variables for the login\\
   $email = $password = "";
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
            echo "<h1>Sign in to Merakians</h1>"
            echo $email;
            echo "<br>";
            echo $password;
            ?>
<?php
//define error variables\\
$emailErr = $passwordErr ="";
if($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST["name"])){
        $emailErr = "Email is Required";
    }
    else {
        $email = test_input($_POST["email"])
    }
}

if($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST["name"])){
        $passwordErr = "Password is Required";
    }
    else {
        $password = test_input($_POST["password"])
    }
}
?>


