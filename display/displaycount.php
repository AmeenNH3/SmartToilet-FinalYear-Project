<!DOCTYPE html>
<html>
<head>
 <title>FeedBack</title>
 <style>

  body{
    background-color: #ccc;
    width:80%;
    margin:0 auto;
    margin-top:100px;
  }
  table {
   border-collapse: collapse;
   width: 100%;
   color: black;
   font-family: monospace;
   font-size: 20px;
   text-align: left;
     }
  th {
   background-color: black;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
  <h1>Occupancy</h1>
 <table>
 <tr>
  <th>Time</th>
  <th>Number of people used</th>
  </tr>
 <?php
$conn = mysqli_connect('localhost', 'id8684127_root', 'password', 'id8684127_smart');
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM tbl_count";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["timestamp"]. "</td><td>" . $row["count"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
