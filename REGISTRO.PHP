<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "13060613";
$dbname = "moonlight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$hide1=$_GET['email'];
$hide2=$_GET["pass"];
$hide=$_GET["hide"];
echo $hide1;
if($hide=="1"){
    $sql = "INSERT INTO usuarios(email, password)
VALUES ('$hide1', '$hide2');";

if ($conn->query($sql) === TRUE) {
    header("location:inicio.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{
$sql = "SELECT * FROM usuarios WHERE email = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
    $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($hide2, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $hide1;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=index.php>Panel de Control</a>"; 
}}

?>
