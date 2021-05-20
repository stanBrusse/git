<?php
$conn = mysqli_connect("gc-webhosting.nl",
 "sbrusse_jokeapp", "sbrusse_jokeapp", "sbrusse_jokeapp");
$sql = "SELECT * FROM jokes ORDER BY id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
echo $row["id"] . " " . $row["title"] . "<br>";
}

echo "dit komt uit de database.
?>
