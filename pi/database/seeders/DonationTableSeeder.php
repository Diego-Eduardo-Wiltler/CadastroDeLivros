<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonationTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Donation::create([
        "title" => "A",
        "city" => "Leme",
        "cep" => 13611209,
        "phone" => "19989550027",
        "email" => "wiltlereduardo@gmail.com",
        "description" => "sdasdasd",
        "category" => "Lirico",
        "image" => "d7b9dcd9618a0435b69328c69c12bc5a.jpg",
        "items" => "['Possui rasuras']",
        "date" => "3422-04-23 00:00:00",
        "user_id" => 2,
       ]);
    }
}
