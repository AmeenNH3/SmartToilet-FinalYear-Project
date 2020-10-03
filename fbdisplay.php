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
  <h1>Users Feedbacks and complaints</h1>
 <table>
 <tr>
  <th>Name</th>
  <th>State</th>
  <th>City</th>
  <th>Pincode</th>
  <th>Rating</th>
  <th>Complaint</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "feedbacksystem");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT name, state, city, pincode, Rating, complaint FROM fbt";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["state"] . "</td><td>"
. $row["city"]. "</td><td>" . $row["pincode"]. "</td><td>" . $row["Rating"]. "</td><td>" . $row["complaint"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
