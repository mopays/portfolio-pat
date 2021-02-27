<?php
    require_once('conect.php'); 
    
    if (isset($_POST['btn-submit'])) {
            $secretkey ='6LeAzhgaAAAAANeHTJ9mYrMUHS52wvIaJ5aMG9QT';
            $response = $_POST['g-recaptcha-response'];
            $remoteip =$_SERVER['REMOTE_ADDR'];

            $url ="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$remoteip";

            $resp =json_decode(file_get_contents($url));

           
            if ($resp->success){
                echo '<pre>',print_r($_POST),'</pre>';
                $sql="  INSERT INTO `contract` (`name`, `phone`, `email`, `detail`, `created_at`) 
                        VALUES                 ('".$_POST['name']."', 
                                                '".$_POST['phone']."',
                                                '".$_POST['email']."', 
                                                '".$_POST['message']."',
                                                '".date("Y-m-d")."')";
                    $result = $conn->query($sql) or die($conn->error);
                    if ($result) {
                         SentToLine();
                    }
            }else{
                echo '<script> alert("Verification Recaptcha Failed!!!")</script>'; 
                header('Refresh:0;  url=../contract.php');
            }
    }else{
        header('Refresh:0;  url=../index.php');
    }
            echo '<pre>',print_r($_POST),'</pre>';

        
    
    function SentToLine(){
       $text ="มีผู้ติดต่อมาจากเว็บ  \n";
       $text .="ชื่อ:".$_POST['name']."\n";
       $text .= "เบอร์โทร".$_POST['phone']."\n";
       $text .= "อีเมลล์".$_POST['email']."\n";
       $text .= "ข้อความ".$_POST['message'];

      
       notify_message($text);

    }
    function notify_message($message){
        $tokenline = '4LGltziqjaWL4IThXHoGvVkl0HCu9VQeJV9Ix3qeoYy';
        $chOne = curl_init();
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $chOne, CURLOPT_POST, 1);
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, 'message='.$message);
        curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$tokenline.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $resultline = curl_exec( $chOne );
        curl_close($chOne);
     
        
        // $context = stream_context_create($headerOptions);
        // $result = file_get_contents(LINE_API,FALSE,$context);
        $resp = json_decode($resultline);
        if ($resp->status == 200) {
            echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>'; 
            header('Refresh:0; url=../index.php');
        } else {
           echo '<script> alert("ส่งข้อมูลไม่สำเร็จ โปรดติดต่อ.....")</script>'; 
           header('Refresh:0; url=../index.php');
    }
}
  

 ?>