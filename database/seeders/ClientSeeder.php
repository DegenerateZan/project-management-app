<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('clients')->insert([
            'name_client' => 'muhammad eka saputra',
            'addres' => 'Muncar',
            'email' => 'ekasaputra@gmail.com',
            'number_account' => '78998989',
            'number_phone' => '89898989',
            'company_name' => 'Pabrik Sarden'
        ]);

    }
}
