<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name_ar'=> 'القاهرة', 'name_en'=> 'Cairo'],
            ['name_ar'=> 'الإسكندرية', 'name_en'=> 'Alexandria'],
            ['name_ar'=> 'الغردقة', 'name_en'=> 'Hurghada'],
            ['name_ar'=> 'شرم الشيخ', 'name_en'=> 'Sharm El Sheikh'],
            ['name_ar'=> 'الأقصر', 'name_en'=> 'Luxor'],
            ['name_ar'=> 'أسوان', 'name_en'=> 'Aswan'],
            ['name_ar'=> 'المنصورة', 'name_en'=> 'Mansoura'],
            ['name_ar'=> 'طنطا', 'name_en'=> 'Tanta'],
        ];

        foreach($cities as $city)
        {
            City::Create($city);
        }
    }
}
