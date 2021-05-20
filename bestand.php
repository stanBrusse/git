<?php
$conn = mysqli_connect("mysql://sbrusse.gc-webhosting.nl:3306", "sbrusse", "Heelweg1!", "sbrusse_jokeapp");
$sql = "SELECT * FROM jokes ORDER BY id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
echo $row["id"];
}

echo "dit werkt echt goedd";
?>
