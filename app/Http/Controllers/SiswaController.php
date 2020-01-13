<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function hallo(){
        return "Hallo Dunia";
    }
    public function sekolah(){
        return "Smk Assalaam Bandung";
    }
    public function kelas(){
        return "XI RPL 2";
    }
    public function alamat(){
        return "TCI";
    }
    public function nama(){
        return "Nama Saya Ari Andriana";
    }
    public function umur(){
        return "Umur saya 16 Tahun";
    }
    public function ttl(){
        return "Saya Lahir di Bandung, 31 Desember 2003";
    }
    public function smp(){
        return "Saya SMP Sekolah di SMPN 2 Dayeuhkolot";
    }
    public function laptop(){
        return "ACER ASPIRE 3";
    }
    public function teman(){
        return "Saya memiliki banyak teman";
    }
    public function warnakucing($warna = null){
        if (isset($warna)) {
            echo "Warna Kucing kamu adalah : ".$warna;
        } elseif(!$warna){
            echo "Kamu belum memberi warna kucing kamu";
        }
    }
    public function jual($makan = null, $harga = null){
        if (isset($makan)) {
            echo "Anda membeli ".$makan;
        } if (isset($harga)) {
            if ($harga >= 15000) {
                echo " dengan ukuran Jumbo";
            } elseif ($harga < 15000 && $harga >= 7500) {
                echo " dengan ukuran Medium";
            } elseif ($harga < 7500) {
                echo " dengan ukuran Small";
            }
        } if(!$makan){
            echo "Anda belum memesan";
        }
    }
}
