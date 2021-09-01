<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1,10),
                'title' => "Post ". $i,
                'slug' => "post-". $i,
                'description' => "This is post ". $i,
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis malesuada dui augue, sit amet vulputate nisl feugiat ac. Nunc massa est, pulvinar a tincidunt non, dictum et metus. Aenean eu enim ipsum. Suspendisse lobortis augue arcu, in egestas dui imperdiet vitae. Maecenas at euismod nulla. Nam pharetra neque sit amet pulvinar eleifend. Sed maximus sollicitudin velit, eu sodales elit vehicula eget. Donec auctor nec purus et faucibus. Integer erat erat, posuere sit amet diam eget, dapibus convallis sem. Curabitur nec lectus metus. Sed quis diam sed urna dignissim posuere. Pellentesque iaculis ultrices diam quis ultricies. Fusce purus sapien, ultrices vitae enim venenatis, scelerisque placerat orci</br>".$i."</p>",
            ]);
        }
    }
}
