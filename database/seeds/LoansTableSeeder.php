<?php

use Illuminate\Database\Seeder;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loans')->insert(
            array(
                'amount' => 2555000,
                'start_date' => "2017-02-26 10:27:01",
                'status' => 3
            )
        );

        DB::table('loans')->insert(
            array(
                'amount' => 2555000,
                'start_date' => "2017-02-26 10:27:01",
                'status' => 2
            )
        );

        DB::table('loans')->insert(
            array(
                'amount' => 2555000,
                'start_date' => "2017-02-26 10:27:01",
                'status' => 5
            )
        );
    }
}
