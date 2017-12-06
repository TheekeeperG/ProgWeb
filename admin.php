
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
    <div class="w3-content" style="max-width:1532px;">

        <div class="w3-container w3-tag w3-red w3-block">
            <h3>MoonLight </h3>
            <p>Admin Page</p>
        </div>
        <form action="insert.php" method="post" enctype="multipart/form-data">

            <div class="w3-row-padding w3-text-red  w3-white">
                <div class="w3-col m3 w3-padding-16">
                    <label><i ></i> Costume name</label>
                    <input class="w3-input w3-border " type="text" placeholder="Example: Vampiro" name="name">
                </div>
                <div class="w3-row-padding w3-text-red  w3-white">
                    <div class="w3-col m3 w3-padding-16">
                        <label><i ></i> Price</label>
                        <input class="w3-input w3-border " type="text" placeholder="Example:232" name="price">
                    </div>
                    <div class="w3-row-padding w3-text-red   w3-white">
                        <div class="w3-col m3 w3-padding-32">
                            <label><i ></i> Category</label>
                            <select name="category" class=" w3-s5">
                            <option value="H">Men</option>
                            <option value="M">Women</option>
                            <option value="A">Accesories</option>
                            <option value="P">Maquillaje</option>
                        </select>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-text-red  w3-white">
                        <div class="w3-col m3 w3-padding-32">
                            <label><i ></i> File</label>
                            <input class="w3-input w3-border " name="img" type="file" placeholder="Example: Vampiro">
                        </div>
                    </div>
                    <div class="w3-row-padding w3-text-red  w3-white">
                        <div class="w3-col m3 w3-padding-32">
                            <label><i ></i> Submit</label>
                            <input class="w3-input w3-border w3-button" value="upload" type="Submit" placeholder="Example: Vampiro" name="submit">
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>

   
</body>
