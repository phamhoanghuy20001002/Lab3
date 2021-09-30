<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Nhập thông tin</title>

    <style type="text/css">
       
        table{

                      
        width: 600px;
        margin: auto;
        background: #ffca97;    
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
 if(isset( $_POST['tinh']) ){

     
    $hoten1 = $_POST['ten'];
    $diachi1 = $_POST['diachi'];
    $sdt1 = $_POST['sdt'];
    $gt1 = $_POST['sex'];
    $qt = $_POST['qt'];
    $ghichu1 = $_POST['gc'];
    
   
}
?>




<form align='center' action="trang2bai4.php" method="post">

<table>

    <thead>

        <th colspan="2" align="center"><h3>Nhập thông tin cá nhân</h3></th>

    </thead>

    <tr><td>Họ Tên:</td>

     <td><input type="text" name="ten" value=""/></td>

    </tr>

    <tr><td>Địa chỉ:</td>

     <td><input type="text" name="diachi" /></td>
    </tr>
    <tr><td>Số điện thoại:</td>
     <td><input type="text" name="sdt"  /></td>
    </tr>
    <tr><td>Số điện thoại:</td>
     <td><input type="radio" name ="sex" value="nam">nam
    <input type="radio" name ="sex" value="nu">nữ</td>
    </tr>

    <tr><td>Các môn để học</td>
    <td>
        <input type="checkbox" name="monhoc1" value="php">PHP&MySQL
        <input type="checkbox" name="monhoc2" value="c">C#
        <input type="checkbox" name="monhoc3" value="XML">XML
        <input type="checkbox" name="monhoc4" value="python">python
    </td>

    </tr>

   

    </tr>

    <tr>
        <td>Quốc tịch</td>
     <td ><select name="qt">
        <option value="VN" > Việt Nam </option>
        <option value="jb" > nhật bản </option>
        <option value="cn" > trung quốc </option>    
    </select></td>
    </tr>

    <tr><td>Ghi chú</td>
    <td>
    <textarea id="gc" name="gc" rows="4" cols="50">
        
        </textarea>
    </td>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="gửi" name="tinh" /></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="reset" value="Hủy" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>