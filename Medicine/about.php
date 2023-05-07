
<?php
require ("connection.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      require("header.php");
    ?>
    <div style="  margin-top:100px; padding:20px 0px; ">
      <div style=" margin:auto; width:90%; ">

          
      
          <div style=" width:100%;">
              <div style="display:grid; justify-content:center; width:100%;  text-align:center;">
               
                <div style=" margin:0px 20px 30px 0px; height:auto;">
                    <?php
                      $sql_query = "SELECT * FROM about WHERE id = 1";
                      $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
                      $row = mysqli_fetch_array($result);


                    ?>
                    <a  href="">
                        <img style="border-radius:5%;" src="image/medicalshop.jpg" width="500px" height="300px" alt="">
                        
                        <p ><?php echo $row['name'] ?></p>
                    </a><br>
                    <div style=" text-align:center;  ">
                    <?php echo $row['bio'] ?>
                    </div>
                </div>
                <!-- <div style=" margin:0px 20px 30px 0px; height:auto;">
                    <?php
                      $sql_query = "SELECT * FROM about WHERE id = 2";
                      $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
                      $row = mysqli_fetch_array($result);


                    ?>
                    <a  href="">
                        <img style="border-radius:5%;" src="image/img1.jpg" width="300px" height="400px" alt="">
                        
                        <p ><?php echo $row['name'] ?></p>
                    </a><br>
                    <div style=" text-align:center;  ">
                      <?php echo $row['bio'] ?>
                    </div>
                </div>
                <div style=" margin:0px 20px 30px 0px; height:auto;">
                    <?php
                      $sql_query = "SELECT * FROM about WHERE id = 3";
                      $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
                      $row = mysqli_fetch_array($result);


                    ?>
                    <a href="">
                        <img style="border-radius:5%;" src="image/img1.jpg" width="300px" height="400px" alt="">
                        
                        <p ><?php echo $row['name'] ?></p>
                    </a><br>
                    <div style=" text-align:center;  ">
                      <?php echo $row['bio'] ?>
                    </div>
                </div>
                <div style=" margin:0px 20px 30px 0px; height:auto;">
                    <?php
                      $sql_query = "SELECT * FROM about WHERE id = 4";
                      $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
                      $row = mysqli_fetch_array($result);


                    ?>
                    <a  href="">
                        <img style="border-radius:5%;" src="image/img1.jpg" width="300px" height="400px" alt="">
                        
                        <p ><?php echo $row['name'] ?></p>
                    </a><br>
                    <div style=" text-align:center;  ">
                      <?php echo $row['bio'] ?>
                    </div>
                </div> -->
              </div>
          </div>
          <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Online Medical Store.com It is a Online Pharmacy, ayurvedic store,Health Store - Its a one stop shop that offers effective Medical products, healthcare solutions to all those individuals who are health enthusiasts. Providing over 20,000 health  and ayurvedic herbal medicines online at the lowest guaranteed price - with the highest pharmaceutical standards. 

                  We offer premium and the largest range of original health and fitness products across various categories and leading brands. We dedicate this portal to all those people who are keen to purchase healthcare products online.

                  The aim is to supply cheaper products to everybody who has access to the internet and deliver those products to their door. Through harnessing the power of the internet and supplying you directly, this website will save up to 75% off the cost of many well known products found in your local Medical Shop.

                  We aim at covering various healthcare categories comprehensively which include –Diabetes,Nutrition,Sports and fitness,Body Building, Beauty care and Personel Care Produts,Mother and Baby Care and Health Devices. We enjoy comprehensive understanding of the shopper’s needs and make our best efforts to cater them with an extensive choice of both Indian and globalbrands

                  Offering a superior buying experience, we endow our esteemed customers with the best prices in market. we strive to achieve the highest level of customer satisfaction. Equipped with a well-informed team, using state of the art E-commerce platform, and prompt customer support system, we aim to offer our customers with unparalleled services.

                  We proudly manage our own warehousing operations that facilitate us to meet the daily orders of our customers and attain fastest shipping. We believe in adding new selections for our customers and making things easier to compare, find and discover varied products via our services.

                  online medical store offers a variety of key services includingayurvedic herbal  pharmacy and over-the-counter medicines, vitamins and health supplements, family planning , ayurvedic herbal beauty cosmetic products,  ayurvedic herbal medicine ,toiletries, electrical items and baby care products.

                  The service is supervised by fully qualified pharmacists who are available to discuss symptoms and issues about medical problems in a confidential environment through email and oversee all medicinal purchases.

 

                 So, make a move and Happy Shopping !!!!</p>
           </div> 
          <!-- <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Physicians’ use of the Internet to gather medical information has increased in recent years. Several studies have been conducted to explore the implications of this use on patient education, the physician-patient relationship, and diagnosis/decision making. In order to better understand the current and future implications of Internet use on patient care activities, it is important to know the Internet sources physicians prefer to consult. The objective of this study was to determine the Internet sources of information physicians most often use to gather medical information. This study demonstrated that the vast majority of physicians indicate they access a targeted site rather than utilize a search engine (such as Google©) to gather medical information. Of the targeted site types, most physicians indicate they use 1) edited/secondary data sources as their primary medical information data retrieving, 2) about one quarter of the physicians surveyed indicated research databases which provide access to medical journal publications 3) a minority of physicians use sites dedicated to their specialized area and 4) a small percentage use medical web site portals.</p>
          </div> -->
          <!-- <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Physicians’ use of the Internet to gather medical information has increased in recent years. Several studies have been conducted to explore the implications of this use on patient education, the physician-patient relationship, and diagnosis/decision making. In order to better understand the current and future implications of Internet use on patient care activities, it is important to know the Internet sources physicians prefer to consult. The objective of this study was to determine the Internet sources of information physicians most often use to gather medical information. This study demonstrated that the vast majority of physicians indicate they access a targeted site rather than utilize a search engine (such as Google©) to gather medical information. Of the targeted site types, most physicians indicate they use 1) edited/secondary data sources as their primary medical information data retrieving, 2) about one quarter of the physicians surveyed indicated research databases which provide access to medical journal publications 3) a minority of physicians use sites dedicated to their specialized area and 4) a small percentage use medical web site portals.</p>
          </div>

          <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Physicians’ use of the Internet to gather medical information has increased in recent years. Several studies have been conducted to explore the implications of this use on patient education, the physician-patient relationship, and diagnosis/decision making. In order to better understand the current and future implications of Internet use on patient care activities, it is important to know the Internet sources physicians prefer to consult. The objective of this study was to determine the Internet sources of information physicians most often use to gather medical information. This study demonstrated that the vast majority of physicians indicate they access a targeted site rather than utilize a search engine (such as Google©) to gather medical information. Of the targeted site types, most physicians indicate they use 1) edited/secondary data sources as their primary medical information data retrieving, 2) about one quarter of the physicians surveyed indicated research databases which provide access to medical journal publications 3) a minority of physicians use sites dedicated to their specialized area and 4) a small percentage use medical web site portals.</p>
          </div> -->

          <!-- <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Physicians’ use of the Internet to gather medical information has increased in recent years. Several studies have been conducted to explore the implications of this use on patient education, the physician-patient relationship, and diagnosis/decision making. In order to better understand the current and future implications of Internet use on patient care activities, it is important to know the Internet sources physicians prefer to consult. The objective of this study was to determine the Internet sources of information physicians most often use to gather medical information. This study demonstrated that the vast majority of physicians indicate they access a targeted site rather than utilize a search engine (such as Google©) to gather medical information. Of the targeted site types, most physicians indicate they use 1) edited/secondary data sources as their primary medical information data retrieving, 2) about one quarter of the physicians surveyed indicated research databases which provide access to medical journal publications 3) a minority of physicians use sites dedicated to their specialized area and 4) a small percentage use medical web site portals.</p>
          </div> -->

          <!-- <div style=" width:100%;  margin-top:60px; text-align:justify;">
            <p>Physicians’ use of the Internet to gather medical information has increased in recent years. Several studies have been conducted to explore the implications of this use on patient education, the physician-patient relationship, and diagnosis/decision making. In order to better understand the current and future implications of Internet use on patient care activities, it is important to know the Internet sources physicians prefer to consult. The objective of this study was to determine the Internet sources of information physicians most often use to gather medical information. This study demonstrated that the vast majority of physicians indicate they access a targeted site rather than utilize a search engine (such as Google©) to gather medical information. Of the targeted site types, most physicians indicate they use 1) edited/secondary data sources as their primary medical information data retrieving, 2) about one quarter of the physicians surveyed indicated research databases which provide access to medical journal publications 3) a minority of physicians use sites dedicated to their specialized area and 4) a small percentage use medical web site portals.</p>
          </div> -->

      </div>
    </div>

    <footer >
      <?php require ("footer.php");?>
    </footer>
</body>
</html>