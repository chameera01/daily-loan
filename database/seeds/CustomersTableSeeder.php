<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            array(
                'name' => 'Ranil Wickramasinghe',
                'nic' => '924658763v',
                'mobile' => '0716485246',
                'address' => 'no:23, Independence Street, Colombo 7',
                'location' => 6289465,
                'pic' => 'ranil.png',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );

        DB::table('customers')->insert(
            array(
                'name' => 'Maithreepala Sirisena',
                'nic' => '994658763v',
                'mobile' => '0775585246',
                'address' => 'no:77/B, Parakrama Samudraya, Polonnaruwa',
                'location' => 9989465,
                'pic' => 'maithree.png',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );

        DB::table('customers')->insert(
            array(
                'name' => 'Chandrika Kumarathunga',
                'nic' => '884658763v',
                'mobile' => '0785585246',
                'address' => 'no:65/A, Polambegoda Rd, Nittambuwa',
                'location' => 7289465,
                'pic' => 'chandi.png',
                "created_at" => "2017-02-26 10:27:01",
                "updated_at" => "2017-02-26 10:27:01"
            )
        );
    }
}
