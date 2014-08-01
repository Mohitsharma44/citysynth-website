<?php
		echo"<script>$('.flexslider').flexslider();</script>";
		$count=$_GET['count'];
		$count=($count-1)/2+1;
		$dir    = 'images/'.$count;
		$files2 = scandir($dir);
		echo"<div style='border: 4px solid #fff;' class='flexslider'><ul class='slides'>";
		for ($x=2;$x<count($files2);$x++){
		echo "<li><img height='100%' width='100%' src=$dir/$files2[$x]></li>";
		}
		echo"</ul></div>"
?>