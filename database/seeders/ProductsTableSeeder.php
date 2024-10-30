<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Proteine schepje',
            'description' => 'De grooste lepel ter wereld',
            'price' => 13.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteineschepje.jpg',
        ]);

        Product::create([
            'name' => 'Proteine  kleinere schepje',
            'description' => 'De kleinere lepel ter wereld',
            'price' => 9.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteineschepje2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine bundle',
            'description' => 'De grooste bundle ter wereld',
            'price' => 13.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteineBundle.png',
        ]);

        Product::create([
            'name' => 'Proteine bundle',
            'description' => 'De grooste bundle2 ter wereld',
            'price' => 23.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteineBundle2.png',
        ]);

        Product::create([
            'name' => 'Proteine pot',
            'description' => 'De grooste pot ter wereld',
            'price' => 16.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinepot.jpg',
        ]);

                
        Product::create([
            'name' => 'Proteine pot',
            'description' => 'De grooste pot ter wereld',
            'price' => 5.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinepot2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep',
            'description' => 'De grooste reep ter wereld',
            'price' => 2.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinereep.jpg',
        ]);
        Product::create([
            'name' => 'Proteine reep2',
            'description' => 'De grooste reep ter wereld',
            'price' => 1.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinereep2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep3',
            'description' => 'De grooste reep ter wereld',
            'price' => 7.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinereep3.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep4',
            'description' => 'De grooste shake ter wereld',
            'price' => 69.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/proteinereep4.jpg',
        ]);

        Product::create([
            'name' => 'shakebeker',
            'description' => 'De grooste shakebeker ter wereld',
            'price' => 69.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/shakebeker.jpg',
        ]);

        Product::create([
            'name' => 'shakebeker',
            'description' => 'De grooste shakebeker ter wereld',
            'price' => 69.99,
            'image' => 'laragon/www/git/PROTEINESHOP/public/Media/Images/shakebeker2.jpg',
        ]);

    }
}