<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/rating.min.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.restable.min.js"></script>
<link rel="stylesheet" href="css/jquery.restable.min.css">
<script>
</script>
</head>
<body>
<?php
include 'conf/db.php';
header('Content-Type: text/html; charset=utf-8');

$sql = "SELECT date, artist, title, album, length FROM playlist ORDER BY date DESC LIMIT 30";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id=\"responsive-table\" class=\"rwd-table\"><tr><th>Zeit</th><th>Interpret</th><th>Titel</th><th>Album</th><th>L&auml;nge</th><th>Bewertung</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["date"]."</td><td>".$row["artist"]."</td><td>".$row["title"]."</td><td>".$row["album"]."</td><td>".$row["length"]."</td><td>".
		"<span>&#9734;<span>&#9734;<span>&#9734;<span>&#9734;<span>&#9734;</span></span></span></span></span></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<script src="js/rating.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>
</script>
</body>
</html>