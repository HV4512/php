<?php
$servername = "localhost";
$username = "root";
$password = "Onur@face1234";
$dbname = "contacts";

$conn=mysqli_connect($servername,$username,$password,$dbname);


$sql = "Select * from user";
$result = mysqli_query($conn,$sql);


echo "<table border = 1px>";
echo "<tr><th>NAME</th><th>password</th><th>email</th><th>phone</th></tr>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</td>";
}
echo "</table>";    

echo "<h2> new record created succesfully</h2>";
mysqli_close($conn);

?>