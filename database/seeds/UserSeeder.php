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
            ['name' => 'Mg Mg', 'email' => 'mgmg@bm.com' , 'role' => 'admin'],
            ['name' => 'Aung Aung', 'email' => 'agag@bm.com' , 'role' => 'author'],
            ['name' => 'TunTun', 'email' => 'example@bm.com', 'role' => 'guest'],
        ];

        foreach($persons as $person) {
            $user = new App\User();
            $user->name = $person['name'];
            $user->email = $person['email'];
            $user->password = bcrypt('123123123');
            $user->role = $person['role'];
            $user->save();
        }

    }
}
