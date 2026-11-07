<?php

$aktif = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

if ($aktif == 'produk_input' || $aktif == 'produk_edit') {
    $aktif = 'produk';
}
?>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo ($aktif == 'dashboard') ? 'active' : ''; ?>" href="index.php?page=dashboard">
            <i class="fas fa-home"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($aktif == 'customers') ? 'active' : ''; ?>" href="index.php?page=customers">
            <i class="fas fa-users"></i> Pelanggan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($aktif == 'orders') ? 'active' : ''; ?>" href="index.php?page=orders">
            <i class="fas fa-shopping-cart"></i> Pesanan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($aktif == 'produk') ? 'active' : ''; ?>" href="index.php?page=produk">
            <i class="fas fa-box"></i> Produk
        </a>
    </li>
</ul>
