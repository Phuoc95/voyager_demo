<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepositRegistrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deposit_registrations')->delete();
        
        \DB::table('deposit_registrations')->insert(array (
            0 => 
            array (
                'id' => 7,
                'supplier_id' => 70,
                'deposit_id' => 325,
                'first_money' => 400000000,
                'money' => '200000000',
                'fee' => 500,
                'last_money' => 199999500,
                'withdrawer' => 'Supplierqa',
                'receive_bank' => 'TichBank',
                'receive_bank_account_number' => 'Lee jo Oc',
                'deposit_date' => '2021-03-12 18:11:30',
                'created_at' => '2021-03-12 18:11:30',
                'updated_at' => '2021-03-12 18:11:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'supplier_id' => 71,
                'deposit_id' => 344,
                'first_money' => 552000,
                'money' => '551500',
                'fee' => 500,
                'last_money' => 0,
                'withdrawer' => 'tien_supper',
                'receive_bank' => 'TP-bank',
                'receive_bank_account_number' => '2321',
                'deposit_date' => '2021-03-15 15:53:59',
                'created_at' => '2021-03-15 15:53:59',
                'updated_at' => '2021-03-15 15:53:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'supplier_id' => 71,
                'deposit_id' => 385,
                'first_money' => 553056,
                'money' => '552556',
                'fee' => 500,
                'last_money' => 0,
                'withdrawer' => 'tien_supper',
                'receive_bank' => 'TP-bank',
                'receive_bank_account_number' => '2321',
                'deposit_date' => '2021-03-16 17:39:35',
                'created_at' => '2021-03-16 17:39:35',
                'updated_at' => '2021-03-16 17:39:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'supplier_id' => 81,
                'deposit_id' => 435,
                'first_money' => 99684,
                'money' => '99184',
                'fee' => 500,
                'last_money' => 0,
                'withdrawer' => 'Tien Luong',
                'receive_bank' => '234123',
                'receive_bank_account_number' => '234214142',
                'deposit_date' => '2021-03-18 16:07:28',
                'created_at' => '2021-03-18 16:07:28',
                'updated_at' => '2021-03-18 16:07:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'supplier_id' => 71,
                'deposit_id' => 452,
                'first_money' => 768596,
                'money' => '511488',
                'fee' => 500,
                'last_money' => 256608,
                'withdrawer' => 'tien_supper',
                'receive_bank' => 'TP-bank',
                'receive_bank_account_number' => '210251255125',
                'deposit_date' => '2021-03-24 14:53:13',
                'created_at' => '2021-03-24 14:53:13',
                'updated_at' => '2021-03-24 14:53:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'supplier_id' => 82,
                'deposit_id' => 475,
                'first_money' => 308000,
                'money' => '43500',
                'fee' => 500,
                'last_money' => 264000,
                'withdrawer' => 'Tien Luong123',
                'receive_bank' => 'Tien Luong',
                'receive_bank_account_number' => '1313',
                'deposit_date' => '2021-03-24 19:04:02',
                'created_at' => '2021-03-24 19:04:02',
                'updated_at' => '2021-03-24 19:04:02',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'supplier_id' => 70,
                'deposit_id' => 433,
                'first_money' => 371424500,
                'money' => '171424500',
                'fee' => 500,
                'last_money' => 199999500,
                'withdrawer' => 'Supplierqa',
                'receive_bank' => 'TichBank',
                'receive_bank_account_number' => '3414134141413',
                'deposit_date' => '2021-03-24 19:05:50',
                'created_at' => '2021-03-24 19:05:50',
                'updated_at' => '2021-03-24 19:05:50',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'supplier_id' => 82,
                'deposit_id' => 477,
                'first_money' => 264288,
                'money' => '263788',
                'fee' => 500,
                'last_money' => 0,
                'withdrawer' => 'Tien Luong123',
                'receive_bank' => 'Tien Luong',
                'receive_bank_account_number' => '1313',
                'deposit_date' => '2021-03-25 10:43:15',
                'created_at' => '2021-03-25 10:43:15',
                'updated_at' => '2021-03-25 10:43:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 17,
                'supplier_id' => 82,
                'deposit_id' => 517,
                'first_money' => 561070,
                'money' => '560570',
                'fee' => 500,
                'last_money' => 0,
                'withdrawer' => 'Tien Luong123',
                'receive_bank' => 'Tien Luong',
                'receive_bank_account_number' => '1313',
                'deposit_date' => '2021-03-29 16:22:48',
                'created_at' => '2021-03-29 16:22:48',
                'updated_at' => '2021-03-29 16:22:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}