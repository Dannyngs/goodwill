<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Service");
    $services = $rs->fetchAll();
?>

<?php
require_once 'header.php';
?>
   
 <div class="content">
    <div class="container bgfff">

     <?php include_once "banner.php" ;?>


<div class="row">
  <div class="col-md-12 mt15 plr20">
    <h3 class="tit-yellow"><?php echo $lang['intro'];?>:</h3>
    <p><?php echo $system[$current_lang.'_description'];?></p>
  </div>

  <div class="col-md-12 mt15 plr20">
    <h3 class="tit-yellow"><?php echo $lang['server'];?>:</h3>
      
    <div class="row">
         <?php  
        $index=0;
        foreach($services as $ser)          
{
        
        if($index==0||$index==4)echo "<div class='col-md-6'>"; 
        ?> 
        
        <p>
        <b class="icon-b">
          <span class="glyphicon <?php echo $ser['icon'];?>" aria-hidden="true"></span>
        </b>
        <?php echo $ser[$current_lang.'_title'];?>
      </p>
        
        
        <?php

if($index==3||$index==7)echo "</div >"; 
    $index++;
} ?>
<!--
      <div class="col-md-6">
      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
        </b>
         本港領事館合約費及文件程序費 
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
        </b>
         有關國家政府之文件手續費及程序費 
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
        </b>
         香港入境簽証費 
      </p>

       <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
        </b>
         文件速遞費, 傳真費 
      </p>

      </div>
        
      <div class="col-md-6">

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
        </b>
         女傭來港機票, 離境稅及機場稅
      </p>

          <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
        </b>
         機場接送女傭至本公司之交通費
      </p>

        <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </b>
         家政訓練課程
      </p>

        <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
        </b>
         代女傭辦理領事館報到手續及代辦領取香港身份証
      </p>

      </div>
-->
    </div>
  </div>

  <div class="col-md-12 mt15 pl20 ye-bor">
    <img class="pr20" src="_/images/in1.jpg">
    <img class="pr20" src="_/images/in2.jpg">
    <img class="pr20" src="_/images/in3.jpg">
  </div>
   
    
  
</div>



</div>

    </div>

<?php
require_once 'footer.php';
?>
