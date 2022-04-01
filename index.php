<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Icon Chat</title>    
    <link rel="stylesheet" href="whatsapp.css"> 
</head>
<body>

<!--============================ WHATSAPP ============================-->

<?php
        $android = stripos($_SERVER['HTTP_USER_AGENT'], "android");
        $iphone = stripos($_SERVER['HTTP_USER_AGENT'], "iphone");
        $ipad = stripos($_SERVER['HTTP_USER_AGENT'], "ipad");
        $blackberry = stripos($_SERVER['HTTP_USER_AGENT'], "blackberry");
        $mini = stripos($_SERVER['HTTP_USER_AGENT'], "mini");
        $palm = stripos($_SERVER['HTTP_USER_AGENT'], "palm");

        $whatsappNumber = '0123456789';        //Your WhatsApp Number
        $whatsappLink = '';
            if($android !== false || $ipad !== false || $iphone !== false|| $blackberry !== false || $mini !== false || $palm !== false) {//For mobile
                $whatsappLink = '<div class="whatsapp" id="blink">
                <a href="https://api.whatsapp.com/send?phone='.$whatsappNumber.'"><img src="whatsapp.svg"/>'.$whatsappLink.'</a> </div>';
            } else {//For desktop
                $whatsappLink = '<div class="whatsapp" id="blink">
                <a href="https://web.whatsapp.com/send?phone='.$whatsappNumber.'"><img src="whatsapp.svg"/>'.$whatsappLink.'</a> </div>';
            }

        echo "$whatsappLink";

?>


<!--============================ WHATSAPP END ============================-->
    
</body>
<script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 700);
    </script>
</html>

