<?php
require_once('menu.php');
?>

<form action="" method="POST">
	<input type="text" name='panjang' placeholder='Panjang'/> <br/>
	<input type="text" name='lebar' placeholder='Lebar'/> <br/>
	<input type="text" name='tinggi' placeholder='Tinggi'/><br>
	<input type="submit" name='submit' value='Hitung'/>
</form>
<?php
if(isset($_POST['submit'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$tinggi = $_POST['tinggi'];
	
	$hasil = $panjang + $lebar + $tinggi;
	echo $hasil;
}
?>


<?php
//require_once('footer.php'); 
?>