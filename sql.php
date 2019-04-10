
<!DOCTYPE html>
<html>
<body>

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:hkuspace.database.windows.net,1433; Database = online shopping", "s20081965", "{Swagnok0423}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "s20081965@hkuspace", "pwd" => "{Swagnok0423}", "Database" => "online shopping", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:hkuspace.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


</body>
</html>
