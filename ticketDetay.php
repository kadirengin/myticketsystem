<!DOCTYPE html>
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



<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
					<a href="gecmisTicketlar.html">
						Geçmiş Ticketlar
					</a>	
				   				
				</li>
                
                <li class="">					
					<a href="yeniTicket.html">
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

          <div class="span12">
                <div class="widget">
                   
                    <!-- /.widget-header -->
                    <div class="widget-content" id="divContents">

                        <div class="pull-left">
                            <ul class="client_details">
                                <li>Kullanıcı : Özgür Maden</li>
                                <li>Sorun Kategori : Evrim</li>
                                <li><span class="label label-info">Durum : Bekliyor</span></li>
                            </ul>
                        </div>

                        <div class="pull-right">
                            <ul class="client_details">
                                <li>Açılış : 03.01.2014 09:12:07</li>
                                <li>Kapanış : </li>

                            </ul>
                        </div>

                        <div class="clear"></div>

                        <div class="alert alert-error" style="margin-top: 20px;">
                            <h4 class="alert-heading">Özgür Maden</h4>
                            Evrimi kapatmak istediğimizde bilgisayarı kapatmamız gerekiyor.. Görev yöneticisi yok..
                        </div>

                            <div class="alert alert-success">
                                <h4 class="alert-heading">Kadir Engin - 03.01.2014 12:08:01</h4>
                                Ctrl Alt Del domain sisteminde aktif değil. Programın ynaqıt vermesi beklenecek cevap vermesse restart etmemiz gerekiyor.
                            </div>
                            <div class="alert alert-block">
                                <h4 class="alert-heading">Özgür Maden - 03.01.2014 12:56:06</h4>
                                Biz her defasında restart mı etmemiz gerekiyor?? Başka bir çözüm yok mu?
                            </div>

                    </div>
                    <!-- /.widget-content -->

                </div>

        </div>
            <!-- /span12 -->

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
