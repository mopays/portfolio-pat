<?php
       error_reporting(E_ALL);
       //error_reporting(0);//ปิดerror

       //เชื่อมต่อDatabase
       $conn = new mysqli('localhost','root','','contract');
       
       $conn->set_charset('utf8');
       if ($conn->connect_errno){
              echo"connect Error :".$conn->connect_error;
              exit();
       }
    //ตั้งค่าTimezone
    date_default_timezone_set('Asia/Bangkok');


       // ตัวหนังสือ  =     echo $conn->connect_error;
       // ตัวเลข    =     echo $conn->connect_errno;

?>