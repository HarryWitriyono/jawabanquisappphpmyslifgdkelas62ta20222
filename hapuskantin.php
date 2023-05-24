<?php
   $kodekantin=$_GET['kodekantin'];
   $sql="delete from kantin where kodekantin='".$kodekantin."'";
   $kon=mysqli_connect("localhost","root","","sewakantin");
   $q=mysqli_query($kon,$sql);
   header("location:inputkantin.php");
   ?>