<?php

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* $posts = [
            [
                'title' => 'Lorem Ipsum',
                'author' => 'Jhon Doe',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur asperiores, odit vitae ratione illum eligendi possimus adipisci quisquam dolores eaque voluptatum quos omnis quaerat quia aspernatur. Inventore ipsum aliquid hic.',
                'image' => 'https://picsum.photos/id/237/200/300',
                'time' => '11.43',
            ],
        ];

        foreach ($posts as $post) {
            $_post = new Post();
            $_post->title = $post['title'];
            $_post->author = $post['author'];
            $_post->description = $post['description'];
            $_post->image = $post['image'];
            $_post->time = $post['time'];
            $_post->save();
        } */

        for ($i = 0; $i < 80; $i++) {
            $_post = new Post();
            $_post->title = $faker->sentence();
            $_post->author = $faker->name(null);
            $_post->description = $faker->paragraph();
            $_post->image = $faker->imageUrl();
            $_post->time = $faker->time();
            $_post->save();
        }
    }
}