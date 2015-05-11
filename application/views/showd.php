<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <meta name="description" content="">
    <meta name="author" content="">
    <title>Tugas FOSS</title>
    <link href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"; ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"; ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"; ?>css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()."assets/"; ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()."assets/"; ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()."assets/"; ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animation animated-item-1"href=""><img src="<?php echo base_url()."assets/"; ?>images/logo.png" alt="logo">EDIT DATA</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('indekk');?>">HOME</a></li>
                    <li><a href="<?php echo base_url('indekk/input');?>">INPUT DATA</a></li>
			
                    
                   
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
		
			
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url()."assets/"; ?>images/slider/baru.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">

<?php 
					foreach ($data_siswa as $data){}
					
					
					?>								

															
									
<!-- BEGIN REGISTRATION FORM -->
	<table class="animation animated-item-1 table table-hover" style="width:60%;"> <font color='black'>
									
								<h2 >CETAK DETAIL</h2>									
									<tbody>
									
									<tr> 
                                        <td style="width:30%;">NIM</td>
                                        <td><?php echo $data->nim;?></td>
                                    </tr> 
									<tr>
                                        <td style="width:30%;">NAMA LENGKAP</td>
                                        <td><?php echo $data->nama;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">KOTA ASAL</td>
                                        <td><?php echo $data->kota;?></td>
                                    </tr>	
									<tr>
                                        <td style="width:30%;">Jenis Kelamin</td>
                                        <td><?php echo $data->jenis_kelamin;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">Tanggal Lahir</td>
                                        <td><?php echo $data->tanggal." ".$data->bulan." ".$data->tahun;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">SD</td>
                                        <td><?php echo $data->sd;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">SMP</td>
                                        <td><?php echo $data->smp;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">SMA</td>
                                        <td><?php echo $data->sma;?></td>
                                    </tr>
									<tr>
                                        <td style="width:30%;">Universitas</td>
                                        <td><?php echo $data->universitas;?></td>
                                    </tr>
									</tbody>														
						
									
									</table>	
		<!-- END REGISTRATION FORM -->									
									
									
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
				
				
                
                            
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        
    </section><!--/#main-slider-->

    


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Kelompok 2 PTIK A</a>
                </div>
               
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url()."assets/"; ?>js/jquery.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
</body>
</html>
