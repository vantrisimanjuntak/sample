<div class="container-fluid">
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Supplier</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('dashboard/input_supplier'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Supplier</label>
                            <div class="col-sm-10">
                                <?php $kodeSupplier = 'S' . bin2hex(random_bytes(4)) ?>
                                <input type="text" readonly name="kode_supplier" class="form-control-plaintext" value="<?= $kodeSupplier ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Supplier</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="nama_supplier">
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
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Supplier</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Supplier</th>
                                    <th>Nama Supplier</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;

                                foreach ($semuaSupplier->result_array() as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['kodespl'] ?></td>
                                        <td><?= $row['namaspl'] ?></td>
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