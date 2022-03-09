<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('account');
        return $query;
    }
    function input_barang($kodeBarang, $namaBarang, $satuan, $harga)
    {
        $dataBarang = array(
            'kodebrg' => $kodeBarang,
            'namabrg' => $namaBarang,
            'satuan' => $satuan,
            'hargabeli' => $harga
        );

        $this->db->insert('tbl_barang', $dataBarang);
    }
    function getAllBarang()
    {
        $queryGetAllBarang =  $this->db->get('tbl_barang');
        return $queryGetAllBarang;
    }
    function getAllSupplier()
    {
        $queryGetAllSupplier = $this->db->get('tbl_suplier');
        return $queryGetAllSupplier;
    }
    function input_supplier($kodesupplier, $namasupplier)
    {
        $dataSupplier = array(
            'kodespl' => $kodesupplier,
            'namaspl' => $namasupplier
        );
        $this->db->insert('tbl_suplier', $dataSupplier);
    }
    function cari_kode($kode)
    {
        $this->db->like('kodebrg', $kode);
        $this->db->order_by('kodebrg', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tbl_barang')->result();
    }
    function cari_stokByCode($kode)
    {
        $this->db->like('kodebrg', $kode);
        $this->db->order_by('kodebrg', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tbl_stock')->result();
    }
    function tambahStock($kodeBarang, $jumlahBarang)
    {
        $this->db->set('qtybeli', $jumlahBarang);
        $this->db->where('kodebrg', $kodeBarang);
        $this->db->update('tbl_stock');
    }
    function getStock()
    {
        $this->db->select('*');
        $this->db->from('tbl_stock');
        $this->db->join('tbl_barang', 'tbl_barang.kodebrg = tbl_stock.kodebrg');
        $query = $this->db->get();
        return $query;
    }
}
