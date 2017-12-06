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
?>
    <html>

    <head>
        <title> MoonLight </title>
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/scripts.js"></script>
    </head>

    <body onload="document.getElementById('preciom').style.display='block';">
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="litNav()" title="Secciones"><i class="glyphicon glyphicon-align-justify"></i></a>
                <a href="#home" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-padding-large w3-button" title="More">Disfraces <i class="fa fa-caret-down"></i></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="#DMan" class="w3-bar-item w3-button">Caballeros</a>
                        <a href="#" class="w3-bar-item w3-button">Damas</a>
                    </div>
                </div>
                <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Accesorios</a>
                <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Maquillaje</a>
                <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Contacto</a>

            </div>
        </div>

        <!----------------NavBarMovil------------>
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#DMan" class="w3-bar-item w3-button w3-padding-large">Disfraces</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large">Accesorios</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large">Maquillaje</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Contacto</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large"> <button type="button" class="btn w3-hover-white w3-black">
          <span class="	glyphicon glyphicon-shopping-cart"></span> Carrito
        </button></a>
        </div>

        <div class="w3-content" style="max-width:2000px;margin-top:50px">
            <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="home">
                <h2 class="w3-wide">MoonLight Costumes</h2>
                <p class="w3-opacity"><i>Disfraces para tí.</i></p>
            </div>

            <!----------------SlideShow-------------->
            <div class="mySlides w3-display-container w3-center">
                <img src="img/Slide1.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-black w3-opacity w3-container w3-text-white w3-padding-16 w3-hide-small cien">
                    <div class="w3-container w3-padding"><img style="width:20%" src="img/logo.png"></div>
                    <p style="padding-top:1%"><b>Los mejores disfraces para ella.</b></p>
                </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
                <img src="img/Slide2.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-black w3-opacity w3-container w3-text-white w3-padding-16 w3-hide-small cien">
                    <div class="w3-container w3-padding"><img style="width:20%" src="img/logo.png"></div>
                    <p style="padding-top:1%"><b>Los mejores disfraces para el.</b></p>
                </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
                <img src="img/Slide3.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-black w3-opacity w3-container w3-text-white w3-padding-16 w3-hide-small cien">
                    <div class="w3-container w3-padding"><img style="width:20%" src="img/logo.png"></div>
                    <p style="padding-top:1%"><b>El mejor maquillaje en México.</b></p>
                </div>
            </div>

            <?php
echo $_GET['name'];?>
                <?php  $sql = "SELECT ID_IMAGEN,CATEGORIA, NOMBRE, PRECIO FROM IMAGENES WHERE ID_IMAGEN=".$_GET['name'].";";
                        $result = $conn->query($sql);
            $row = $result->fetch_assoc();?>
                <div onClick="bigImg()" id="preciom" class="w3-modal" style="display:block">


                    <div class="w3-container w3-display-middle" style="width:70%; height:90%">
                        <div class="w3-white w3-right" style="width:80%;height:100%;">
                            <div class="w3-padding-32"style="width:80% ;margin-left:10%">
                                
                                <div class="w3-card-4 w3-padding">

                                    <div class="w3-container w3-center">
                                        <h3>
                                    <?php echo $row["NOMBRE"];?>
                                </h3>
                                        <img src='<?php echo "img/".$row["CATEGORIA"]." (".$row["ID_IMAGEN"].").JPG"; ?>' alt="Avatar" style="width:50%; padding-top:2%;">
                                        <h5><?php echo $row["PRECIO"];?> $</h5>

                                        <button class="w3-button w3-green">Comprar</button>
                                       
                                    </div>

                                </div>


                                


                            </div>





                        </div>





                        <div style="width:20%;background-color:rgb(153, 0, 51); height:100%"></div>



                    </div>
                </div>

        </div>
        <script>
            var modal = document.getElementById('preciom');
            window.onclick = function(event) {
                if (event.target == modal) {
                    window.location.href = "index.php";
                }
            }

        </script>
    </body>

    </html>
