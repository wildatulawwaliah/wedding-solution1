<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_stok_awal extends CI_Model {

    public function all($params = null){
      $this->db->select('b.*,k.kategori,sa.w_insert,sa.stok_awal,sa.publish')
      ->join('barang_awal b','b.id_ba=sa.id_ba')
      ->join('kategori k','k.kode_kategori=b.kode_kategori')
      ->join('supplier s','s.kode_supplier=sa.kode_supplier');
      if (!is_null($params)) {
        $this->db->where(['s.id_user' => $params]);
      }
      return $this->db->get('stok_awal sa');
    }







}
