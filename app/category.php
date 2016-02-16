<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Project");
    $pros = $rs->fetchAll();
  ?>
<?php
require_once 'header.php';
?>


    <div class="content">
    <div class="container bgfff">

<div class="row ye-bor">
 
  <div class="col-md-8 mt15 plr20">
    <h3 class="tit-yellow"><?php echo $lang['news'];?>:</h3>
    <ul class="list-unstyled news">
                    
    <?php  foreach($pros as $pro)          
{?> 

    <li class="clearfix"><a href="single.php?id=<?php echo $pro['id'];?>"><?php echo $pro[$current_lang.'_title'];?><span class="pull-right"><?php echo $pro['date'];?></span></a></li>
   
         <?php
    }
?>

   </ul>

   <div class="mt15 wdall">
     <img class="pr20" src="_/images/newlo4.jpg">
     <img class="pr20" src="_/images/newlo1.jpg">
     <img class="pr20" src="_/images/newlo3.jpg">
     <img class="pr20" src="_/images/newlo2.jpg">
   </div>
    
  </div>

  <div class="col-md-4 mt15 plr20 wdall">
    <img src="_/images/news.jpg">
  </div>
   
  
</div>



</div>

    </div>


<?php
require_once 'footer.php';
?>
