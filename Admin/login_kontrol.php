<?php

    include_once "config.php";
    
    
    $email = $_POST['email'];
    $sifre = $_POST['password'];
    
    //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
    $kullaniciSql = "SELECT * FROM kullanici";
    $kullanici = $DB->get_results( $kullaniciSql );
?>

<?php
   //girisin yapılıp yapışmadığını kontrol ediyor. 
   foreach($kullanici as $admin) {
        if($admin->email == $email && $admin->password == $sifre) {
            header('Location: gecmisTicketlar.php');
            exit;
        } else {
            header('Location: login.php');
            exit;
        }
    }
?>
</body>
</html>