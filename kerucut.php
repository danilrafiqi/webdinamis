<?php
require_once('menu.php');
?>

<form action="" method="POST">
	<input type="text" name='luas' placeholder='Luas Alas'/> <br/>
	<input type="text" name='tinggi' placeholder='Tinggi'/><br>
	<input type="submit" name='submit' value='Hitung'/>
</form>
<?php
if(isset($_POST['submit'])){
	$luas = $_POST['luas'];
	$tinggi = $_POST['tinggi'];
	
	$hasil = (1/3) * $luas * $tinggi;
	echo $hasil;
}
?>

<?php
//require_once('footer.php'); 
?>