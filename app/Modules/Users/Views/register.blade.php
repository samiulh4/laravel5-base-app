<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"/>
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

            min-height: 250px !important;

        }


    </style>
</head>

<body id="page-top">
<div id="page-wrapper">
    <div class="container" id="content-wrapper">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <form id="user-register-form" method="POST" action="{{ route('user.store') }}"
                      enctype="multipart/form-data" autocomplete="off">
                    {{ csrf_field() }}

                    <div id="wizard">


                        <h2>General Information</h2>
                        <fieldset>
                            <div class="row">

                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Role</strong></label>
                                        <select name="role_id" id="role_id" class="form-select">
                                            <option value="">--Select Role--</option>
                                            <option value="5" selected>User</option>
                                        </select>
                                        @if ($errors->has('role_id'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('role_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Name</strong></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Enter Name"/>
                                        @if ($errors->has('name'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>E-mail</strong></label>
                                        <input type="text" name="email" id="email" class="form-control"
                                               placeholder="Enter E-mail"/>
                                        @if ($errors->has('email'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
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
                                        <select name="country_code" id="country_code" class="form-select">
                                            <option value="">--Select Country--</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="IN">India</option>
                                        </select>
                                        @if ($errors->has('country_code'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('country_code') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Phone</strong></label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                               placeholder="Enter Phone"/>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h2>Upload Information</h2>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label">Profile Picture</label>
                                        <input class="form-control" type="file" name="picture"
                                               onchange="jsPreviewUploadedImage(this,'preview_picture')"/>
                                        @if ($errors->has('picture'))
                                            <span class="text-danger fs-6">
                                                <strong>{{ $errors->first('picture') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="{{ asset('assets/img/default.png') }}"
                                         class="img-thumbnail" alt="Profile Picture" width="200" height="200"
                                         id="preview_picture"/>
                                </div>
                            </div>
                        </fieldset>
                        <h2>Authenticate Information</h2>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 offset-4 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Phone</strong></label>
                                        <input type="text" name="password" id="password" class="form-control"
                                               placeholder="Enter Password"/>
                                    </div>
                                </div>

                            </div>
                        </fieldset>

                    </div><!-- #/wizard -->
                    <form/>


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
    $(document).ready(function () {
        $('.datepicker').datepicker();
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            labels:
                {
                    next: "Next",
                    previous: "Previous",
                    finish: "Submit",
                    loading: "Loading ...",
                },
            onFinished: function (event, currentIndex) {
                event.preventDefault();
                var form = document.getElementById("user-register-form");
                form.submit();
            }
        });
    }); // end -:- document ready
    function jsPreviewUploadedImage(img_data, img_preview_id) {
        let file = img_data.files[0];
        let file_type = file.type;
        let ext_list = ["image/jpeg", "image/png", "image/jpg"];
        if (!((file_type == ext_list[0]) || (file_type == ext_list[1]) || (file_type == ext_list[2]))) {
            alert('File must be jpeg/jpg/png !');
            $('#' + img_preview_id).attr('src', '');
        } else {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#' + img_preview_id).attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    }// end -:- jsPreviewUploadedImage()
</script>
</body>

</html>