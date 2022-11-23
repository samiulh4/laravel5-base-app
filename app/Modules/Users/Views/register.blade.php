<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel5 BAT App | Web</title>
    <!-- Jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.6.0.min.js') }}"></script>
    @include('partials.styles')
    <!-- Jquery Steps JS -->
    <link href="{{ asset('assets/plugins/jquery-steps/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jquery-steps/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jquery-steps/css/jquery.steps.css') }}" rel="stylesheet">
    <style>
        .wizard > .content {

            min-height: 250px!important;

        }


    </style>
</head>

<body id="page-top">
    <div id="page-wrapper">
        <div class="container" id="content-wrapper">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                    <div id="wizard">
                        <h2>General Information</h2>
                        <fieldset>
                            <div class="row">

                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Role</strong></label>
                                        <select class="form-select">
                                            <option value="">--Select Role--</option>
{{--                                            <option value="1">Super Admin</option>--}}
{{--                                            <option value="2">Admin</option>--}}
{{--                                            <option value="3">Super User</option>--}}
{{--                                            <option value="4">Guest</option>--}}
                                            <option value="5" selected>User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Name</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>E-mail</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter E-mail" name="email"/>
                                    </div>
                                </div>

                            </div><!-- ./row -->
                        </fieldset>
                        <!-- General Information -->

                        <h2>Contact Information</h2>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Country</strong></label>
                                        <select class="form-select">
                                            <option value="">--Select Country--</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="IN">India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Name</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h2>Uplaod Information</h2>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label">Profile Picture</label>
                                        <input class="form-control js-upload-image"  type="file" name="picture" onchange="jsPreviewUploadedImage(this,'preview_picture')"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="{{ asset('assets/img/default.png') }}"
                                         class="img-thumbnail" alt="Profile Picture" width="200" height="200" id="preview_picture"/>
                                </div>
                            </div>
                        </fieldset>
                    </div><!-- #/wizard -->
                </div><!-- ./col (page) -->
            </div><!-- ./row(page) -->
        </div><!-- #/content-wrapper -->
    </div><!-- #/page-wrapper -->
    @include('partials.scripts')
    <!-- Jquery Steps JS -->
    <script src="{{ asset('assets/plugins/jquery-steps/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-steps/js/jquery.cookie-1.3.1.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-steps/js/jquery.steps.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datepicker').datepicker();
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft"
            });
            // $('.js-upload-image').change(function(e){
            //     e.preventDefault();
            //
            // });
        }); // end -:- document ready
        function jsPreviewUploadedImage(img_data, img_preview_id)
        {
            let img_preview_old_src = document.getElementById(img_preview_id).src;
            let file = img_data.files[0];
            let file_type = file.type;
            let ext_list = ["image/jpeg","image/png","image/jpg"];
            let reader = new FileReader();
            if(!((file_type==ext_list[0]) || (file_type==ext_list[1]) || (file_type==ext_list[2]))){
                alert('File must be jpeg/jpg/png !');
                reader.onload = function(e){
                    //$('#'+img_preview_id).attr('src', img_preview_old_src);
                    document.getElementById(img_preview_id).src = img_preview_old_src;
                };
            }else{
                reader.onload = function(e){
                    $('#'+img_preview_id).attr('src', e.target.result);
                };
            }
            reader.readAsDataURL(file);
        }// end -:- jsPreviewUploadedImage()
    </script>
</body>

</html>