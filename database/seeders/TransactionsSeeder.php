<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id' => 1,
            'travel_packages_id' => 1,
            'user_id' => 10,
            'additional_visa' => 'N/A',
            'transaction_total' => 150000,
            'transaction_status' => 'PENDING',
            'deleted_at' => null,
            'created_at' => null,
            'updated_at' => null
        ]);
    }
}
