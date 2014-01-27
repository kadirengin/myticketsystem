<!DOCTYPE html>
<?php
include "config.php";
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Yeni Ticket</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">

<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">


<!-- Javascript -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>

<script src="./js/plugins/validate/jquery.validate.js"></script>

<script src="./js/Slate.js"></script>

<script src="./js/demos/demo.validate.js"></script>


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
 	
  	
<div id="header"><!-- /.container -->

</div> <!-- /#header -->
<div id="nav">
  <div class="container"> <a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <i class="icon-reorder"></i> </a>
    <div class="nav-collapse">
      <ul class="nav">
        <li class="nav-icon"> <a href="index.php"> <i class="icon-home"></i> <span>Anasayfa</span> </a> </li>
        <li class=""> <a href="gecmisTicketlar.php"> Geçmiş Ticketlar </a> </li>
        <li class=""> <a href="yeniTicket.php"> Yeni Ticket Oluştur </a> </li>
      </ul>
    </div>
    <!-- /.nav-collapse -->
  </div>
  <!-- /.container -->
</div>
<!-- /#nav -->


<div id="content">
		
	<div class="container"><!-- /.page-title -->
		
		<div class="row">
			
			<div class="span8">
			  <div id="validation" class="widget highlight widget-form">
	      			
      			  <div class="widget-header">	      				
	      				<h3>Yeni Ticket Oluştur</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
					
						
						<form action="ticket_gonder.php" method="POST" id="contact-form"   class="form-horizontal" >
							<fieldset>
							    <div class="control-group">
							      <label class="control-label" for="name">Ad Soyad</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="name" id="name">
							      </div>
							    </div>
							    <div class="control-group">
							      <label class="control-label" for="email">Email</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="email" id="email">
							      </div>
							    </div>
								
								<div class="control-group">
					            <label class="control-label" for="id_kategori">Kategori</label>
					            <div class="controls">
					              <select id="id_kategori" name="id_kategori">
					                <?php
									$sql = "SELECT * FROM iletisim_kategori;";
									
									$kategoriler = $DB->get_results( $sql );
									?>
										<option value="">Kategori Seçiniz..</option>
										
										<?php
										foreach($kategoriler as $kategori){
										?>
											<option value="<?php echo $kategori->id_kategori ?>">
											<?php echo $kategori->ad; ?>
											</option>
										<?php
										}
										?>
					              </select>
					            </div>
					          </div>
								
							    <div class="control-group">
							      <label class="control-label" for="subject">Başlık</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="baslik" id="baslik">
							      </div>
							    </div>
							    <div class="control-group">
							      <label class="control-label" for="message">Mesajınız</label>
							      <div class="controls">
							        <textarea class="input-large" name="message" id="message" rows="3"></textarea>
							      </div>
							    </div>
							    
					          
							    
                               <div class="control-group">
							      <label class="control-label" for="message">Ekle</label>
							      <div class="controls">
							        <input name="dosya" type="file">
							      </div>
							    </div>
                                
                                <div class="control-group">
							      <label class="control-label" for="message">Ekle</label>
							      <div class="controls">
							        <input name="dosya2" type="file">
							      </div>
							    </div>
					          
							    <div class="control-group" align="center">
							      <button type="submit" class="btn btn-success btn-large"><i class="icon-plus"></i> Gönder</button>
							   </div>
							  </fieldset>
							</form>
						
					</div> <!-- /widget-content -->
						
				</div><!-- /.widget --><!-- /.widget -->
				
		    </div> <!-- /span8 -->
		    
		    
		    <div class="span4">
		    	
		    	<div id="formToc" class="widget highlight">
		    		
		    		<div class="widget-header">
		    			<h3>Bilgi</h3>		    			
		    		</div> <!-- /widget-header -->
		    		
		    		<div class="widget-content">
		    			<p>Bu form aracılıyla bize olan tüm dilek, şikayet ve teşekkürlerinizi gönderebilirsiniz.</p>
		    			
		    			<br>
		    			
		    			<p>Formu gönderdikten sonra email ile bilgilendirileceksiniz</p>
		    			
		    			
		    		</div> <!-- /widget-content -->
		    		
		    	</div> <!-- /widget -->
		    	
		    	
		    	
		    	
		    </div> <!-- /.span4 -->
		    
		    
      		 		
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



<div id="footer">	
		
	<div class="container"> &copy; Kadir Engin</div> <!-- /.container -->		
	
</div> <!-- /#footer -->





  </body>
</html>
