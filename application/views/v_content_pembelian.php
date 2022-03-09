<div class="container-fluid">
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembelian</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('dashboard/input_pembelian'); ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. Transaksi</label>
                            <div class="col-sm-10">

                                <?php
                                $no = 1;
                                $noTransaksi = 'B' . date("Ym") . $no++ ?>
                                <input type="text" readonly name="kode_supplier" class="form-control-plaintext" value="<?= $noTransaksi; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_barang" id="kodebarang" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" readonly autocomplete="off" id="harga" required name="harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Qty</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="qty" required name="nama_supplier">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Total</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="total" autocomplete="off" required name="total">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-success float-right"><b>Input Supplier</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>