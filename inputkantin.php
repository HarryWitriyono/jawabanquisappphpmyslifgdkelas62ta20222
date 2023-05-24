<form name="frmcari" method="post" action="hasilcarikantin.php">
    <input type="text" name="kCari" placeholder="Ketik kode kantin yang dicari">
	<input type="submit" name="bCari" value="Cari">
   </form>
   <form name="frminput" method="post">
    <input type="text" name="namakantin" placeholder="Ketik nama kantin">
	<input type="submit" name="bSimpan" value="Simpan">
   </form>
   <?php 
    if (isset($_POST['bSimpan'])) {
	  $namakantin=$_POST['namakantin'];
	  $kon=mysqli_connect("localhost","root","","sewakantin");
	  $sql="insert into kantin (namakantin) values ('".$namakantin."')";
	  $q=mysqli_query($kon,$sql);
	}
   ?>