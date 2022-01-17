<?php

namespace Database\Seeders;

use App\Models\Costumer;
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
        $this->costumer();
    }

    public function costumer(){
        Costumer::create([
            'costumer_code'=>'001',
            'costumer_name'=>'Umum',
            'costumer_address'=>'-',
            'user_modify'=>'su',
            'user_id'=>1
        ]);
    }
}
