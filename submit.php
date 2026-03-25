<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $contact = $_POST['Contact'] ?? '';
  $password = $_POST['password'] ?? '';

  echo "Form Submitted Successfully!<br>";
  echo "Name: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Contact: " . $contact . "<br>";

} else {
  echo "Please submit the form first!";
}

?>