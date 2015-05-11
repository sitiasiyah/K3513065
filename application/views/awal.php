
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
                <a class="navbar-brand" href=""><img src="<?php echo base_url()."assets/"; ?>images/logo.png" alt="logo">CETAK DATA</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="<?php echo base_url('indekk');?>">HOME</a></li>
                    <li class="active"><a href="<?php echo base_url('indekk/input');?>">INPUT DATA</a></li>
					
                   
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
							
							
							
	 <div class="container">						
        
<table font color="black" style="width:80%;" class="animation animated-item-1">
									
									<thead>
								<tr>
									<th style="width:50%;">		
		
		<!-- BEGIN REGISTRATION FORM -->
		<form class="form-vertical register-form" action="<?php echo base_url('indekk/input'); ?>" method="post">
			<h3 >Input Data</h3>
			<p>Input Data Pribadi Anda dengan Benar:</p>
			<div class="control-group">
			
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">NIM</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="masukkan nim" name="nim"/>
					</div>
				</div>
			</div>
				<label class="control-label visible-ie8 visible-ie9">Nama Lengkap</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="masukkan nama lengkap" name="nama"/>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Alamat</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-location-arrow"></i>
						<textarea class="m-wrap placeholder-no-fix" style="width:40%" placeholder="masukkan alamat" name="kota"></textarea>
					</div>
				</div>
			</div>
			
			<div class="control-group">
									<label class="control-label">Jenis Kelamin</label>
									<div class="controls">
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="L">Laki-Laki
										</label>
										<label class="radio">
											<input type="radio" name="jenis_kelamin" value="P">Perempuan
										</label>
									</div>
								</div>
					<label class="control-label visible-ie8 visible-ie9">Tanggal Lahir:</label>
					<table><tr><th>		
						<div class="control-group">
									<label class="control-label" for="date01">Tgl</label>
									<div class="controls">
										<select name="tanggal" id="tanggal" class="span12 select2">
						
						<option value=""></option>
						<?PHP
						$i=1;
						while($i<=31)
						{
						echo "<option value=".$i.">" .$i."</option>";
						$i++;
						}
						?>
						</div>
								</div>
								
							</th><th>	
					<div class="control-group">
									<label class="control-label" for="date02">  Bulan</label>
									<div class="controls">
						<select name="bulan" id="bulan" class="span12 select2">
						
						<option value=""></option>
						<option value="Januari">Januari</option>
						<option value="Februari">Februari</option>
						<option value="Maret">Maret</option>
						<option value="April">April</option>
						<option value="Mei">Mei</option>
						<option value="Juni">Juni</option>
						<option value="Juli">Juli</option>
						<option value="Agustus">Agustus</option>
						<option value="September">September</option>
						<option value="Oktober">Oktober</option>
						<option value="November">November</option>
						<option value="Desember">Desember</option>
										
							
							
									
						</div>
								</div>
					</th><th>
					<div class="control-group">
									<label class="control-label" for="date03"> Tahun Lahir</label>
									<div class="controls">
										<select name="tahun" id="tahun" class="span12 select2">
						
						<option value=""></option>
						<?PHP
						$i=1960;
						while($i<=2015)
						{
						echo "<option value=".$i.">" .$i."</option>";
						$i++;
						}
						?>
						</div>
								</div>
					</th
					></tr></table>
								
		</th>
									<th>
								
			<p>Riwayat Pendidikan:</p>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">SD/MI</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="SD/MI" name="sd"/>
					</div>
				</div>
			</div>
			
			
			
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">SMP/Mts</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="SMP/Mts" name="smp"/>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">SMA/SMK/MA</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="SMA/SMK/MA" name="sma"/>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">University</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="University" name="universitas"/>
					</div>
				</div>
			</div>
			
			
			<div class="form-actions">
				<input type="submit" class="btn btn-primary" name="tombol" id="tombol" value="Simpan">
									<a href="<?php echo base_url('indekk');?>" class="btn btn-danger">Kembali</a>      
			</div>
			</th>
								</tr>
								
				</table>
									
									</thead>
		</form>
		<!-- END REGISTRATION FORM -->
                        </div> </div>
                                  
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
                    &copy; 2015 Kelomok 2 PTIK A</a>
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
