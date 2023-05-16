<?php
session_start();
if(isset($_SESSION["Username"])) {
    header("Location: beranda.php");
    die();
}	
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$Username=$_POST['Username'];
$Password=$_POST['Password'];


$query="SELECT * FROM user where Username='$Username' and Password='$Password'";
$hasil=mysqli_query($koneksi, "$query");
$kode = mysqli_fetch_array($hasil);
$cek=mysqli_num_rows($hasil);

if ($cek==1){
$_SESSION['Username']=$kode['Username'];
$_SESSION['Password']=$kode['Password'];


    if ($kode) {
		$_SESSION["Login"]=true;	
        header("Location:beranda.php");
    }    
} else { 
	?>
		<script>
		alert('Username atau Password Salah !!');
		document.location.href = 'login.php';
		</script>
	<?php 
}

?>

