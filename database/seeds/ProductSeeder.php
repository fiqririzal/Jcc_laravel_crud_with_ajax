<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_category_id'=>1,
            'name'=>'indomeie goreng',
            'price'=>3500,
            'created_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('products')->insert([
            'product_category_id' => 2,
            'name' => 'Nutrisari ',
            'price' => 1000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'product_category_id' => 3,
            'name' => 'apa weh',
            'price' => 35000000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
