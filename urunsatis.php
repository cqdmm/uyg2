<form action="urunsatis.php" method="POST">
<table border="1" align="center">
<th>Urun Satis</th>
<tr>
	
	<td>
		Urun Adi:
		<?php
		echo "<select name='satis'>";
			$dosya=fopen("urun.txt","r");
			while (!feof($dosya))
			{
			echo fgetc($dosya);	
			}
		echo"</select>";	
		?>
	</td>
</tr>
<tr>
	<td align="center"><input type="submit" name="sat" value="Sat"></td>
</tr>
<tr>
	<td align="center">
		<a href='index.php'>anasayfa don</a>
	</td>
</tr>
</table>
</form>
<?php
	if (!file_exists("satis.txt"))
	{
		fopen("satis.txt","w");
	}
	if ($_POST["sat"])
	{
		$dosya=fopen("satis.txt","a");
		$yazilacak=$_POST["satis"]."-".date("d/m/y")."\n";
		fputs($dosya,$yazilacak);
	}
?>
