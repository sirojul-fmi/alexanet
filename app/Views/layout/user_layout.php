<?=$this->extend('layout/component/master_template_admin.php')?>

<?=$this->section('body')?>

<!-- Page Sidebar Start-->
<header class="main-nav">
  <div class="sidebar-user text-center">
      <img class="img-90 rounded-circle" src="<?=base_url()?>images/1.png" alt="" />
      <div class="badge-bottom"><span class="badge badge-primary">User</span></div>
      <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600"><?=$user[0]['nama']?></h6></a>
  </div>
  <nav>
      <div class="main-navbar">
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                      <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li>
                      <a class="nav-link menu-title link-nav" href="<?=base_url()?>user/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="dropdown">
                      <a class="nav-link menu-title link-nav " href="<?=base_url()?>user/upgrade"><i data-feather="arrow-up-circle"></i><span>Update</span></a>
                  </li>
                  <li class="dropdown">
                      <a class="nav-link menu-title link-nav " href="<?=base_url()?>user/unsubscribe"><i data-feather="minus-circle"></i><span>Berhenti</span></a>
                  </li>
              </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
  </nav>
</header>
<!-- Page Sidebar Ends-->

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid dashboard-default-sec">
    <?= $this->renderSection('content'); ?>
  </div>
  <!-- Container-fluid Ends-->
</div>

<?= $this->endSection() ?>