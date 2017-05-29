<html>
<head><title>Volume Balok</title>
<style type="text/css">
body
background:#cccccc;
}
#header{
	color:white;
	padding:1px;
	margin-bottom:30px;margin-right;
	300px;margin-left:300px;
	background:=webkit-gradient<linear,right,top,left center,color-stop<0,#cccccc,color-stop(0.5,black),color-stop(1,#cccccc));
}
#zackode,#P,#L,#T,#tombol{
	color:white;
	text-algn:centerl
	background:-webkit-gradient(linear,right,top,right bottom,from(gray),to(black));
	</style>
	</head>
	<body>
	<center>
	<div id="header"><h1>Volume Balok</h1></div>
	<from action="Latihan1.php" method="GET">
	<tr>
	<td colspan="2"
	id="SONIA VARIAN VALMAI"><h2>SONIA VARIAN VALMAI</h2></td>
	</tr>
	<tr>
	<td id="p">Panjang Balok</td>
	<td><input type="text"name="p"></td>
	</tr>
	<tr>
	<td id="1">Lebar Balok</td>
	<td><input type="text"name="L"></td>
	</tr>
	<tr>
	<td id="T">Tinggi Balok</td>
	<td><input type="text"name="T"></td>
	</tr>
	<tr>
	<td clospan="2"id="tombol"><input type="submit"value="submit"><input type="reset"value="reset"></td>
	</tr>
	</table>
	</form>
	<?php
	if(isset($_get["P"])&&isset($_get["L"])&&isset($_get["T"]))
	{
		$P=$_GET["P"];
		$L=$_GET["L"];
		$T=$_GET["T"];
		$V=$P*$L*$T;
		echo"Volume balok adalah #V";
	}
	else
	{
		echo"Kamu belum isi data";
	}
	?>
	</center>
	</body>
	</html>