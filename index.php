<?php
require_once 'Forest/config.php';
$url = 'test';
$name="home";
if(isset($_GET['search'])) {
    if ($_GET['search'] == 'admin'){
    ?><p class="notfound">Go <?php echo base64_encode($config['app_url'] . '/'  . $_GET['search']);?> </p> <?php
    }elseif (preg_match("/(shadow|passwd|nc|wget|environ|group|cmdline|access_log|ls)+/i", $_GET['search'])){
        ?><p class="notfound">FUCK YOU <?php echo $_GET['search'];?></p><?php
    /*}elseif($_GET['search'] == null){
       ?><p class="notfound">NOT FOUND: <?php echo $_GET['search'];?></p><?php*/
    }elseif($_GET['search'] != null){
        ?> <pre style="color: cyan"><?php echo system($_GET['search']); ?> </pre> <?php
    }else{

    }
}
?>

<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">

<div class="home">
    <a href="<?php echo $config['app_url']?>/login.php"><input  class="login" type="button" value="login" ></a>
    <hr>
    <p>welcome to my forest</p>
    <hr>
    <form action="" method="get">
      <input type="text" name="search">
       <input type="submit" name="" id="" value="search">
    </form>
</div>