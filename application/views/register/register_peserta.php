<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?php echo base_url(); ?>assets/ybgp.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>
                                <?php echo $this->session->flashdata('msg'); ?>
                        <div class="card card-primary">
                            <div class="card-header" style="text-align: center;">
                                
                                <h4>Pendaftaran Peserta Bujang Gadis Palembang 2020</h4>
                            </div>
                            <div class="card-body">
                                <?= form_open('register/peserta'); ?>

                                <div class="form-group">
                                    <label for="frist_name">NIK</label>
                                    <input id="frist_name" type="text" class="form-control" name="nik" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="frist_name">Nama Lengkap</label>
                                    <input id="frist_name" type="text" class="form-control" name="nama" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No Hp</label>
                                    <input id="nohp" type="tel" class="form-control" name="nohp" placeholder="+62...." autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="username"> Username</label>
                                    <input id="username" type="text" class="form-control" name="username">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Ulangi Password</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="daftar" value="Daftar" class="btn btn-primary btn-lg btn-block">
                                </div>
                                <!-- </form> -->
                                <?= form_close(); ?>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">Sudah Punya Akun? <a href="<?= site_url("Login") ?>">Login</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; PudingLab 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>