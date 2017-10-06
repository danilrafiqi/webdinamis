<?php
require_once('menu.php');
?>

<form action="" method="POST">
	<input type="text" name='sisi' placeholder='Panjang Sisi'/> <br/>
	<input type="submit" name='submit' value='Hitung'/>
</form>
<?php
if(isset($_POST['submit'])){
	$sisi = $_POST['tinggi'];
	
	$hasil = $sisi*$sisi*$sisi;
	echo $hasil;
}
?>


<?php
//require_once('footer.php'); 
?>