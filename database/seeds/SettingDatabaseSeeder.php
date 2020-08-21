<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\SettingTranslation;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_lcoal' => 'ar',
            'default_timezone' => 'Africa/cairo',
            'reviews_enabled' => 'true',
            'auto_approve_reviews' => 'true',
            'supported_currencies' => ['USD','USD'],
            'default_currency' => 'USD',
            'store_email' => 'admin@ecommerce.com',
            'search_engine' => 'mysql',
            'local_pickup_cost' => '0',
            'outer_label' => '0',
            'free_shiping' => '0',

            'translatable' => [
                'store_name' => 'Flee',
                'free_shiping_label' => 'Free Shiping',
                'lcoal_label' => 'local shiping',
                'outer_label' => 'outer shipiing',
            ]


        ]);
    }
}
