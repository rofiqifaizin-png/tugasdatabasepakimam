<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "dashboard";
}


$halaman = [
    "dashboard"    => "pages/dashboard.php",
    "produk"       => "pages/produk.php",
    "produk_input" => "pages/produk_input.php",
    "produk_edit"  => "pages/produk_edit.php",
    "orders"       => "pages/orders.php",
    "customers"    => "pages/customers.php"
];

if (isset($halaman[$page])) {
    require $halaman[$page];
} else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}
?>
