<?php    
	  include "config.php";
	  
	  $id_kategori = $_POST['id_kategori'];
  
	  $email= $_POST['email'];
	  $name= $_POST['name'];
	  $mesaj= $_POST['message'];
	  $baslik= $_POST['baslik'];
	  $dosya= $_POST['dosya'];
	  $dosya1= $_POST['dosya1'];
	  $ip = $_SERVER["REMOTE_ADDR"]; 
      $tarih = date('Y-m-d H:i:s');
	  
	  
        $yeniTicketSql = "INSERT INTO iletisim (ad, id_iletisim_kategori, email, mesaj, baslik, ip, tarih, dosya1, dosya2) VALUES ('$name', '$id_kategori', '$email', '$mesaj', '$baslik','$ip', '$tarih', '$dosya', '$dosya1')";
		
		$DB->query($yeniTicketSql);
				
		header ("Location:yeniTicket.php?msg=ok");
        
?>