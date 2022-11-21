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
</head>

<body id="page-top">
    <div id="page-wrapper">
        <div class="container" id="content-wrapper">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">User From</h3>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-basic-information-tab" data-bs-toggle="tab" data-bs-target="#nav-basic-information" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Basic Information</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                        <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
                                    </div>
                                </nav><!-- /nav -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-basic-information" role="tabpanel" aria-labelledby="nav-basic-information-tab" tabindex="0">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="name">Name</span>
                                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="email">E-Mail</span>
                                                    <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="email">E-Mail</span>
                                                    <input class="form-check-input mt-2" type="radio" name="gender" value="M" aria-label="Radio button for following text input">
                                                    <input class="form-check-input mt-2" type="radio" name="gender" value="F" aria-label="Radio button for following text input">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- #/nav-basic-information-->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                                    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
                                </div><!-- ./tab-content -->
                            </div><!-- ./card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-md btn-primary float-end">Register</button>
                            </div><!-- ./card-footer -->
                        </div><!-- ./card -->
                    </form><!-- /form -->
                </div><!-- ./col (page) -->
            </div><!-- ./row(page) -->
        </div><!-- #/content-wrapper -->
    </div><!-- #/page-wrapper -->
    @include('partials.scripts')
    <script type="text/javascript">
        $(document).ready(function() {

        }); // end -:- document ready
    </script>
</body>

</html>