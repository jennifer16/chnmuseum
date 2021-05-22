<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chinese Culture Resource Center</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <style>
            body {
                font-family: Monospace;
                background-color: #000;
                color: #fff;
                margin: 0px;
                overflow: hidden;
            }
            #info {
                color: #fff;
                position: absolute;
                top: 10px;
                width: 100%;
                text-align: center;
                z-index: 100;
                display:block;
            }
            #info a, .button { color: #00f; font-weight: bold; text-decoration: underline; cursor: pointer }
        </style>
    </head>

    <body>
        <div id="info">
        <a href="/" target="_blank">Home</a> - Model
        </div>
        <div id="model">
            <div id="progress"></div>
        </div>

        <script src="assets/js/three/build/three.min.js"></script>

        <script src="assets/js/three/loaders/DDSLoader.js"></script>
        <script src="assets/js/three/loaders/MTLLoader.js"></script>
        <script src="assets/js/three/loaders/OBJMTLLoader.js"></script>

        <script src="assets/js/three/controls/OrbitControls.js"></script>

        <script src="assets/js/three/Detector.js"></script>
        <script src="assets/js/three/libs/stats.min.js"></script>

        <script>

            var container, stats;

            var camera, scene, renderer;

            //var mouseX = 0, mouseY = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;


            init();
            animate();


            function init() {

                /*container = document.createElement( 'div' );
                document.body.appendChild( container );
                progress=document.createElement("div");
                container.appendChild(progress);*/

                container = document.getElementById('model');
                progress = document.getElementById('progress');

                //camera

                camera = new THREE.PerspectiveCamera( 90, window.innerWidth / window.innerHeight, 1, 50000 );
                //camera.position.x = 180;
                camera.position.y = -170;
                camera.position.z = 170;
                camera.up.x = 0;//设置相机的上为「x」轴方向
                camera.up.y = 1;//设置相机的上为「y」轴方向
                camera.up.z = 0;//设置相机的上为「z」轴方向
                camera.lookAt( {x:0, y:0, z:0 } );//设置视野的中心坐标

                // scene

                scene = new THREE.Scene();

                var ambient = new THREE.AmbientLight( 0x444444 );
                scene.add( ambient );

                var directionalLight = new THREE.DirectionalLight( 0xffeedd );
                directionalLight.position.set( 0, 0, 1 ).normalize();
                scene.add( directionalLight );

                // model

                var onProgress = function ( xhr ) {
                    if ( xhr.lengthComputable ) {
                        var percentComplete = xhr.loaded / xhr.total * 100;
                        console.log( Math.round(percentComplete, 2) + '% downloaded' );
                        progress.innerHTML = Math.round(percentComplete, 2) + '% downloaded';                        
                    }
                };

                var onError = function ( xhr ) {
                };


                THREE.Loader.Handlers.add( /\.dds$/i, new THREE.DDSLoader() );

                var loader = new THREE.OBJMTLLoader();
                loader.load( 'assets/modelData/cup/cup.obj', 'assets/modelData/cup/cup.mtl', function ( object ) {

                    object.position.y = - 50;
                    scene.add( object );

                }, onProgress, onError );

                //

                renderer = new THREE.WebGLRenderer();
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

                //document.addEventListener( 'mousemove', onDocumentMouseMove, false );

                //

                window.addEventListener( 'resize', onWindowResize, false );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            controls = new THREE.OrbitControls(camera);
            controls.damping = 0.2;
            controls.addEventListener('change', render);

            /*function onDocumentMouseMove( event ) { 

                mouseX = ( event.clientX - windowHalfX ) / 2;
                mouseY = ( event.clientY - windowHalfY ) / 2;

            }*/

            //

            function animate() {

                requestAnimationFrame( animate );
                render();

            }

            function render() {

                /*camera.position.y += ( mouseX - camera.position.y ) * .05;
                camera.position.z += ( mouseY - camera.position.z) * .05;
                camera.position.x = 1800;*/

                //camera.lookAt( scene.position );

                renderer.render( scene, camera );

            }

        </script>
    </body>
</html>
