<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach($barang as $brg) :?>
            <div class="row">
          
                <div class="col-md-4">  <img src="<?php echo base_url(). 'uploads/'. $brg->gambar ?>" class="card-img-top"></div>

                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td> Nama Produk </td>
                            <td><b><?php echo $brg->nama_brg ?></b></td>
                        </tr>
                        <tr>
                            <td> Keterangan </td>
                            <td><b><?php echo $brg->keterangan ?></b></td>
                        </tr>
                        <tr>
                            <td> Kategori </td>
                            <td><b><?php echo $brg->kategori ?></b></td>
                        </tr>
                        <tr>
                            <td> Stok </td>
                            <td><b><?php echo $brg->stok ?></b></td>
                        </tr>
                        <tr>
                            <td> Harga </td>
                            <td> <b>
                                <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div>
                            </b></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_keranjang/'. $brg -> id_brg, '<div class="btn btn-sm btn-primary"> Tambah Keranjang </div>') ?>

                    <?php echo anchor('welcome','<div class="btn btn-sm btn-danger"> Kembali </div>') ?>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>