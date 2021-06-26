<body>
    <div class="login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Registrasi</h1>
                                </div>
                                <p>Silahkan mengisi Nama, email, dan password.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                                    <div class="form-group-material">
                                        <input id="name" type="text" name="name" required data-msg="Please enter your name" class="input-material" value="<?= set_value('name'); ?>">
                                        <label class="label-material">Nama Lengkap</label>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="email" type="text" name="email" required data-msg="Please enter a valid email address" class="input-material" value="<?= set_value('email'); ?>">
                                        <label for="email" class="label-material">Email Address </label>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="password1" type="password" name="password1" required data-msg="Please enter your password" class="input-material">
                                        <label for="password1" class="label-material">Password </label>
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="password2" type="password" name="password2" required data-msg="Please enter your repeat password" class="input-material">
                                        <label for="password2" class="label-material">Repeat Password </label>
                                    </div>
                                    <div class="form-group terms-conditions text-center">
                                        <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                                        <label for="register-agree">Saya menyetujui syarat dan ketentuan yang berlaku</label>
                                    </div>
                                    <div class="form-group text-center">
                                        <!-- <input id="registrasi" type="submit" value="Registrasi" class="btn btn-primary"> -->

                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </form><small>Already have an account? </small><a href="<?= base_url('auth'); ?>" class="signup">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Back to <a href="<?= base_url('home'); ?>" class="external">Menu</a></p>
        </div>
    </div>