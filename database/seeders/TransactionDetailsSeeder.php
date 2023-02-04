<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            'id' => 2,
            'transactions_id' => 2,
            'usename' => 'arimin',
            'nationality' => 'ID',
            'is_visa' => 1,
            'doe_passport' => '2023-01-31',
            'deleted_at' => null,
            'created_at' => null,
            'updated_at' => null
        ]);
    }
}
