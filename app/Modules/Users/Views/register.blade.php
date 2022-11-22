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
                                        <button class="nav-link active" id="nav-basic-tab" data-bs-toggle="tab" data-bs-target="#nav-basic" type="button" role="tab" aria-controls="nav-basic" aria-selected="true">Basic Information</button>
                                        <button class="nav-link" id="nav-address-tab" data-bs-toggle="tab" data-bs-target="#nav-address" type="button" role="tab" aria-controls="nav-address" aria-selected="false">Address</button>
                                        <button class="nav-link" id="nav-upload-tab" data-bs-toggle="tab" data-bs-target="#nav-upload" type="button" role="tab" aria-controls="nav-upload" aria-selected="false">Uplaod</button>
                                    </div>
                                </nav><!-- /nav -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Basic Information -->
                                    <div class="tab-pane fade show active" id="nav-basic" role="tabpanel" aria-labelledby="nav-basic-tab" tabindex="0">
                                        <div class="row">

                                            <div class="col-md-6 mt-3">
                                                <div class="form-group d-flex">
                                                    <label class="input-group-text">Name</label>
                                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <div class="form-group d-flex">
                                                    <span class="input-group-text">E-mail</span>
                                                    <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="email" />
                                                </div>
                                            </div>


                                            <div class="col-md-6 mt-3">
                                                <div class="form-group d-flex">
                                                    <span class="input-group-text">Role</span>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="">--SELECT ROLE--</option>
                                                        <option value="1">Super Admin</option>
                                                        <option value="2">Admin</option>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <span class="input-group-text">National ID</span>
                                                    <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="email" />
                                                </div>
                                            </div>


                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <label class=""><strong>Gender&nbsp;:&nbsp;</strong></label>
                                                    <input class="form-check-input" type="radio" name="gender" value="M" aria-label="Radio button for following text input">Male&nbsp;&nbsp;
                                                    <input class="form-check-input" type="radio" name="gender" value="F" aria-label="Radio button for following text input">&nbsp;&nbsp;Female
                                                    <input class="form-check-input" type="radio" name="gender" value="O" aria-label="Radio button for following text input">&nbsp;&nbsp;Other
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker" placeholder="yy/mm/dd" aria-label="Date Of Birth" aria-describedby="date_of_birth" />
                                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>




                                        </div><!-- ./row -->
                                    </div><!-- #/nav-basic-->
                                    <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab" tabindex="0">
                                        <div class="row">

                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <label class="input-group-text">Country</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="">--SELECT COUNTRY--</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">India</option>
                                                        <option value="3">Pakistan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <span class="input-group-text">Mobile No</span>
                                                    <input type="text" class="form-control" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="email" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>

                                        </div><!-- ./row -->
                                    </div><!-- #/nav-address -->
                                    <div class="tab-pane fade" id="nav-upload" role="tabpanel" aria-labelledby="nav-upload-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Profile Picture</label>
                                                    <input class="form-control"  type="file"/>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <img src="https://www.energyfit.com.mk/wp-content/plugins/ap_background/images/default/default_1.png" class="img-thumbnail" alt="Profile Picture">
                                            </div>
                                        </div><!-- ./row -->


                                    </div><!-- #/nav-upload -->
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
            $('.datepicker').datepicker();
        }); // end -:- document ready
    </script>
</body>

</html>