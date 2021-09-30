<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai4.css">
        <title> Demo form php</title>

        <style type="text/css">
       
        table{

                      
        width: 600px;
       
        background: #ffca97;    
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
          
     
        <h2>Bài 4</h2>
        <div class="container" id="container">
                       <form action="trang2bai4.php" method="POST" name="form">
                    <h1>Login is correct, Your infomation!</h1> <br>
                    <table>
                    <tr>
                        <td>
                        <?php 
                   echo 'Họ tên ' .$hoten1;
                   ?>
                        </td>
                 
                    </tr>
                    
                    <tr >
                    <td>
                        <?php 
                   echo 'Giới tính ' .$gt1;
                   ?>
                        </td>
                    </tr>
                   
                    <tr >
                    <td>
                        <?php 
                   echo 'Địa chỉ ' .$diachi1;
                   ?>
                        </td>
                    </tr>
                   
                    <tr>
                    <td>
                        <?php 
                   echo 'Điện thoại ' .$sdt1;
                   ?>
                        </td>
                   <td >
                
                </tr>
             
                <tr>
                <td>
                        <?php 
                   echo 'Quốc tịch ' .$qt;
                   ?>
                        </td>
                </tr>
                <tr>
                <td>
                    Môn đã học
                        <?php   
                    $php= isset($_POST["monhoc1"]);
                    if($php) echo "PHP & MYSQL &nbsp;&nbsp;";
                    $c= isset($_POST["monhoc2"]); 
                    if($c) echo "C# &nbsp;&nbsp;";  
                    $xml= isset($_POST["monhoc3"]);
                    if($xml) echo "XML &nbsp;&nbsp;";   
                    $python= isset($_POST["monhoc4"]);
                    if($python) echo"Python &nbsp;&nbsp;";
                   ?>
                        </td>
                </tr>
                
                
                       <tr>
                       <td>
                        <?php 
                   echo 'Ghi chú ' .$ghichu1;
                   ?>
                        </td>
                       </tr>
                  
                      
                    </table>
                 
                </form>
           
         
        </div>
    </body>
</html>