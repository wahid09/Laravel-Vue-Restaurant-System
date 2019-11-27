<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $categories = factory(\App\Models\Category::class, 5)->create();
         $categories->each(function($category){
              factory(\App\Models\Menu::class, 3)->create([
                'category_id' => $category->id,
              ]);
         });
    }
}
