<?php
$name = 'Hanna Vaitovich';
$age = '26';
$email = 'annvoitovich@gmail.com';
$city = 'Dallas';
$about = 'Hanna was born in Belarus. She moved to USA a few years back. Now she is studying PHP at Netology.';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Lesson 1</title>
  </head>
  <body>
    <style>
      td {
        padding: 10px 20px;
      }
    </style>
  <h1> User page for <?php echo $name; ?></h1>
    <table>
      <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>Age</td>
        <td><?php echo $age; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><a href="mailto:annvoitovich@gmail.com"><?php echo $email; ?></a></td>
      </tr>
      <tr>
        <td>City</td>
        <td><?php echo $city; ?></td>
      </tr>
      <tr>
        <td>About Me</td>
        <td><?php echo $about; ?></td>
      </tr>
    </table>
  </body>
</html>
