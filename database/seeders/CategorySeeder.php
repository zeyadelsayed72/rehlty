<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories= [
            ['name_ar'=> 'سياحه داخليه', 'name_en'=> 'Domestic Tourism'],
            ['name_ar'=> 'سياحه خارجيه', 'name_en'=> 'International Tourism'],
            ['name_ar'=> 'فنادق', 'name_en'=> 'Hotels'],
            ['name_ar'=> 'شاليهات', 'name_en'=> 'Chalets'],
            ['name_ar'=> 'رحلات بحريه', 'name_en'=> 'Sea Trips'],
        ];

        foreach($categories as $Category)
        {
            $parent= Category::create($Category);

            Category::Create([
            'name_ar'=> $Category['name_ar'] . ' - فرعي 1',
            'name_en'=> $Category['name_en'] . ' - Sub 1',
            'parent_id'=> $parent->id,
            ]);

                Category::create([
                'name_ar'=> $Category['name_ar'] . ' - فرعي 2',
                'name_en'=> $Category['name_en'] . ' - Sub 2',
                'parent_id'=> $parent->id,
            ]);
        }
    }
}
