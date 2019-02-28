<?php

use Illuminate\Database\Seeder;
use App\Text;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Truncate all data of texts table
    	Text::truncate();
    	// Create default data for texts table
        Text::create([
        	'color_cup' => config('default.color_cup'),
			'type_drink' => config('default.type_drink'),
			'table_material' => config('default.table_material'),
			'temperature' => config('default.temperature'),
        ]);
    }
}
