<?php

use Illuminate\Database\Seeder;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama'=>'Ari Andriana', 'jabatan'=>'Manager', 'jk'=>'Laki - Laki',
             'alamat'=>'Taman Cibaduyut Indah', 'agama'=>'Islam', 'total_gaji'=>'Rp. 5 Jt'],
            ['nama'=>'Refana', 'jabatan'=>'Manager Divisi Pengembangan', 'jk'=>'Laki - Laki',
             'alamat'=>'Cicaheum', 'agama'=>'Islam', 'total_gaji'=>'Rp. 4 Jt'],
            ['nama'=>'Nauly', 'jabatan'=>'HRD', 'jk'=>'Laki - Laki',
             'alamat'=>'Leuwi Panjang', 'agama'=>'Islam', 'total_gaji'=>'Rp. 4.5 Jt'],
            ['nama'=>'XXX', 'jabatan'=>'Pegawai', 'jk'=>'Laki - Laki',
             'alamat'=>'XXX XXX', 'agama'=>'Islam', 'total_gaji'=>'Rp. 3 Jt'], 
            ['nama'=>'Rama Yasdika', 'jabatan'=>'Manager Keuangan', 'jk'=>'Laki - Laki',
            'alamat'=>'Bojong Malaka Indah', 'agama'=>'Islam', 'total_gaji'=>'Rp. 5 Jt']
        ];
        DB::table('penggajians')->insert($data);
    }
}
