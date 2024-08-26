<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$conn = mysqli_connect("localhost", "root","", "kj");
$query ="insert into feedback(quality_score, feedback, name, email)values($q_score, '$feedback_txt', '$name', '$email')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>