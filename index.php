<?php include 'header.php';?>

<body>

<?php include 'indextopbar.php';?>

<!--Content start-->

<div class = "content">
    <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class = "col-md-9 col-lg-9 image-content">
            <div class = "widget">
                <div class = "widget-content">
                    <?php include 'slider.php';?>
                </div>
            </div>
        </div>
        <?php include('right-sidebar.php');?>
    </div>

</div>

<!--End Content-->

<!-- Footer starts -->
<?php //include('footer.php');?>

<!-- Footer ends -->

<!-- Sign Up Modal -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> New User Signup </h4>
            </div>
            <div class="modal-body">
                <!--start form-->
                <form class="form-horizontal" method="post" action="admin/crud/user_save.php">
                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="firstname">First Name*</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name of User" required maxlength="40" minlength="3">
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="lastname">Last Name</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name of User" required maxlength="40" minlength="3">
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="username">Username</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="username" id="username"  placeholder="Write Username" required maxlength="40" minlength="3">
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="password">Password</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Write password" required maxlength="40" minlength="3">
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="confirmPassword">Confirm Password</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="  confirm Password" required maxlength="40" minlength="3">
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-6">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary">Sign Up</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>
                </form>
                <!--end form-->
            </div>

        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end Sign Up modal-->


<!-- User Login Modal -->
<div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> User Login</h4>
            </div>
            <div class="modal-body">
                <!--start form-->
                <form class="form-horizontal" method="post" action="user_login.php">
                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="username">Username</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="username" placeholder="Write Username" required>
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="password">Password</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Write password" required>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-6">
                            <button type="submit" class="btn btn-sm btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>
                </form>
                <!--end form-->
            </div>

        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end User Login modal-->

    <?php include('includes/js.php');?>

    <?php include 'script.php';?>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
                [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
                [{b:1900,d:2000,x:-379,e:{x:7}}],
                [{b:1900,d:2000,x:-379,e:{x:7}}],
                [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>

</body>
</html>