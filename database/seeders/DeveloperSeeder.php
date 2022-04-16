<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            'name' => 'david mahubi',
            'account_number' => '68686868',
            'telphone_number' => '0889899',
            'email' => 'david@gmail.com'
        ]);
    }
}
