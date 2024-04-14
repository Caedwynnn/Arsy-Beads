<?= $this->extend('template/layout') ?>

<?= $this->section('judul') ?>
    List Produk
<?= $this->endSection() ?>

<?= $this->section('konten') ?>
<h3>Pencarian Produk : <?= $pencarian_id_produk==''?'Tidak ada pencarian':$pencarian_id_produk ?></h3>
<hr/>

<form>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<form>
    <div class="container-fluid p-1">
        <div class="row justify-content-lg-start">
            <?php foreach ($data as $index => $row) { ?>
                <div class="col-lg-3 pt-2 pb-2 text-center">
                    <img class="bd-placeholder-img rounded-circle mx-auto" src="<?= base_url('foto_produk/'.$row->foto_produk) ?>" width="140" height="140">
                    <div class="d-flex justify-content-center">
                        <h6 class="harga" style="margin-right: 10px;">Rp <?= $row->harga ?></h6>
                        <h6 class="stok"> Stock : <?= $row->stok ?></h6>
                    </div>
                    <p><a class="btn btn-dark" href="/produk">Beli</a></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php if (count($data) == 0) {
        echo ' <tr><td colspan="7"><b>Data Produk Tidak Ditemukan</b></td></tr>';
    } ?>
</form>
<?= $this->endSection() ?>