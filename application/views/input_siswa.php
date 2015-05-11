<h2>input data</h2>
<?php echo form_open('siswa/input')?>
Nama	: <?php echo form_input('nama')?> </br></br>
Alamat	: <?php echo form_input('alamat')?> </br></br>
Jenis Kelamin :
Laki-laki<?php echo form_radio('jenis_kelamin','L')?> 
Perempuan<?php echo form_radio('jenis_kelamin','P')?></br> </br>
Tanggal Lahir(yyyy-mm-dd)	: <?php echo form_input('tanggal_lahir')?> </br></br>
<?php echo form_submit('tombol','Input!')?> </br>
<?php echo form_close()?>

<?php
if(!$tombol){}
else {
	echo "nama :$nama</br>";
	echo "alamat :$alamat</br>";
	echo "jenis kelamin :$jenis_kelamin</br>";
	echo "tanggal lahir :$tanggal_lahir</br>";
}
?>