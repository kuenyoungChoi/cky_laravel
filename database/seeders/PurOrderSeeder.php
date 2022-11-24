<?php

namespace Database\Seeders;

use App\Models\PurOrder\PurOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use Ramsey\Uuid\Type\Integer;

class PurOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurOrder::factory(10)->create();
    }
}
