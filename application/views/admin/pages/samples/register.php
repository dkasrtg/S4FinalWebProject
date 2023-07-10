<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registre</title>
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
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="<?= bu('CTA_Login/addAdmin')?>" method="post">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="nom" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="prenom" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="mdp" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Super admin</label>
                    <input type="password" name="superadmin" value="superadmin" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">+ ADD +</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="<?= bu("CTA_init/tolog") ?>"> Sign Up</a></p>
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