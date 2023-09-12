  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="logos.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info" style="margin-left: 15%;">
            <a href="<?= SITE ?>index.php?sayfa=home" class="d-block">S.T.B.</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- DUYURU İŞLEMLERI -->
          <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=yetkilendirme" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>Kullanıcı Yetkilendirme</p>
              </a>
            </li>
            
           <!-- EĞITIM PLANLAMA MENÜSÜ -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-calendar-alt"></i>
    <p>
      Eğitim Planlama
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?= SITE ?>index.php?sayfa=egitimplanlama" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Taşra Teşkilatı Planlama</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= SITE ?>index.php?sayfa=egitimplanlamamerkez" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Merkez Birimler Planlama</p>
      </a>
    </li>
  </ul>
</li>

<!-- EĞITIM LİSTELEME MENÜSÜ -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-list"></i>
    <p>
      Eğitim Listeleme
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?= SITE ?>index.php?sayfa=egitimlistele" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Planlanan Eğitim Liste</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= SITE ?>index.php?sayfa=gecmisliste" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Gerçekleşen Eğitim Bilgileri</p>
      </a>
    </li>
  </ul>
</li>

            <!-- EĞITIM ARA -->
            <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=egitimara" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>Eğitim Ara</p>
              </a>
            </li>

            <!-- DUYURU İŞLEMLERI -->
            <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=duyuru" class="nav-link">
                <i class="nav-icon fas fa-bullhorn"></i>
                <p>Duyuru İşlemleri</p>
              </a>
            </li>

<!--

            <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=egitimler" class="nav-link">
                <i class="nav-icon fas fa-user-check"></i>
                <p>Eğitim Katılım İşlemleri</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=video" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>Eğitim Arşivi</p>
              </a>
            </li>
-->

            <!-- RAPORLAR -->
            <li class="nav-item">
              <a href="<?= SITE ?>index.php?sayfa=raporlama" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Raporlar</p>
              </a>
            </li>

          </ul>
        </nav>



        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>