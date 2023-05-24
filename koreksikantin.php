<?php
    $kodekantin=$_GET['kodekantin'];
  $kon=mysqli_connect("localhost","root","","sewakantin");
	$sql="select * from kantin where kodekantin='".$kodekantin."'";
	$q=mysqli_query($kon,$sql);
	$r=mysqli_fetch_array($q);
   ?>
   <form method="post">
    Kode kantin dikoreksi : <?php echo $r['kodekantin'];?>
	<input type="hidden" name="kodekantin" value="<?php echo $r['kodekantin'];?>">
	<input type="text" name="namakantin" value="<?php echo $r['namakantin'];?>">
	<input type="submit" name="bSimpan" value="Simpan">
   </form>
   <?php 
   if (isset($_POST['bSimpan'])) {
     $kodekantin=$_POST['kodekantin'];
	 $namakantin=$_POST['namakantin'];
	 $sql1="update kantin set namakantin='".$namakantin."' where kodekantin='".$kodekantin."'";
	 $q1=mysqli_query($kon,$sql1);
	 header('location:inputkantin.php');
   };
   ?>