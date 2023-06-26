<?php
if (isset($_GET['name'])) {
$Name=$_GET['name'];
}
else {
    header("Location:index.php");
}
?>
<h1> Welcome <?php echo $Name;?></h1>
<h2> You code is working sucessfully </h2>
<p> For such interesting project follow me on github <a href="https://github.com/crizanpokhrel"> Chick here </a></p>
