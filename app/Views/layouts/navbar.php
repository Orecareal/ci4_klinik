<nav class="navbar navbar-expand-lg bg-orange">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
          </a>
          <ul class="dropdown-menu bg-orange">
            <li><a class="dropdown-item" href="#">Data Users</a></li>
            <li><a class="dropdown-item" href="#">Data Pasien</a></li>
            <li><a class="dropdown-item" href="#">Data Dokter</a></li>
            <li><a class="dropdown-item" href="#">Data Obat</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kunjungan/Berobat</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
          </a>
          <ul class="dropdown-menu bg-orange">
            <li><a class="dropdown-item" href="#">Laporan Berobat</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <? if('logged_in'):?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page">
            <form action="<?= base_url('logout')?>" method="POST">
            <?= csrf_field() ?>
              <button type="submit" class="nav-btn">Log Out</button>  
            </form>
          </a>
        </li>
        <? endif ?>
      </ul>
    </div>
  </div>
</nav>