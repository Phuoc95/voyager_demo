<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankCodeDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_code_data')->delete();
        
        \DB::table('bank_code_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '002',
                'bank' => '산업은행',
                'created_at' => '2020-10-08 10:13:57',
                'updated_at' => '2020-10-08 10:13:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '003',
                'bank' => '기업은행',
                'created_at' => '2020-10-08 10:14:11',
                'updated_at' => '2020-10-08 10:14:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '004',
                'bank' => '국민은행',
                'created_at' => '2020-10-08 10:14:22',
                'updated_at' => '2020-10-08 10:14:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'code' => '007',
                'bank' => '수협은행',
                'created_at' => '2020-10-08 10:14:42',
                'updated_at' => '2020-10-20 10:15:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'code' => '011',
                'bank' => '농협',
                'created_at' => '2020-10-08 10:14:48',
                'updated_at' => '2020-10-08 10:14:48',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'code' => '020',
                'bank' => '우리은행',
                'created_at' => '2020-10-08 10:14:55',
                'updated_at' => '2020-10-08 10:14:55',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'code' => '023',
                'bank' => 'SC제일은행',
                'created_at' => '2020-10-08 10:15:03',
                'updated_at' => '2020-10-20 10:15:25',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'code' => '027',
                'bank' => '한국씨티은행',
                'created_at' => '2020-10-08 10:15:12',
                'updated_at' => '2020-10-08 10:15:12',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'code' => '031',
                'bank' => '대구은행',
                'created_at' => '2020-10-08 10:15:18',
                'updated_at' => '2020-10-08 10:15:18',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'code' => '032',
                'bank' => '부산은행',
                'created_at' => '2020-10-08 10:15:26',
                'updated_at' => '2020-10-08 10:15:26',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'code' => '034',
                'bank' => '광주은행',
                'created_at' => '2020-10-08 10:15:34',
                'updated_at' => '2020-10-08 10:15:34',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'code' => '035',
                'bank' => '제주은행',
                'created_at' => '2020-10-08 10:15:41',
                'updated_at' => '2020-10-08 10:15:41',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'code' => '037',
                'bank' => '전북은행',
                'created_at' => '2020-10-08 10:15:51',
                'updated_at' => '2020-10-08 10:15:51',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'code' => '039',
                'bank' => '경남은행',
                'created_at' => '2020-10-08 10:16:04',
                'updated_at' => '2020-10-08 10:16:04',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'code' => '045',
                'bank' => '새마을금고',
                'created_at' => '2020-10-08 10:16:11',
                'updated_at' => '2020-10-20 10:15:11',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'code' => '048',
                'bank' => '신협중앙회',
                'created_at' => '2020-10-08 10:16:20',
                'updated_at' => '2020-10-08 10:16:27',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'code' => '071',
                'bank' => '우체국',
                'created_at' => '2020-10-08 10:16:41',
                'updated_at' => '2020-10-08 10:16:41',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'code' => '081',
                'bank' => 'KEB하나',
                'created_at' => '2020-10-08 10:16:48',
                'updated_at' => '2020-10-20 10:15:05',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'code' => '088',
                'bank' => '신한은행',
                'created_at' => '2020-10-08 10:16:59',
                'updated_at' => '2020-10-08 10:16:59',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'code' => '089',
                'bank' => '케이뱅크',
                'created_at' => '2020-10-08 10:17:06',
                'updated_at' => '2020-10-08 10:17:06',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'code' => '090',
                'bank' => '카카오뱅크',
                'created_at' => '2020-10-08 10:17:15',
                'updated_at' => '2020-10-20 10:15:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}