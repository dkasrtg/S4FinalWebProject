<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url("assets_admin/vendors/mdi/css/materialdesignicons.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets_admin/vendors/css/vendor.bundle.base.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets_admin/css/style.css") ?>">
    <link rel="shortcut icon" href="<?= base_url("assets_admin/images/favicon.png") ?>" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>

                <?php if(isset($error)){ ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> <?= $error ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php } ?>

                <form action="<?= bu('CTA_Login/login')?>" method="post">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text"  name='email' class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" name='mdp' class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                    <p class="sign-up">Don't have an Account?<a href="<?= bu("CTA_init/insert") ?>"> Sign Up</a></p>
                    <p class="sign-up">User` s connecting?<a href="<?= bu("CTC_Login") ?>">Sign in as client</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="<?= base_url("assets_admin/vendors/js/vendor.bundle.base.js") ?>"></script>
    <script src="<?= base_url("assets_admin/js/off-canvas.js") ?>"></script>
    <script src="<?= base_url("assets_admin/js/hoverable-collapse.js") ?>"></script>
    <script src="<?= base_url("assets_admin/js/misc.js") ?>"></script>
    <script src="<?= base_url("assets_admin/js/settings.js") ?>"></script>
    <script src="<?= base_url("assets_admin/js/todolist.js") ?>"></script>
  </body>
</html>