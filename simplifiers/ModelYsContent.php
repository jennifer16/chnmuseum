<form method="post" action="" enctype="multipart/form-data">
<div class="container d-flex flex-column mb-4 h-100" style="padding-top: 112px; margin-top:-36px;">
    <!--  查找区域 to be modified -->
    <div class="row">
        <div class="col-sm-12">
            <hr style="margin-top:10px; margin-bottom:2px">
            <div class="row"  style="margin-top:8px; margin-bottom: 8px"><div class="col-lg-8 col-md-8 col-8">
                <ul class="nav justify-content-between">
                <li class="nav-item">
                    <input type="file" name="file" id="file">
                </li>

                <li class="nav-item">
                    <div class="row">
                        <input type="radio" name="ysoption" checked="checked"  style="margin-top:5px;" id="clickjds" onclick="displayjds()">节点数&nbsp;
                        <div  id="jds" ><input type="text" name="numvertices" value="1000">&nbsp;(建议>100) </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="ysoption"  id="clickysb" style="margin-top:5px;" onclick="displayysb()">压缩比&nbsp;
                        <div  id="ysb" hidden><input type="text" name="percentvertices" value="50">&nbsp;(输入1-99) </div>
                    </div>
                </li>

                <li class="nav-item">
                </li>
            </ul></div></div>
            <hr style="margin-top:2px; margin-bottom:10px">
        </div>
    </div>
    <!--<div class="row">-->

    <!--row text-->   
     <div class="row text">
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://hampson.cast.uark.edu/view/1" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./assets/images/headpot_OBJ_Hi_scan_thumb.jpg" alt="Card image cap">
                </a>
                <span class="text-light p-2 mr-4 mt-1" style="position:absolute;top:0;right:0;">Headpot</span>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://hampson.cast.uark.edu/view/2" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./assets/images/Ark_HM_401_hi_scan_thumb.jpg" alt="Card image cap">
                </a>
                <span class="text-light p-2 mr-4 mt-1" style="position:absolute;top:0;right:0;">Ark Hm 401</span>
            </div>
    </div> 
    <!--<div class="row text">-->
</div>
<!-- /Container -->
</form> 
</div>
</div> 
  <!--内容结束-->                            
                                 
     
 <script>
function displayjds()
{
    document.getElementById("jds").hidden = false;
    document.getElementById("ysb").hidden = true;
}
function displayysb()
{
    document.getElementById("jds").hidden = true;
    document.getElementById("ysb").hidden = false;
}
</script>        
      

        <script>
$('#toggleMeta').on('click', metaToggle);

function metaToggle(e) {
  $(this).find('.fas').toggleClass('fa-chevron-down fa-chevron-up');
}
</script>

<!--SPIDERGL-->
<script type="text/javascript" src="./assets/js/spidergl.js.下载"></script>
<!--PRESENTER-->
<script type="text/javascript" src="./assets/js/presenter.js.下载"></script>
<!--3D MODELS LOADING AND RENDERING-->
<script type="text/javascript" src="./assets/js/nexus.js.下载"></script>
<script type="text/javascript" src="./assets/js/ply.js.下载"></script>
<!--TRACKBALLS-->
<script type="text/javascript" src="./assets/js/trackball_sphere.js.下载"></script>
<script type="text/javascript" src="./assets/js/trackball_turntable.js.下载"></script>
<script type="text/javascript" src="./assets/js/trackball_turntable_pan.js.下载"></script>
<script type="text/javascript" src="./assets/js/trackball_pantilt.js.下载"></script>
<!--UTILITY-->
<script type="text/javascript" src="./assets/js/init.js.下载"></script>
<!-- Lightgallery -->
<script src="./assets/js/lightgallery.min.js.下载"></script>

<script type="text/javascript">
    // Lightgallery settings
    lightGallery(document.getElementById('lightgallery'),{
            download: false,
            mode: 'lg-fade',
            // width: '640px',
      //       height: '474px',
            thumbnail: true
    });

    // 3dHop
    var presenter = null;

    function setup3dhop() {
        presenter = new Presenter("draw-canvas");

        presenter.setScene({
            meshes: {
                "Artifact" : { url: "https://hampson.cast.uark.edu/storage/artifacts/headpot/Scans/headpot_HI.nxz"}
            },
            modelInstances : {
                "Model1" : { mesh : "Artifact" }
            },
            trackball: {
                type : TurntablePanTrackball,
                trackOptions : {
                    startDistance: 4,
                    minMaxPhi: [-180,180],
                    minMaxDist: [0.5, 6]
                }
            },

            space: {
  
                cameraType    : "perspective",    
                cameraFOV     : 37,
                cameraNearFar : [0.01, 10.0],
  
             }
        });
        presenter._onEndMeasurement = onEndMeasure;
    }

    function actionsToolbar(action) {
        if(action=='home'){
            presenter.resetTrackball();
        }
        else if(action=='zoomin') presenter.zoomIn();
        else if(action=='zoomout') presenter.zoomOut();
        else if(action=='light' || action=='light_on') { presenter.enableLightTrackball(!presenter.isLightTrackballEnabled()); lightSwitch(); }
        else if(action=='measure' || action=='measure_on') { presenter.enableMeasurementTool(!presenter.isMeasurementToolEnabled()); measureSwitch(); }
        else if(action=='color' || action=='color_on') { presenter.toggleInstanceSolidColor(HOP_ALL, true); colorSwitch(); }
        else if(action=='full'  || action=='full_on') fullscreenSwitch();

    }

    function onEndMeasure(measure) {
        // measure.toFixed(2) sets the number of decimals when displaying the measure
        // depending on the model measure units, use "mm","m","km" or whatever you have
        $('#measure-output').html(measure.toFixed(2) + " mm");
    }

    function setCanvasRatio() {
        if ($(window).height() > $(window).width()) { //screen is tall
            w = $('#3dhop').parent().width()
            h = $('#3dhop').parent().parent().height()
            resizeCanvas(w,h)
            presenter.resetTrackball()

        }
        else { //screen is wide
            $('#3dhop').css('width', "100%")
            w = $('#3dhop').parent().width()
            h = $('#3dhop').parent().parent().height()
            // h = $('#3dhop').closest(".row").height()
            resizeCanvas(w,h)
            presenter.resetTrackball()

        }

    }

    $(document).ready(function(){

        init3dhop();

        setup3dhop();

        setCanvasRatio();

        $(window).resize(setCanvasRatio)

    });

</script>
