<html>
<head></head>
<body>
<?php

$firstName=$_REQUEST["firstName"];
$lastName=$_REQUEST["lastName"];
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$gender=$_REQUEST["gender"];
$academicYear=$_REQUEST["academicYear"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];

?>
<table border="1">
<tr>
<td>First Name</td>
<td><?php echo "$firstName"; ?></td>
</tr>

<tr>
<td>Last Name</td>
<td><?php echo "$lastName"; ?></td>
</tr>

<tr>
<td>Username</td>
<td><?php echo "$username"; ?></td>
</tr>

<tr>
<td>Password</td>
<td><?php echo "$password"; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo "$gender"; ?></td>
</tr>

<tr>
<td>Academic year</td>
<td><?php echo "$academicYear"; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo "$email"; ?></td>
</tr>

<tr>
<td>Phone No.</td>
<td><?php echo "$phone"; ?></td>
</tr>




</table>
</body>
</html>