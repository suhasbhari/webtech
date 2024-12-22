<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$gender = htmlspecialchars($_POST['gender']);
$dob = htmlspecialchars($_POST['dob']);

echo "<div style='max-width: 600px; margin: 50px auto; font-family: Arial, sans-serif; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 5px;'>";
echo "<h1>Registration Successful</h1>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Password:</strong> $password</p>";
echo "<p><strong>Gender:</strong> $gender</p>";
echo "<p><strong>Date of Birth:</strong> $dob</p>";
echo "<a href='' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background: #4CAF50; color: white; text-decoration: none; border-radius: 3px;'>Go Back</a>";
echo "</div>";
exit;
}
?>

