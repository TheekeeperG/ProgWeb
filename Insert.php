<?php
$servername = "localhost";
$username = "root";
$password = "Absolutezero257";
$dbname = "moonlight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
  $sql2 = "SELECT max(ID_IMAGEN) FROM IMAGENES";

//simle select statement with max function
$result_set2 = mysqli_query($conn,$sql2);

//query a result fetch
if ($result_set2) {
    $rowB = mysqli_fetch_array($result_set2);
    //feching a result in array format
$id=1+ $rowB['max(ID_IMAGEN)'];
    //accessing array by name of column with max() function of mysql
} else {
    $id=1;
}

    $name=$_POST["name"];
    $price=$_POST["price"];
    $category=$_POST["category"];
    $sql = "INSERT INTO IMAGENES(NOMBRE, PRECIO, CATEGORIA)
VALUES ('$name', $price, '$category');";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 if($_FILES['img']['type']=="image/jpeg"){
rename($_FILES['img']['tmp_name'], "../../FN/FN2/img/ ".$category."(".$id.").jpg");

 }
    else if($_FILES['img']['type']=="image/png"){
        rename($_FILES['img']['tmp_name'], "../../FN/FN2/img /3.png");
    }
    else if($_FILES['img']['type']=="image/gif"){
        rename($_FILES['img']['tmp_name'], "../../FN/FN2/img /3.gif");
    }
    else{
        echo "<script>alert('Error imagen no valida');</script>";
    }
   header("location:admin.php");
?>