<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                'name' => 'Ash Ketchum',
                'age' => 10,
                'gender' => 'gender',
                'email' => 'ash@gmail.com',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'Nadungamuwe Raaja',
                'age' => 21,
                'gender' => 'male',
                'email' => 'raaja@gmail.com',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'aalaara kaaraama',
                'age' => 13,
                'gender' => 'male',
                'email' => 'aalaara@gmail.com',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );
    }
}
