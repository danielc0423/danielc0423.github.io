
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "hkuspace.database.windows.net";
$username = "s20081965";
$password = "Swagnok0423";
$dbname = "online shopping";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "cus_id: " . $row["cus_id"]. " - cus_name: " . $row["cus_name"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>
