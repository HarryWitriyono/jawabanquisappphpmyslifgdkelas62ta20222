<?php 
    $kodekantin=$_POST['kCari'];
    $kon=mysqli_connect("localhost","root","","sewakantin");
   $sql="select * from kantin where kodekantin like '%".$kodekantin."%'";
   $q=mysqli_query($kon,$sql);
   $r=mysqli_fetch_array($q);
   ?>
   <table>
    <thead>
	 <tr>
	  <th>Kode Kantin</th>
	  <th>Nama Kantin</th>
	  <th>Aksi Rekord</th>
	 </tr>
	</thead>
	<tbody> <?php do { ?>
	 <tr>
	  <td><?php echo $r['kodekantin'];?></td>
	  <td><?php echo $r['namakantin'];?></td>
	  <td>
	   <a href="koreksikantin.php?kodekantin=<?php echo $r['kodekantin'];?>">Koreksi</a>
	   <a href="hapuskantin.php?kodekantin=<?php echo $r['kodekantin'];?>" onclick="return confirm('Apakah yakin dihapus ?');">Hapus</a>
	  </td>
	 </tr> <?php } while($r=mysqli_fetch_array($q)); ?>
	</tbody>
   </table>	