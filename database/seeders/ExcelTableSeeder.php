<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExcelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('excel')->delete();
        
        \DB::table('excel')->insert(array (
            0 => 
            array (
                'id' => 5,
                'path' => '210507_문구상품등록.xlsx',
                'created_at' => '2021-05-07 06:11:32',
                'updated_at' => '2021-05-07 06:11:32',
            ),
            1 => 
            array (
                'id' => 6,
                'path' => '210507_문구상품등록.xlsx',
                'created_at' => '2021-05-07 06:26:48',
                'updated_at' => '2021-05-07 06:26:48',
            ),
            2 => 
            array (
                'id' => 7,
                'path' => '210507_문구상품등록.xlsx',
                'created_at' => '2021-05-10 00:11:38',
                'updated_at' => '2021-05-10 00:11:38',
            ),
        ));
        
        
    }
}