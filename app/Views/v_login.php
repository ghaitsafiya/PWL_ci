<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo base_url() ?>PurpleAdmin/assets/images/logo.svg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <?php
                  if (session()->getFlashData('failed')) {
                  ?>
                      <div class="col-12 alert alert-danger" role="alert">
                          <hr>
                          <p class="mb-0">
                              <?= session()->getFlashData('failed') ?>
                          </p>
                      </div>
                  <?php
                  }
                  ?>
                <?= form_open('login', 'class = "row g-3 needs-validation"') ?>
                  <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <?= form_input($username) ?>
                          <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                  </div>

                  <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                          <?= form_password($password) ?>
                      <div class="invalid-feedback">Please enter your password!</div>
                  </div>
                  <div class="col-12">
                      <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
                  </div>

                  <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
<?= $this->endSection() ?>