<?php

defined('BASEPATH') or exit('No direct script access allowed');
if (!function_exists('element')) {
    function tampilkan($nama)
    {
        return "Selamat Datang <b>$nama</b> di sini";
    }

    function penjumlahan($nilai1, $nilai2)
    {
        return $nilai1 + $nilai2;
    }

    function get_Shopping_cart($category_id)
    {
        $CI = &get_instance();
        $data_product = $CI->db->get_where('product', array('category_id' => $category_id))->row_array();
        return $data_product['product_name'];
    }
}
