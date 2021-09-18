<html>
	<head>
		<title>PHP tesst</title>
	</head>
	<body>
	<?php 

echo "<h3> Hinh IU 1 </h3>";
$host = "db";
$user = "pta";
$password = "pta150691";
$db = "webdata";
$connect = new mysqli($host, $user, $password, $db);

if ($connect->connect_error) {
    exit('fail:' . $connect->connect_error);
    }
  
    echo 'success';
$res = "select nameimg from image";
$data = $connect->query($res);
foreach (glob("img/*") as $filename)
{
echo "<p>$filename</p>";
echo "<div><img src='$filename'  /></div>";
}

?>


	</body>
</html>
