
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
                <a class="navbar-brand" href=""><img src="<?php echo base_url()."assets/"; ?>images/logo.png" alt="logo">HOME</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url('indekk');?>">HOME</a></li>
                    <li><a href="<?php echo base_url('indekk/input');?>">INPUT DATA</a></li>
					
					
                    
                   
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
		
			
            <div class="carousel-inner"><center>
                <div class="item active" style="background-image: url(<?php echo base_url()."assets/"; ?>images/slider/baru.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"> Riwayat Pendidikan</h2>
									
									<table class="animation animated-item-1 table table-hover" style="width:120%;"><center> <font color='black'>
									
									<thead>
								<tr>
									<th>No.</th>
									<th>NIM</th>
									<th style="width:20%;">NAMA</th>
									<th style="width:20%;">Alamat</th>
									<th>Jenis Kelamin</th>
									<th style="width:15%;">Tangal Lahir</th>
									<th>SD</th>
									<th>SMP</th>
									<th>SMA</th>
									<th>UNIVERSITAS</th>
									<th >Action</th>
								</tr>
							</thead>   
									<tbody>
								<?php
								$no = 1;
								foreach ($hasil as $data) {
								?>
								<tr>
									<td style="width:5%"><?php echo $no++ ;?></td>
									<td><?php echo $data->nim;?></td>
									<td><?php echo $data->nama;?></td>
									<td><?php echo $data->kota;?></td>
									<td style="width:12%"><?php echo $data->jenis_kelamin;?></td>
									<td><?php echo $data->tanggal." ".$data->bulan." ".$data->tahun;?></td>
									<td style="width:12%"><?php echo $data->sd;?></td>
									<td style="width:12%"><?php echo $data->smp;?></td>
									<td style="width:12%"><?php echo $data->sma;?></td>
									<td style="width:12%"><?php echo $data->universitas;?></td>
									
									<td style="width:60%">
										<a  class="btn btn-success"href="<?php echo base_url('indekk/edit_data/'.$data->no); ?>">EDIT</a>
										<a class="btn btn-danger"href="<?php echo base_url('indekk/delete/'.$data->no); ?>"><i class="halflings-icon white trash"></i>Hapus</a>
										<a class="btn btn-warning"href="<?php echo base_url('indekk/detail/'.$data->no); ?>"><i class="halflings-icon white trash"></i>detail</a>
										
									</td>
								</tr>
								<?php
								}
								?>
									
									</tbody>					
									</table>
									
                            </div>
                        </div>
                                  
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
