  <!-- Side-Nav -->
  <div class="side-navbar shadow-box d-flex justify-content-between flex-wrap flex-column" id="sidebar">
      <ul class="nav flex-column text-black w-100">
          <a href="#" class="nav-link text-black my-2 text-center" style="color: black !important; border-top: none; display: block;">
              <img src="<?php echo base_url('/assets/'); ?>imgs/user_dummy_pic.webp" alt="account photo" width="80" height="80" style="border-radius: 50%;">
              <h5>
                  User Name
              </h5>
          </a>
          <a href="<?php echo site_url(''); ?>" class="nav-link <?php echo isset($search_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-search"></i>
              <span class="mx-2">Search</span>
          </a>
          <a href="<?php echo site_url('/profile/'); ?>" class="nav-link <?php echo isset($profile_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-user-check"></i>
              <span class="mx-2">Profile</span>
          </a>
          <a href="<?php echo site_url('/wallet/'); ?>" class="nav-link <?php echo isset($wallet_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-wallet"></i>
              <span class="mx-2">Wallet</span>
          </a>
          <a href="<?php echo site_url('/downloads/'); ?>" class="nav-link <?php echo isset($downloads_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-download"></i>
              <span class="mx-2">Downloads</span>
          </a>
          <a href="<?php echo site_url('/resources/'); ?>" class="nav-link <?php echo isset($resources_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-file"></i>
              <span class="mx-2">Resources</span>
          </a>
          <a href="<?php echo site_url('/helpdesk/'); ?>" class="nav-link <?php echo isset($helpdesk_menu_active) ? 'active' : ''; ?>">
              <i class="bx bxs-id-card"></i>
              <span class="mx-2">Helpdesk</span>
          </a>
      </ul>

      <span href="#" class="nav-link h4 w-100 mb-5" style="display: none;">
          <a href=""><i class="bx bxl-instagram-alt text-black"></i></a>
          <a href=""><i class="bx bxl-twitter px-2 text-black"></i></a>
          <a href=""><i class="bx bxl-facebook text-black"></i></a>
      </span>
  </div>