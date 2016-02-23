 <div class="footer">
      <div class="container bgfff">
        <div class="row">
          <div class="col-md-12 mt15">
            <p>本網頁所提供資料僅作參考用途。若因錯漏而引致任何不便或損失，家譽/樂滿庭網頁及家譽僱請有限公司/樂滿庭僱傭中心概不負責。 </p>
            <p class="f-yellow">This information provided is for reference only. While every effort is made to ensure accuracy, Goodwill /Happy House any liability for any loss or damage whatsoever that may arise whether directly or indirectly as a result of any error, inaccuracy or omission.</p>
          </div>
          <div class="col-md-12 bgyellow" style="overflow:hidden">
           <div class="col-md-4 mt5">
             <a href="page.php?id=4"><?php echo $lang['terms'];?></a>   
           </div>
            <div class="col-md-8"> 
            <p class="text-right mt15">Copyright Goodwill Placement Services Limited All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>


 
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="_/js/bootstrap.min.js"></script>
  <script type="text/javascript">
 $(document).ready(function(){
      
 $('#mysubmit').click(function(event){
     event.preventDefault();
 $('#mysubmit').attr("disabled",true); 
     var myname=$('#name').val();
    var mytel=$('#tel').val();
     var myemail=$('#email').val();
     var myserver=$('#server').val();
     var mytime=$('#time').val();
     var mymore=$('#more').val();
console.log(myname);
   if( myname=="" || mytel=="" || myemail=="" || myserver=="")
       return alert("請完整填寫信息");
     
     $.post("mail.php",
     {
    myname:myname,
    mytel:mytel,
   myemail :myemail,
    myserver:myserver,
         mytime:mytime,
         mymore:mymore,
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 

         }else{
         $('#name').val("");$('#tel').val("");$('#email').val("");$('#server').val("");$('#time').val("");$('#more').val("");
         alert("遞交成功！");}
        
  });
     
 });  
   
 });
</script>

  
    </body>

</html>