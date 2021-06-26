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
                                    <h1>AMM Margasari</h1>
                                </div>
                                <p>Login pengurus dan anggota.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6">
                        <div class="form d-flex align-items-center">
                            <div class="content">

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input id="email" type="text" name="email" required data-msg="Please enter your email" class="input-material" value="<?= set_value('email'); ?>">
                                        <label for="email" class="label-material">Email</label>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                                        <label for="password" class="label-material">Password</label>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <div>
                                        <br>
                                    </div>
                                </form><a href="<?= base_url('auth/forgotpassword'); ?>" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="<?= base_url('auth/registration'); ?>" class="signup">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Back to <a href="<?= base_url('home'); ?>" class="external"> Menu</a></p>

        </div>
    </div>