<!DOCTYPE html>
<?php

    include_once "config.php";
    
    //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
    $tumSorularSql = "SELECT * FROM iletisim LEFT JOIN iletisim ON (iletisim.id_iletisim = iletisim.id_iletisim) ORDER BY 'iletisim.id_iletisim_kategori' DESC";
    $tumSorular = $DB->get_results( $tumSorularSql );
?>    
<html lang="en">
<head>
<meta charset="utf-8">
<title>Kadir Engin Ticket System</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">

<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="./js/plugins/datatables/DT_bootstrap.css" rel="stylesheet">
<link href="./js/plugins/responsive-tables/responsive-tables.css" rel="stylesheet"> 

<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet"> 


<!-- Javascript -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>

<script src="./js/plugins/datatables/jquery.dataTables.js"></script>
<script src="./js/plugins/datatables/DT_bootstrap.js"></script>
<script src="./js/plugins/responsive-tables/responsive-tables.js"></script>
<script src="./js/plugins/datatables/jquery.dataTables.extend.js" type="text/javascript"></script>


<script src="./js/Slate.js"></script>

<script type="text/javascript">
    $(function () {
        $('#tblContents').dataTable({
            sDom: "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            sPaginationType: "bootstrap",
            "iDisplayLength": 50,
            "aaSorting": [[0, "asc"]],
            oLanguage: {
                "sUrl": "./js/plugins/datatables/dataTables.turkish.txt"
            }
        })
    });
</script>




</head>
<body>
 	
  	
<div id="header"><!-- /.container -->

</div> <!-- /#header -->


<div id="nav">
		
	<div class="container">
		
		<a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        	<i class="icon-reorder"></i>
      	</a>
		
		<div class="nav-collapse">
			
			<ul class="nav">
		
				<li class="nav-icon">
					<a href="index.html">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				
				<li class="">					
					<a href="gecmisTicketlar.php">
						Geçmiş Ticketlar
					</a>	
				   				
				</li>
                
                <li class="">					
					<a href="yeniTicket.php ">
						Yeni Ticket Oluştur
					</a>	
				   				
				</li>
				
			</ul>
			
		</div> <!-- /.nav-collapse -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#nav -->


<div id="content">
		
	<div class="container">

        <div class="row">

            <div class="span9">
                <div class="widget">
                    <div class="widget-header">
                        <h3>Ticketlar</h3>
                    </div>
                    <!-- /.widget-header -->
                    <div class="widget-content" id="divContents">

                        <table class="table table-bordered table-striped table-highlight" id="tblContents">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
									<th>Kategori</th>
                                    <th>Başlık</th>
                                    <th>Mesaj</th>
                                    <th>Tarih</th>
									<th>IP</th>
                                    <th style="width: 80px;"></th>
                                </tr>
                            </thead>
							

							<?php
    $sql = "SELECT * FROM iletisim";
    $mesajlar = $DB->get_results( $sql );
    
    if( count( $mesajlar ) == 0 ){
        echo 'Hiç mesaj yok';
    }else{
      
        
        foreach ($mesajlar as $mesaj) {
            echo '<tr>';
			
                echo '<td>' . $mesaj->id_iletisim . '</td>';
                echo '<td>' . $mesaj->ad . '</td>';
                echo '<td>' . $mesaj->email . '</td>';
                echo '<td>' . $mesaj->id_iletisim_kategori . '</td>';
                echo '<td>' . $mesaj->baslik . '</td>';
				echo '<td>' . $mesaj->mesaj. '</td>';
				echo '<td>' . $mesaj->tarih . '</td>';
				echo '<td>' . $mesaj->ip. '</td>';
                echo '<td><a href="iletisim_islem.php?islem=detay&id='. $mesaj->id_iletisim .'"><img src="img/silk/preview_16x16.gif" alt="Detay" height="16" width="16"></a> | '
                        . '<a onclick="return confirm( \' Mesaj silinecek! \' );" href="iletisim_islem.php?islem=sil&id='. $mesaj->id_iletisim .'"><img src="img/silk/sil_16x16.gif" alt="Sil" height="16" width="16"></a></td>';
            echo '</tr>';
        }
        echo '</table>';
        
    }
    
    ?>
                          

                    </div>
                    <!-- /.widget-content -->
                    
                </div>
            </div>
            <!-- /span9 -->

            <div class="span3">
                <div class="widget">

                    <div class="widget-header">
                        <h3>
                            <i class="icon-search"></i>
                            Kategoriler</h3>
                        <!-- /.widget-actions -->

                    </div>
                    <!-- /widget-header -->

                    <div class="widget-content" style="padding-left: 23px;">
						
                        <a href="Kategori1.html">Kategori</a>
                        
                        <br>
                        
                        <a href="Kategori2.html">Kategori 2</a>
						
                    </div>
                    <!-- /widget-content -->

                </div>
                <!-- /widget -->
            </div>

        </div>
        <!-- /row -->
    </div>
	
</div> <!-- /#content -->



<div id="footer">	
		
	<div class="container">
		
		&copy; Kadir Engin</div> <!-- /.container -->		
	
</div> <!-- /#footer -->





  </body>
</html>
