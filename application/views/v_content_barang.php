<div class="container-fluid">
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Barang</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('dashboard/input_barang'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-10">
                                <?php $kodeBarang = bin2hex(random_bytes(3)) ?>
                                <input type="text" readonly name="kode_barang" class="form-control-plaintext" value="<?= $kodeBarang ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="nama_barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Satuan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" required name="satuan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" required name="harga" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-success float-right"><b>Input Barang</b></button>
                            </div>
                        </div>
                    </form>
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
                                    <th>Satuan</th>
                                    <th>Harga Beli</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;

                                foreach ($semuaBarang->result_array() as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['kodebrg'] ?></td>
                                        <td><?= $row['namabrg'] ?></td>
                                        <td><?= $row['hargabeli'] ?></td>
                                        <td><?= $row['satuan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>