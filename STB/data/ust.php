 <!-- Yeni Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Orta kısım -->
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="logo.jpg" alt="T.C. Sanayi Ve Teknoloji Bakanlığı " height="30">
          </a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= SITE ?>index.php?sayfa=home"><strong>T.C. Sanayi Ve Teknoloji Bakanlığı</strong></a>
        </li>
      </ul>


      <!-- Kullanıcı adının olduğu açılır pencere -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
            Kullanıcı Ayarları
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <!-- Burada kullanıcı ayarları için gerekli bağlantıları ekleyebilirsiniz -->
            <a href="#" class="dropdown-item">Profil</a>
            <a href="<?= SITE ?>index.php?sayfa=kullanici" class="dropdown-item">Ayarlar</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Çıkış Yap</a>
          </div>
        </li>
      </ul>
    </nav>
