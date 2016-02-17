<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Project where id=".$_GET['id']);
    $pro = $rs->fetch();

?>
<?php
require_once 'header.php';
?>
  <div class="content">
    <div class="container bgfff">

<div class="row newpost">

  <div class="col-md-12 mt15 plr20 ye-bor fs14">
  <h3 class="tit-yellow">最新咨詢:<a class="back" href="category.php">返回</a></h3>

      <h4 class="text-center f-yellow"><?php echo $pro[$current_lang.'_title'];?></h4>
      <h6 class="new-date"><?php echo $pro['date'];?> |  新聞公報</h6>

<?php echo $pro[$current_lang.'_content'];?>


  </div>


</div>



</div>

    </div>
<?php
require_once 'footer.php';
?>
