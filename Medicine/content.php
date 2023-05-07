<?php
require ("connection.php");

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .column{
            display: flex;
            float: left;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div style="  margin-top:100px; padding:20px 0px; ">
        <div style=" margin:auto; width:90%; ">
            

            <div style=" width:100%;">
                <div style="display:grid; grid-template-columns: repeat(4, 1fr); width:100%;  text-align:center;">
                    <?php
                        $sql = "SELECT * FROM product ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($fetch = mysqli_fetch_array($result))
                            {
                                ?>
                                    <div style=" margin:0px 20px 30px 0px; height:auto;">
                                        <a  href="signin.php">
                                            <img style="border-radius:50%;" src="<?php echo $fetch['medicineimage'] ?>" width="300px" height="220px" alt="">
                                            
                                            <p ><?php echo $fetch['medicinename'] ?></p>
                                        </a><br>
                                        <div style="display:flex; text-align:center;  ">
                                            <p style=";"><span style=" font-weight:bold;  margin-left:50px; font-size:18px;">Rs. :</span> 
                                            <span style="color:red;margin-left:15px; font-size:18px;">&#8377;<?php echo $fetch['price'] ?></span></p>
                                            <span style=" margin-left:50px;font-weight:bold; font-size:18px;">Qnty :</span>
                                            <span style="margin-left:15px; font-size:18px;"><?php echo $fetch['qnty'] ?></span>
                                        </div>
                                        <div style="display:flex; padding:0px 50px; margin-top:20px; justify-content:space-between; text-align:center;  ">
                                            <button style="background-color:yellow; color:black; border-radius:10px; padding:13px 30px; cursor:pointer; ">Add To Cart</button>
                                            
                                            <button style="background-color:green; color:#ffffff; border-radius:10px; padding:13px 30px; cursor:pointer; ">Buy</button>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


