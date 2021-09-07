<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(BankCodeDataTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(DepositRegistrationsTableSeeder::class);
        $this->call(DepositsTableSeeder::class);
        $this->call(ExcelTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(RanksTableSeeder::class);
    }
}
