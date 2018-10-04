<?php
include "include/db_config.php";
session_start();

// initializing variables
$username = "";
$id="";
$email    = "";
$firstname    = "";
$lastname    = "";

$errors = array();

// REGISTER USER
if (isset($_POST['reg_user']))
{
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);




  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) == 1)
    {
      array_push($errors, "Email already exists");
    }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
  {
   $password = md5($password);  //encrypt the password before saving in the database

   $query = "INSERT INTO users (username, email, password  )
              VALUES('$username', '$email', '$password' )";
   mysqli_query($conn, $query);



    header('Location: login.php');

  }
}

// LOGIN USER
if (isset($_POST['login_user']))
{
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  if (count($errors) == 0)
  {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
    $logged = mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1)
    {
      $_SESSION['userType'] = $logged['userType'];
      if($_SESSION['userType']== 0)
          {

            $_SESSION['username'] =$username;
            $_SESSION['id'] = $logged['id'];
            $_SESSION['userType'] = $logged['userType'];
            header('location: bulletin.php');
          }

          else if($_SESSION['userType']== 1)
          {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $logged['id'];
            $_SESSION['userType'] = $logged['userType'];

            header('location: business.php');
          }


  	}
    else
    {
  		array_push($errors, "Incorrect Email/Password");
  	}
  }
}


?>
