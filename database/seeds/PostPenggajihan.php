<?php

use Illuminate\Database\Seeder;

class PostPenggajihan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama'=>'Vinatn','jabatan'=>'Manager','jk'=>'Perempuan','alamat'=>'Cijerah','agama'=>'Islam','total_gaji'=>'3500000'],
            ['nama'=>'Yulianti','jabatan'=>'Sekertaris','jk'=>'Perempuan','alamat'=>'Rancamanyar','agama'=>'Islam','total_gaji'=>'3000000'],
            ['nama'=>'Priska','jabatan'=>'Hrd','jk'=>'Perempuan','alamat'=>'Bmi','agama'=>'Islam','total_gaji'=>'2500000'],
            ['nama'=>'Dinda','jabatan'=>'Bendahara','jk'=>'Perempuan','alamat'=>'Boneng','agama'=>'Islam','total_gaji'=>'2000000']
        ];
        DB::table('penggajihans')->insert($data);
    }
}
