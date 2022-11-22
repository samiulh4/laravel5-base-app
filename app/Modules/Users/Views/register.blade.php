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

                                <div class="col-md-6">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Name</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>E-mail</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter E-mail" name="email"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="form-group d-flex">
                                        <label class="input-group-text"><strong>Role</strong></label>
                                        <select class="form-select">
                                            <option value="">--Select Role--</option>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Admin</option>
                                            <option value="3">User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group d-flex">
                                        <span class="input-group-text"><strong>National ID</strong></span>
                                        <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="email" />
                                    </div>
                                </div>

                            </div><!-- ./row -->
                        </fieldset>
                        <!-- General Information -->

                        <h2>Second Step</h2>
                        <fieldset>
                            <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                                In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                                dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                                In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                Donec non pulvinar urna. Aliquam id velit lacus.</p>
                        </fieldset>

                        <h2>Third Step</h2>
                        <fieldset>
                            <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                                venenatis.</p>
                        </fieldset>

                        <h2>Forth Step</h2>
                        <fieldset>
                            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
                                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
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
        }); // end -:- document ready
    </script>
</body>

</html>