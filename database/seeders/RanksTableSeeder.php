<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('ranks')->delete();
        
        \DB::table('ranks')->insert(array (
            0 => 
            array (
                'created_at' => '2021-01-06 01:40:47',
                'deleted_at' => NULL,
                'display_name' => '최고 관리자',
                'id' => 1,
                'name' => 'supper_admin',
                'updated_at' => '2021-01-06 01:40:47',
            ),
            1 => 
            array (
                'created_at' => '2021-01-06 01:40:47',
                'deleted_at' => NULL,
                'display_name' => '일반 관리자',
                'id' => 2,
                'name' => 'admin',
                'updated_at' => '2021-01-06 01:40:47',
            ),
            2 => 
            array (
                'created_at' => '2021-01-06 01:40:47',
                'deleted_at' => NULL,
                'display_name' => '가맹점주',
                'id' => 3,
                'name' => 'product_owner',
                'updated_at' => '2021-01-06 01:40:47',
            ),
            3 => 
            array (
                'created_at' => '2021-01-06 01:40:47',
                'deleted_at' => NULL,
                'display_name' => '공급업체',
                'id' => 4,
                'name' => 'supplier',
                'updated_at' => '2021-01-06 01:40:47',
            ),
            4 => 
            array (
                'created_at' => '2021-01-06 01:40:47',
                'deleted_at' => NULL,
                'display_name' => '영업 관리자',
                'id' => 5,
                'name' => 'business_admin',
                'updated_at' => '2021-01-06 01:40:47',
            ),
            5 => 
            array (
                'created_at' => '2021-04-29 09:41:44',
                'deleted_at' => NULL,
                'display_name' => '아르바이트',
                'id' => 6,
                'name' => 'part_time_worker',
                'updated_at' => '2021-04-29 09:41:44',
            ),
        ));
        
        
    }
}