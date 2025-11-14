<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Factory;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
         $mycategory3= new Category();
        $mycategory3->name='Todas';
        $mycategory3->save();

        Category::factory(20)->create();
       
    }
}
