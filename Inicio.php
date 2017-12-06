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

<body id="login">
    <header class="w3-container w3-black w3-center w3-padding-32">
        <h1><b>MOONLIGHT COSTUMES</b></h1>
        <p>Un disfraz<span class="w3-tag">para tí.</span></p>
    </header>
    <div class="w3-container logindiv w3-display-middle" style="height:90%; margin-top:7%;width:80%">

        <div class="w3-container logindiv w3-display-middle" style="height:80%; background-color:rgba(75,25,25,0.6)">
            <form action="registro.php" method="get" enctype="multipart/form-data">
                <label class="w3-tag">Email</label>
                <input class="w3-input w3-border" type="Email" placeholder="Example: Vampiro" name="email"><br>
                <label class="w3-tag">Password</label>
                <input type="password" placeholder="Example: 123456" class="w3-input w3-padding w3-large w3-red" name="pass" id="pass"><br><br>
                <input OnClick="document.getElementById('hide').value=1;" class="w3-input  w3-black w3-border w3-padding-16 w3-button" value="Registrarse" type="Submit" name="submit"><br><br>
               
                <input OnClick="document.getElementById('hide').value=2;" class="w3-input w3-black w3-border w3-padding-16 w3-button" value="Loguearse" type="Submit" name="submit">
 <input type="hidden" id="hide" value="1" name="hide">
            </form>
        </div>


    </div>
</body>

</html>
