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

    <body>
        <!------------------NavBar--------------->
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

        <!-----------------Header---------------->
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

            <!--------------DisfracesHombres--------->
            <div class="w3-container w3-content w3-center" style="max-width:800px" id="DMan">
                <h3 class="w3-wide">Disfraces para hombres</h3>
                <hr class="w3-middle" style="width:50%; margin-left:25%;">
                <input type="hidden" id="hipe" value="1" ;>
                <p class="w3-justify">Contamos con los mejores disfraces para hombres, hechos con materiales de primerisima calidad y los accesorios para maquillaje más impresindibles para que tu cosplay profesional o tu casero disfraz para Halloween se ve tal como debería de verse... Fantastico.
                <br>
                Con un gran catalogo con más de 1500 prendas para escoger, que van desde clásicos de Disney hasta franquicias de Marvel o DC incluso con accesorios de personajes de los videojuegos más populares como League of Legends u Overwatch todo a tu entera disposición y totalmente original.</p>
                <div class="w3-row w3-padding-32">



                    <?php
                        $sql = "SELECT ID_IMAGEN, NOMBRE, PRECIO FROM IMAGENES WHERE CATEGORIA='H';";
                        $result = $conn->query($sql);
                        $j=1;
                        $m=1;
                        $cat="Ho";
                        if ($result->num_rows > 0) {
            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                   
                                    if($j==1){
                                    echo '
                <div class="w3-row w3-padding-32">
                   <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/H%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                      
                    </div>';
                $j++;
                $m++;
                                        
                    }
                          else if($j==2){
                                    echo '          
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/H%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>';
                               $j++;
                $m++;}
                                        else if($j==3){
                                            $j=1;
                                            $m++;
                                    echo '
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/H%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>
                </div>';}
                                if ($m==4){
                                    
                                    ?>
                        <button id="ver" onclick="unHide('Ho')" class="w3-btn w3-block w3-black w3-center-align">Ver más</button>

                        <div id="Ho" class="w3-hide"> ';
                            <?php
                                }
                                }
                            } else {
                                echo "0 results";
                                    }
                      
                    ?>

                        </div>


                </div>
            </div>

            <!--------------DisfracesMujeres--------->
            <div class="w3-container w3-content w3-center" style="max-width:800px" id="DMan">
                <h3 class="w3-wide">Disfraces para mujeres</h3>
                <hr class="w3-middle" style="width:50%; margin-left:25%;">

                <p class="w3-justify">Contamos con los mejores disfraces para mujeres, con piezas que van desde inocentes unicornos a malvadas diablillas, con un amplio surtido también en accesorios como pelucas, látex, sombras para ojos, juegos de brochas, lipsticks y un montón de cosas más, sé la más coqueta de la fiesta vistiendo prendas de MoonLight Costumes!.</p>
                <div class="w3-row w3-padding-32">



                    <?php
                        $sql = "SELECT ID_IMAGEN, NOMBRE, PRECIO FROM IMAGENES WHERE CATEGORIA='M';";
                        $result = $conn->query($sql);
                        $j=1;
                        $m=1;
                        $cat="Mo";
                        if ($result->num_rows > 0) {
          
                                while($row = $result->fetch_assoc()) {
                                   
                                    if($j==1){
                                    echo '
                <div class="w3-row w3-padding-32">
                   <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/M%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                      
                    </div>';
                $j++;
                $m++;
                                        
                    }
                          else if($j==2){
                                    echo '          
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/M%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>';
                               $j++;
                $m++;}
                                        else if($j==3){
                                            $j=1;
                                            $m++;
                                    echo '
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/M%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>
                </div>';}
                                if ($m==4){
                                    
                                    ?>
                        <button id="ver" onclick="unHide('Mo')" class="w3-btn w3-block w3-black w3-center-align">Ver más</button>

                        <div id="Mo" class="w3-hide"> ';
                            <?php
                                }
                                }
                            } else {
                                echo "0 results";
                                    }
                      
                    ?>

                        </div>


                </div>
            </div>
            <!----------------Maquillaje------------->
            
             <div class="w3-container w3-content w3-center" style="max-width:800px" id="DMan">
                <h3 class="w3-wide">Maquillaje</h3>
                <hr class="w3-middle" style="width:50%; margin-left:25%;">

                <p class="w3-justify">Contamos con los mejores disfraces para mujeres, con piezas que van desde inocentes unicornos a malvadas diablillas, con un amplio surtido también en accesorios como pelucas, látex, sombras para ojos, juegos de brochas, lipsticks y un montón de cosas más, sé la más coqueta de la fiesta vistiendo prendas de MoonLight Costumes!.</p>
                <div class="w3-row w3-padding-32">



                    <?php
                        $sql = "SELECT ID_IMAGEN, NOMBRE, PRECIO FROM IMAGENES WHERE CATEGORIA='P';";
                        $result = $conn->query($sql);
                        $j=1;
                        $m=1;
                        $cat="Mo";
                        if ($result->num_rows > 0) {
            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                   
                                    if($j==1){
                                    echo '
                <div class="w3-row w3-padding-32">
                   <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/P%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                      
                    </div>';
                $j++;
                $m++;
                                        
                    }
                          else if($j==2){
                                    echo '          
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/P%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>';
                               $j++;
                $m++;}
                                        else if($j==3){
                                            $j=1;
                                            $m++;
                                    echo '
                    <div class="w3-third">
                        <div onclick="h1('.$row["ID_IMAGEN"].')" class="w3-card">
                            <p>'.$row["NOMBRE"].'</p>
                            <img src="img/P%20('.$row["ID_IMAGEN"].').jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                    </div>
                </div>';}
                                if ($m==4){
                                    
                                    ?>
                        <button id="ver" onclick="unHide('Po')" class="w3-btn w3-block w3-black w3-center-align">Ver más</button>

                        <div id="Po" class="w3-hide"> ';
                            <?php
                                }
                                }
                            } else {
                                echo "0 results";
                                    }
                      
                    ?>

                        </div>


                </div>
            </div>
            <!----------------Accesorios------------->


            <!-----------------ConfirmarCarrito------->
            
        </div>

        <script>
          
            function h1(idi) {

                var javascriptVariable = idi;
                window.location.href = "index2.php?name=" + javascriptVariable;





                document.getElementById('hipe').value = idi;

            }

        </script>
    </body>

    </html>
