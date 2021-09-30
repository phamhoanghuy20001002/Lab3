<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Tính tiền điện</title>

    <style type="text/css">
        body {  

            background-color: #d24dff;

        }
        table{

          
            width: 600px;
            margin: auto;
            background: #ffca97;
        
        }
        thead{

            background: #fff14d;    

        }

        td {

            color: blue;

        }

        h3{

            font-family: verdana;

            text-align: center;

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }

    </style>

</head>



<body>



<?php 



if(isset($_POST['ten']))  



    $ten=trim($_POST['ten']); 



else $ten=null;



if(isset($_POST['chisocu'])) 



    $chisocu=trim($_POST['chisocu']); 



else $chisocu=0;

if(isset($_POST['chisomoi'])) 



    $chisomoi=trim($_POST['chisomoi']); 



else $chisomoi=0;


$gia=20000;

if(isset($_POST['tinh']))



        if (is_numeric($chisocu) && is_numeric($chisomoi) && is_numeric($gia))  



            $tong=($chisomoi-$chisocu)*$gia;



        else {



                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 



                $tong="";



            }

else $tong=0;

?>


<form align='center' action="" method="post">

<table>

    <thead>

        <th colspan="2" align="center"><h3>Thanh Toán Tiền Điện</h3></th>

    </thead>

    <tr><td>Tên chủ hộ:</td>

     <td><input type="text" name="ten" value="<?php  echo $ten;?> "/></td>

    </tr>

    <tr><td>chi số cũ:</td>

     <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/>kw</td>
    </tr>

    <tr><td>chi số mới</td>

    <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/>kw</td>
    </tr>

    <tr><td>Đơn giá</td>

    <td><input type="text" name="gia" value="<?php  echo $gia;?> "/>VND</td>
    </tr>

    

    <tr><td>Số tiền thanh toán:</td>
     <td><input type="text" name="tong" disabled="disabled" value="<?php  echo $tong;?> "/>VND</td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>