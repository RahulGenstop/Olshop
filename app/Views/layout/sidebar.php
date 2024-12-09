<div class="sidebar-wrapper scrollbar scrollbar-inner">
  <div class="sidebar-content">
    <ul class="nav nav-secondary">
      <li class="nav-item <?= ($active == 'home') ? 'active' : '' ?>">
        <a href="/">
          <i class="fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Components</h4>
      </li>
      <li class="nav-item <?= ($active == 'pengguna') ? 'active' : '' ?>">
        <a href="/pengguna">
          <i class="fas fa-users"></i>
          <p>Pengguna</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'pesanan') ? 'active' : '' ?>">
        <a href="/pesanan">
          <i class="fas fa-shopping-cart"></i>
          <p>Pesanan</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'Produk') ? 'active' : '' ?>">
        <a href="/produk">
          <i class="fas fa-box-open"></i>
          <p>Produk</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'Pembayaran') ? 'active' : '' ?>">
        <a href="/pembayaran">
          <i class="fas fa-credit-card"></i>
          <p>Pembayaran</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'Item') ? 'active' : '' ?>">
        <a href="/item_pemesanan">
          <i class="fas fa-list"></i>
          <p>Item</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'Kategori') ? 'active' : '' ?>">
        <a href="/kategori">
          <i class="fas fa-tags"></i>
          <p>Kategori</p>
        </a>
      </li>
      <li class="nav-item <?= ($active == 'ulasan') ? 'active' : '' ?>">
        <a href="/ulasan">
          <i class="fas fa-comments"></i>
          <p>Ulasan</p>
        </a>
      </li>
    </ul>
  </div>
</div>