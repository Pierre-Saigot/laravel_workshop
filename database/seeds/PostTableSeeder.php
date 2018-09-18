<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		Storage::disk('local')->delete(Storage::allFiles());
		factory(App\Post::class, 10)->create()->each(function($post){
			$link = str_random(12) . '.jpg';

			$file = file_get_contents('https://picsum.photos/250/250');
			Storage::disk('local')->put($link, $file);

			$post->pictures()->create([
				'title' => 'Default', //Valeur par défaut
				'link' => $link, 
			]);
			$post->save();
    		});
	}
}
