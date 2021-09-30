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

    $so1=$_POST['so1']; 
    $so2=$_POST['so2'];
    $pt=$_POST['pheptinh'];
   if(isset($_POST['tinh']))
  
        {
            if (is_numeric($so1) && is_numeric($so2) ) 
             {
                
               
                if($pt=="cộng")
                {
                    $ketqua=$so1+$so2;
                }
                else  if($pt=="trừ")
                {
                    $ketqua=$so1-$so2;
                }
                else  if($pt=="nhân")
                {
                    $ketqua=$so1*$so2;
                }
                else  if($pt=="chia")
                {
                    $ketqua=$so1/$so2;
                }
             }

         else 
             {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                 $ketqua="";
             }
        }

     else $ketqua=0;
        ?>

<form align='center' action="trang2bai3.php" method="post">

<table>

    <thead>

        <th colspan="2" align="center"><h3>Phép Tính trên hai số</h3></th>

    </thead>

    <tr><td>Chọn phép tính:
    <?php echo " ".$pt ?>
    </td>
  

    </tr>

    <tr><td>Số thứ nhất:</td>

     <td><input type="text" name="so1" value="<?php  echo $so1;?> "/></td>
    </tr>

    <tr><td>số thứ hai</td>

    <td><input type="text" name="so2" value="<?php  echo $so2;?> "/></td>
    </tr>

    

    

    <tr><td>kết quả:</td>
     <td><input type="text" name="ketqua" disabled="disabled" value="<?php  echo $ketqua;?> "/></td>
    </tr>
    <tr>
     <td><a href="javascript:window.history.back(-1);">Tro ve trang truoc</a></td>
    </tr>
</table>
</form>
</body>
</html>