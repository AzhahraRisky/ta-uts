<br>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-custom">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>login">
            <img src="<?= base_url('assets/'); ?>img/logo/panah.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
    </div>
</nav>
<!-- Header End -->
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
            <br>
            <br>

            <div class="card-body p-5">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-custom"></div>
                    <div class="col-lg-6">
                        <div class="p-7">
                            <div class="text-center">
                                <h1 class="h2 text-white mb-4"><b>Create an Account!</b></h1>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">

                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-user btn-block">
                                Register Account
                            </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>