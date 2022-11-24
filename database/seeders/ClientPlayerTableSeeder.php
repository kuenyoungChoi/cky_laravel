<?php

namespace Database\Seeders;

use App\Models\Client\ClientPlayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientPlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientPlayer::factory(10)->create();
    }
}
