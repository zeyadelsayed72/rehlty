<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ads = [
            [
                'user_id'=> 1,
                'category_id'=> 1,
                'city_id'=> 3,
                'title_ar'=> 'رحلة الغردقة 5 أيام',
                'title_en'=> 'Hurghada Trip 5 Days',
                'description_ar'=> 'رحلة ممتعة للغردقة تشمل الإقامة والمواصلات',
                'description_en'=> 'Amazing trip to Hurghada including accommodation and transport',
                'price'=> 2500,
                'show_price'=> true,
                'type'=> 'featured',
                'whatsapp'=> '0123456789',
                'phone'=> '0123456789',
            ],

            [
                'user_id'=> 1,
                'category_id'=> 2,
                'city_id'=> 1,
                'title_ar'=> 'رحلة إسطنبول 7 أيام',
                'title_en'=> 'Istanbul Trip 7 Days',
                'description_ar'=> 'رحلة سياحية إسطنبول تشمل الفندق والجولات',
                'description_en'=> 'Istanbul tour including hotel and tours',
                'price'=> 8000,
                'show_price'=> true,
                'type'=> 'normal',
                'whatsapp'=> '0123456789',
                'phone'=> '0123456789',
            ],
        ];

        foreach($ads as $ad)
            {
                Ad::Create($ad);
            }
    }
}
