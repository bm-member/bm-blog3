<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $persons = [
            ['name' => 'Mg Mg', 'email' => 'mgmg@bm.com'],
            ['name' => 'Aung Aung', 'email' => 'agag@bm.com'],
            ['name' => 'TunTun', 'email' => 'example@bm.com'],
        ];

        foreach($persons as $person) {
            $user = new App\User();
            $user->name = $person['name'];
            $user->email = $person['email'];
            $user->password = bcrypt('123123123');
            $user->save();
        }

    }
}
