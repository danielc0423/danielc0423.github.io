
<!DOCTYPE html>
<html>
<body>
<?php
    $username = $POST['username'];
    $password = $POST['password'];
    
    // to prevent sql injection
    $username =stripcslashes($username);
    $password =stripcslashes($password);
    $username =mysql_real_escape_string($username);
    $password =mysql_real_escape_string($password);
    
    
    
    
    
    
// PHP Data Objects(PDO) Sample Code:
    <?php
try {
    $conn = new PDO("sqlsrv:server = tcp:hkuspace.database.windows.net,1433; Database = online shopping", "$username", "$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "s20081965@hkuspace", "pwd" => "$password", "Database" => "online shopping", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:hkuspace.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
</body>
</html>
