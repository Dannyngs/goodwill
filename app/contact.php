<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>
 <div class="content">
    <div class="container bgfff">
      <div class="row mt15 plr20">
        <form class="form-horizontal ctaf">
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">*稱呼</label>
    <div class="col-sm-8">
     <select class="form-control" id="name">
         <option value="">請選擇</option>
       <option value="mr">先生</option>
       <option value="miss">小姐</option>
       <option value="mrs">太太</option>
     </select>
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">*電話</label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="tel">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">*電郵</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">*想了解的服務</label>
    <div class="col-sm-8">
     <select class="form-control" id="server">
       <option value="worker">搵工人</option>
       <option value="xuyue">續約</option>
       <option value="other">其他服務</option>
     </select>
    </div>
  </div>
             </div>


             <div class="col-md-6">
                <div class="form-group">
    <label class="col-sm-4 control-label">理想聯絡時間</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="time">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">其他補充資料</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="5" id="more"></textarea>
    </div>
  </div>
             </div>
  
  </div>

   <div class="row">
      <div class="form-group text-center">
      <button type="reset" class="btn btn-warning mr20">重置</button>
    
      <button id="mysubmit" type="submit" class="btn btn-warning">遞交</button>
   
  </div>
   </div>

          
        </form>
          <p class="f-red text-center" style="font-size:14px">（私隱條款：本公司絕對尊重客戶的隱私權，各客戶的個人資料只會作為公司內部用途，除非客戶同意，本公司不會將資料作其他用途）</p>
      </div>


<div class="row mt15 plr20">
 
    <h3 class="tit-yellow">聯絡我們:</h3>
      <div class="col-md-6 mt15">
          <p><b style="font-size:24px;">家譽</b>僱請有限公司</br>
          （炮台山總行）</p>
      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
        </b>
         <?php echo $system['tel1']?>
      </p>

      <p>
        <b class="icon-b" style="border:none">
          <img src="_/images/wapp.jpg">
        </b>
         <?php echo $system['whatsapp1']?> 
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
        </b>
         <?php echo $system['fax1']?>
      </p>

       <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
        </b>
         <?php echo $system['address1']?>
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </b>
        <a href="mailto:<?php echo $system['emal']?>"><?php echo $system['emal']?></a>
      </p>

      </div>

      
      <div class="col-md-6 wdall">
        <img src="_/images/map.jpg">
      </div>

    </div>


<div class="row mt15 plr20 ye-bor">
   
      <div class="col-md-6 mt15">
        <p><b style="font-size:24px;">樂滿庭</b>僱傭中心</br>
          （堅尼地域分行）</p>
      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
        </b>
         <?php echo $system['tel2']?>
      </p>

      <p>
        <b class="icon-b" style="border:none">
          <img src="_/images/wapp.jpg">
        </b>
         <?php echo $system['whatsapp2']?>
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
        </b>
         <?php echo $system['fax2']?>
      </p>

       <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
        </b>
         <?php echo $system['address2']?>
      </p>

      <p>
        <b class="icon-b">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </b>
        <a href="mailto:<?php echo $system['emal']?>"><?php echo $system['emal']?></a>
      </p>

      </div>

       <div class="col-md-6 wdall">
        <img src="_/images/map.jpg">
      </div>

    </div>


 
   
  




</div>

    </div>



<!--------------------------------
<div class="container">
     <div class="banner">
      <img class="img-responsive" src="_/img/cont1.jpg"/> 
    </div>
    
    <div id="PageBody">
    <div class="row showc">
  <div class="col-md-7">
     <form>
          <div class="form-group">
    <label for="exampleInputPassword1">姓名</label>
    <input type="text" class="form-control" id="myname" placeholder="姓名">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">電郵</label>
    <input type="email" class="form-control" id="myemail" placeholder="電郵">
  </div>
 
  <div class="form-group">
    <label for="exampleInputFile">留言內容</label>
    <textarea class="form-control" placeholder="留言內容" id="mymsg" rows="15"></textarea>
  </div>
 
  <button  id="mysubmit" class="btn btn-default cat-but fcw">SEND</button>
</form> 
       
        
</div>
        
<div class="col-md-4 col-md-offset-1">
    
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.8190829230048!2d114.16750771492734!3d22.32268094772317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c84c46944f%3A0xc8c9cef078a1785a!2z5pe66KeS6YCa6I-c6KGXMTgxLTE4N-iZn-amruiLseaokw!5e0!3m2!1szh-TW!2shk!4v1454061304376" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 						
    
</div>
        
       
       
    </div>



   </div>
 ---------------------------->
<?php
require_once 'footer.php';
?>