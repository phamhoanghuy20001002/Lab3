<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<body>

<style type="text/css">
table{

          
width: 600px;
margin: auto;
background: #ffca97;

}
</style>

    <?php

if(isset($_POST['so1'])) 
    $so1=trim($_POST['so1']); 

else $so1=0;


if(isset($_POST['so2'])) 

    $so2=trim($_POST['so2']); 

else $so2=0;



        ?>

<form align='center' action="trang2bai3.php" method="post">

<table>

    <thead>

        <th colspan="2" align="center"><h3>Phép Tính trên hai số</h3></th>

    </thead>

    <tr><td>Chọn phép tính:</td>
    <td><input type="radio" name ="pheptinh" value="cộng">Cộng
    <input type="radio" name ="pheptinh" value="trừ">trừ
    <input type="radio" name ="pheptinh" value="nhân">nhân
    <input type="radio" name ="pheptinh" value="chia">chia
    </td>

    </tr>

    <tr><td>Số thứ nhất:</td>

     <td><input type="text" name="so1" value="<?php  echo $so1;?> "/></td>
    </tr>

    <tr><td>số thứ hai</td>

    <td><input type="text" name="so2" value="<?php  echo $so2;?> "/></td>
    </tr>

    

   

   
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tinh" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>