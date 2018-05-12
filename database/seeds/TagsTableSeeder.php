<?php

use App\PostTag;
use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
        	'name' => 'personal'
        ]); 
        Tag::create([
        	'name' => 'php'
        ]);
        PostTag::create([
        	'post_id' => 1,
        	'tag_id' => 1
        ]);
        PostTag::create([
            'post_id' => 2,
            'tag_id' => 1
        ]);
		PostTag::create([
        	'post_id' => 3,
        	'tag_id' => 2
        ]);

    }
}
