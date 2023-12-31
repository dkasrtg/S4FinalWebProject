<body>
<div class="container-scroller">
 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?=   base_url("assets_admin/images/logo.svg"); ?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?=   base_url("assets_admin/images/logo-mini.svg"); ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?=   base_url("assets_admin/images/faces/user2.png"); ?>" alt="tsy hita">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php bu2('CTA_Tableau')?>">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Repas/index") ?>">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Consultation Régime</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Composition/index") ?>">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Composition Régime</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Sport/index") ?>">
            <span class="menu-icon">
                  <i class="mdi mdi-laptop"></i>
          </span>
              <span class="menu-title">Consultation Activité</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Code/index") ?>">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Consultation Code</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Commande/index") ?>">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Validation Commande</span>
            </a>
          </li>
      
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= bu("CTA_Login/deconnect")?>">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->