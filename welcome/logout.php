<?php
session_start();

if(isset($_SESSION['uname'])){
    session_destroy();
    echo "<script>location.href='https://hariketsheth-project1.42web.io/index.php'</script>";
}
else {
  echo "<script>location.href='https://hariketsheth-project1.42web.io/index.php'</script>";  
}
?>
