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
                    <form action="<?= base_url('dashboard/tambah_stock'); ?>" method="POST">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_barang" id="kodebarang" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" readonly autocomplete="off" required name="stock">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tambah Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="qty" required name="jumlah_tambahan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-success float-right"><b>Tambah Stok</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($semuaStock->result_array() as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['kodebrg'] ?></td>
                                    <td><?= $row['namabrg'] ?></td>
                                    <td><?= $row['qtybeli'] ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>