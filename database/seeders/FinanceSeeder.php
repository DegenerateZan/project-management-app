<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finances')->insert([
            'finance_amount' => 120000,
            'amount' => 12.0000,
            'mutation' => 'Debit',
            'description' => 'Beli Meja',
            'date' => '2020-02-02',
        ]);
    }
}
