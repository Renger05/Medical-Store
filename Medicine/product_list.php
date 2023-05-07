<?php
require ("connection.php");

session_start();

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Medicine List
    
</h2>

    
<?php require ("header.php");?>




<input type="text" style="margin-top:100px" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">



<a href="logout.php">Logout</a></br></br></br>
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Quantity</th>
    <th style="width:40%;">Price</th>
    <th style="width:40%;">Image</th>
  </tr>
  <tr>
    <td>Calpol 650</td>
    <td>15</td>
    <td>120</td>
    <td>
        <img src="MedicineImage/1668697127.paracitamol.jpeg" width="100px" height="100px">
    </td>
  </tr>
  <tr>
    <td>Asprin</td>
    <td>50</td>
    <td>100</td>
    <td>
        <img src="MedicineImage/1683476918.aspirin.jpg" width="100px" height="100px">
    </td>
  </tr>
  <tr>
    <td>Amoxicillin</td>
    <td>20</td>
    <td>140</td>
    <td>
        <img src="MedicineImage/1683477011.amoxicillin.jpg" width="100px" height="100px">
    </td>
  </tr>
  <tr>
    <td>Atenolol</td>
    <td>100</td>
    <td>60</td>
    <td>
        <img src="MedicineImage/1683477231.Atenolol.jpg" width="100px" height="100px">
    </td>
  </tr>
  <tr>
    <td>Benzydamine</td>
    <td>10</td>
    <td>150</td>
    <td>
        <img src="MedicineImage/1683477293.Benzydamine.jpg" width="100px" height="100px">
    </td>
  </tr>
  <tr>
    <td>Cetirizine</td>
    <td>55</td>
    <td>20</td>
    <td>
        <img src="MedicineImage/1683477401.Cetirizine.jpg" width="100px" height="100px">
    </td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
