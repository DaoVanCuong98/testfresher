<?php 
$conn = mysqli_connect("localhost", "username","password", "databasename");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, name , email  FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Load dữ liệu lên website
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Tên: " . $row["name"]. " ". " - Email: ". $row["email"]."<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>

//ý 2
$sql = "INSERT INTO Students (name, email) VALUES 
('Ten1','ten1.v@some.com'),
('Ten2','ten2.v@some.com'),
('Ten3','ten3.v@some.com'),
('Ten4','ten4.v@some.com'),
('Ten5','ten5.v@some.com'),
('Ten6','ten6.v@some.com'),
('Ten7','ten7.v@some.com'),
('Ten8','ten8.v@some.com'),
('Ten9','ten9.v@some.com'),
('Ten10','ten10.v@some.com')";
