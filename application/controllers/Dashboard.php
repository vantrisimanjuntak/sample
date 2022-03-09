<?php class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('dashboard_v', $data);
    }
    function barang()
    {
        $data['title'] = 'Dashboard | Barang';
        $data['semuaBarang'] = $this->Main_model->getAllBarang();
        $this->load->view('barang_v', $data);
    }
    function input_barang()
    {
        $kodeBarang = $this->input->post('kode_barang');
        $namaBarang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');

        if ($kodeBarang !== '' | $namaBarang !== ' ' | $satuan !== ' ' | $harga !== ' ') {
            $dataBarang = $this->Main_model->input_barang($kodeBarang, $namaBarang, $satuan, $harga);
            if ($dataBarang == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Data Berhasil Ditambahkan</div>');
                redirect('dashboard/barang');
            } else {
                $this->session->set_flashdata('Failed', '<div class="alert alert-primary" role="alert">
                Data Berhasil Ditambahkan
              </div>');
                redirect('dashboard/barang');
            }
        } else {
            redirect('dashboard/barang');
        }
    }
    function supplier()
    {
        $data['title'] = 'Dashboard | Supplier';
        $data['semuaSupplier'] = $this->Main_model->getAllSupplier();
        $this->load->view('supplier_v', $data);
    }
    function input_supplier()
    {
        $kodesupplier = $this->input->post('kode_supplier');
        $namasupplier = $this->input->post('nama_supplier');

        if ($kodesupplier != " ") {
            $dataSupplier = $this->Main_model->input_supplier($kodesupplier, $namasupplier);
            if ($dataSupplier == TRUE) {
                $base_url = base_url();
                echo "<script>
                alert('Supplier Berhasil Ditambahkan');
                window.location.href = '$base_url' + 'dashboard/supplier';
                </script>";
            } else {
                redirect('dashboard/supplier');
            }
        }
    }
    function pembelian()
    {
        $data['title'] = 'Dashboard | Pembelian';
        $this->load->view('pembelian_v', $data);
    }
    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->Main_model->cari_kode($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $arr_result[] = array(
                        "label" => $row->kodebrg,
                        "harga_beli" => $row->hargabeli
                    );
                    echo json_encode($arr_result);
                }
            }
        }
    }
    function stock()
    {
        $data['title'] = 'Dashboard | Stock';
        $data['semuaStock'] = $this->Main_model->getStock();
        $this->load->view('stock_v', $data);
    }
    function get_stockByCode()
    {
        if (isset($_GET['term'])) {
            $result = $this->Main_model->cari_stokByCode($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $arr_result[] = array(
                        "label" => $row->kodebrg,
                        "jumlah_stok" => $row->qtybeli
                    );
                    echo json_encode($arr_result);
                }
            }
        }
    }
    function tambah_stock()
    {
        $kodeBarang = $this->input->post('kode_barang');
        $jumlahTambahan = $this->input->post('jumlah_tambahan');

        $dataTambahStock = $this->Main_model->tambahStock($kodeBarang, $jumlahTambahan);
        if ($dataTambahStock == TRUE) {
            redirect('dashboard/stock');
        } else {
            redirect('dashboard/stock');
        }
    }
}
