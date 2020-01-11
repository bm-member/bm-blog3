<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
   
        // for ($i=0; $i < 50; $i++) { 
        //     $post = new App\Post();
        //     $post->title = $faker->text(10);
        //     $post->content = $faker->text(200);
        //     $post->user_id = rand(1, 3);
        //     $post->save();
        // }

        factory(App\Post::class, 50)->create();
        
    }
}
