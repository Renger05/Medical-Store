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
</head>
<body>
    <?php
      require("header.php");
    ?>

    
      <?php
          if(isset($_SESSION['status']) && $_SESSION !='')
          {
              ?>
              <div>
                  <strong>Dashboard Table </strong><?php echo $_SESSION['status'] ?>
              </div>

              <?php
          }
      ?>
    <div style="margin:auto;width:50%; height:100vh;">
      
      <div style="margin:auto; margin-top:100px; width:70%;">
        <form action="code.php" method="POST" enctype="multipart/form-data">
          <table style="width:100%;height:400px" >
            <caption><b>Contact US</b></caption>
            <tr>
            <td><lable><b>Mail Id</b></lable></td>
            <td>
              <input type="email"  name="email" required  style="height:35px; width:100%;"/>
            </tr> 
            <tr>
            <td><lable><b>Phone No</b></lable></td>
            <td>
              <input type="number" name="phone_no"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxLength="10" required="true" style="height:35px;width:100%"/>
            </td>
            </tr>
            <tr>
              <td><lable><b>Message</b></lable></td>
              <td>
                <!-- <input type="text" name="message" required style="height:35px; width:350px;"/> -->
                <textarea name="message" cols="30" rows="10" style="width:100%"></textarea>
              </td>
            </tr> 
            <tr>
              <td></td>
              <td>
                <button type="submit" name="send_btn" style="height:35px; width:180px; margin-left: 20px;">Send</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
         
    </div>
     

   
</body>
<footer >
      <?php require ("footer.php");?>
    
    </footer>

</html>