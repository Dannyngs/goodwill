<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=".$_GET['id']);
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>
   <div class="content">
    <div class="container bgfff">

       <?php echo $page["content"];?>

    </div>

    </div>
<?php
require_once 'footer.php';
?>

