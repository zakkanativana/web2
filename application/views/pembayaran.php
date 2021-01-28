<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0; if( $keranjang = $this -> cart -> contents() ) {
                    foreach( $keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }    
                    echo "<h3> Total Belanja Anda : Rp. " .number_format($grand_total, 0,',','.');
               
                ?>
            </div>    <br><br>
            <h3> Input Alamat Pengiriman dan Pembayaran </h3>
        
                <form action="<?php echo base_url('dashboard/proses_pesanan')?>" method="POST">
                    <div class="form-group">
                        <label for=""> Nama Lengkap </label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for=""> Alamat Lengkap </label>
                        <input class="form-control"  type="text" name="alamat" placeholder="Alamat Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for=""> No. Handphone </label>
                        <input class="form-control"  type="text" name="no_telp" placeholder="No Handphone Anda">
                    </div>
                    <div class="form-group">
                        <label for=""> Jasa Pengiriman </label>
                        <select class="form-control" name="" id="">
                            <option> JNE </option>
                            <option> TIKI </option>
                            <option> POS INDONESIA </option>
                            <option> GOJEK </option>
                            <option> GRAB </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Pilih Bank </label>
                        <select class="form-control" name="" id="">
                            <option> BCA - xxxxx </option>
                            <option> BNI - xxxxx </option>
                            <option> BRI - xxxxx </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"> Pesan </button>
                </form>

                <?php  } else { echo "<h4> Keranjang Belanja Kosong !!"; } ?>
        </div> 
        
        <div class="col-md-2"></div>
    </div>

</div>