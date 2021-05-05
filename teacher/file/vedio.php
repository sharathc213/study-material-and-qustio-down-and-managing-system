<?php

$vedio=$_GET['vedio'];
?>
<style>video {
  max-width: 100vh;
  max-height: 100vh;
}</style>
<video controls>
  <source src="./<?php echo $vedio; ?>" type="video/ogg">
  <source src="./<?php echo $vedio; ?>" type="video/mp4">
  
</video>