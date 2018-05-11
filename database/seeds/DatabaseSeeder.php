<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostsTableSeed::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(TagsTableSeeder::class);
    }
}
