<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Home </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <?php foreach ($product as $key => $item) : ?>
                  <div class="col-lg-6">
                    <?= form_open('keranjang') ?>
                      <?php
                      echo form_hidden('id', $item['id']);
                      echo form_hidden('nama', $item['nama']);
                      echo form_hidden('harga', $item['harga']);
                      echo form_hidden('foto', $item['foto']);
                      ?>
                      <div class="card">
                          <div class="card-body">
                              <img src="<?php echo base_url() . "img/" . $item['foto'] ?>" alt="..." width="100%">
                              <h5 class="card-title"><?php echo $item['nama'] ?><br><?php echo number_to_currency($item['harga'], 'IDR') ?></h5>
                              <button type="submit" class="btn btn-info rounded-pill">Beli</button>
                          </div>
                      </div>
                      <?= form_close() ?>
                  </div>
              <?php endforeach ?>
          </div>
          <!-- content-wrapper ends -->
<?= $this->endSection() ?>