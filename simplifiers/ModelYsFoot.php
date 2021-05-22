


<!-- Footer -->
<div class="row-fluid open-sans" style="padding-top:10px; padding-bottom:10px;background-color: rgb(59,66,70);color: #adadad">
    <!-- matrix-->
    <div class="container-fluid" >
       <!-- 1st row-->
       <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-6 text-left pt-6 pb-6" style="text-align:left;">
            中国国家博物馆融媒矩阵：
        </div>
        <div class="col-sm-3"></div>
      </div>
       <!-- 1st row-->
    <!-- 2st row-->
    <div class="row" >
     <div class="col-sm-3"></div>
     <div class="col-sm-6 text-center pt-6 pb-6 ">
         <div class="row justify-content-between" style="border-bottom: 1px solid #adadad;">
            <div >
                <img src="./assets/images/wx1Ewm20200314.png">
                <p >国家博物馆<br>微信服务号</p>
            </div>
            <div >
             <img src="./assets/images/gjenfwh20200801.jpg" >
             <p>国家博物馆英文版<br>微信服务号</p>
         </div>
         <div >
            <img src="./assets/images/wx2Ewm20200314.png">
            <p>国博君<br>微信订阅号</p>
        </div>
        <div >
            <img src="./assets/images/gjzlfwh20200801.jpg">
            <p>国家展览<br>微信服务号</p>
        </div>
        <div >
            <img src="./assets/images/wbEwm20200314.png">
            <p>官方微博</p>
        </div>
        <div >
            <img src="./assets/images/dyEwm20200314.png">
            <p>官方抖音</p>
        </div>
    </div>
</div>
<div class="col-sm-3"></div>
</div>
<!-- 2st row-->

<!-- 3rd row-->
<div class="row">
 <div class="col-sm-3"></div>

 <div class="col-sm-6 text-center pt-6 pb-6 ">
     <div class="row justify-content-between">
        <a href="http://www.chnmuseum.cn/shxg/yqlj/" style="color: #adadad;" title="友情链接">友情链接</a> |
        <a href="http://www.chnmuseum.cn/sp/"  style="color: #adadad;" title="国博视频">国博视频</a> |
        <a href="http://www.chnmuseum.cn/cg/lybd/"  style="color: #adadad;" title="留言板">留言板</a> |
        <a href="http://www.chnmuseum.cn/shxg/lxwm/"  style="color: #adadad;" title="联系我们">联系我们</a> |
        <a href="http://www.chnmuseum.cn/shxg/bqsm/"  style="color: #adadad;" title="版权声明">版权声明</a> |
        <a href="http://www.chnmuseum.cn/shxg/yszc/"  style="color: #adadad;" title="隐私政策">隐私政策</a> |
        <a href="http://www.chnmuseum.cn/shxg/wjdc/"  style="color: #adadad;" title="问卷调查">问卷调查</a>
    </div >
</div>

<div class="col-sm-3"></div>
</div>
<!-- 3rd row-->
<!-- 4th row-->
<div class="row">
 <div class="col-sm-3"></div>
 <div class="col-sm-6 text-center pt-6 pb-6 ">
     <div class="row justify-content-between">
       <span>中国国家博物馆版权所有 </span>|
       <a href="https://beian.miit.gov.cn/" style="color: #adadad;" target="_blank" ><span>京ICP备05008885号</span></a>|
       <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010102003012" style="color: #adadad;" target="_blank" ><span>京公网安备11010102003012号</span></a> |
       <span>EMAIL：service@chnmuseum.cn</span>    
   </div >
</div>
<div class="col-sm-3"></div>
</div>
<!-- 4th row-->
<!-- 5th row-->
<div class="row">
 <div class="col-sm-3"></div>
 <div class="col-sm-6 text-center pt-6 pb-6 ">
     <div class="row justify-content-between">
       <span>内容运维：新闻传播处&nbsp;&nbsp;&nbsp;&nbsp;国博（北京）文化传媒有限公司</span>|
       <span>技术保障：信息技术部&nbsp;&nbsp;&nbsp;
           <a href="http://www.trs.com.cn/" style="color: #adadad;" target="_blank"  >北京拓尔思信息技术股份有限公司</a></span> 

       </div >
   </div>
   <div class="col-sm-3"></div>
</div>
<!-- 5th row-->

</div>
<!-- matrix-->
</div>
<!-- Footer -->



<!-- Optional JavaScript -->

<script type="text/javascript">
    function resizeMainContainer() {
        var mainContainerSize = $('.main-container').height();
        if(mainContainerSize < $(window).height() - ($('.footer').height() - 50)) {
            $('.main-container').css('min-height', $(window).height() - ($('.footer').height() + 40) + 'px');
        }
    }
    $(document).ready(function() {

        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 


        resizeMainContainer();

        $(window).resize(function(){
            resizeMainContainer();
        });
    });
</script>

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.cast.uark.edu/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '17']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<noscript>
  <img src="https://analytics.cast.uark.edu/matomo.php?idsite=17&amp;rec=1" style="border:0" alt="" />
</noscript>
<!-- End Matomo Code -->



</body>
</html>