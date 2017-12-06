 <div style="height:100%" class=" w3-modal-content w3-animate-top w3-card-2">
                        <div class="w3-half" style=width:20%>
                                <span onclick="window.location.href = 'index.php'" class="w3-button w3-darkred w3-xlarge w3-display-topright">×</span>

                                <p id="Nombre">
                                    <?php echo $row["NOMBRE"];?>
                                </p>
                                <div class="w3-container ">
                                    <div class="w3-card w3-padding-64"><img class="w3-right" style="max-width:500px; margin-left=20%" src='<?php echo "img/".$row["CATEGORIA"]." (".$row["ID_IMAGEN"].").JPG"; ?>'>
                                        <div class="w3-container w3-padding-64 w3-topmiddle w3-red w3-tag w3-jumbo ">PRECIO:
                                            <?php echo $row["PRECIO"];?> $</div>
                                        <label class="w3-tag">Dejanos tu email y te lo llevamos a tu casa. </label>
                                        <form action="index2.php" method="post">
                                            <input type="email" name=email>
                                            <input class="w3-input w3-border w3-button" value="upload" type="Submit" placeholder="" name="submit">
                                        </form>
                                    </div>

                                </div>


                            </div>

<!------>
                        <div style="background-color:rgb(153, 0, 51);width:10%;margin:0px; height:100%"></div>
                        

                        </div>