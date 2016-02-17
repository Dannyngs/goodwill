<?php
require_once 'init.php';
 
?>
<?php
require_once 'header.php';
?>
   <div class="content">
    <div class="container bgfff">

 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   

    <div class="item active">
      <img src="_/images/banner1.jpg" alt="...">
    </div>

     <div class="item">
      <img src="_/images/banner2.jpg" alt="...">
    </div>

     
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<div class="row">
  <div class="col-md-12 mt15 plr20">
    <h3 class="tit-yellow"><?php echo $lang['intro'];?>:</h3>
    <p><?php echo $system[$current_lang.'_description'];?></p>
  </div>

  <div class="col-md-12 mt15 plr20">
   
    <div class="row">
      <div class="col-md-6 wdall">
       <img src="_/images/ab1.jpg"/>
      </div>

      <div class="col-md-3 wdall fs14">
        <img src="_/images/ab2.jpg"/>
          <?php echo $system[$current_lang.'_special_offer'];?>
<!--
        <p>凡直接在網上挑選或首次到本
公司揀選女傭時即時作出決定
者均可享有以下優惠：</p>
  <p>菲傭：菲律賓保險費半價<br/>
印傭：服務費減三佰元<br/>
*以放一次帶為原則<br/>
*不可與其他優惠同時使用</p>
-->
      </div>
      
      <div class="col-md-3 wdall">
        <img src="_/images/ab3.jpg"/>
        <a class="buts" href="page.php?id=2"><img src="_/images/but1.jpg"></a>
      </div>
     

    </div>
  </div>

  <div class="col-md-12 mt15 plr20 ye-bor">
    <p><img class="pr20" src="_/images/ab4.jpg"> <?php echo $lang['tag1'];?></p>
  <p><img img class="pr20" src="_/images/ab5.jpg"> <?php echo $lang['tag2'];?></p>
    
  </div>
   
  
</div>



</div>

    </div>
<?php
require_once 'footer.php';
?>

