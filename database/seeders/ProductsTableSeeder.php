<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'image' => 'products/proteineschepje.jpg',
        ]);

        Product::create([
            'name' => 'Proteine kleinere schepje',
            'description' => 'De kleinere lepel ter wereld',
            'price' => 9.99,
            'image' => 'products/proteineschepje2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine bundle',
            'description' => 'De grooste bundle ter wereld',
            'price' => 13.99,
            'image' => 'products/proteinebundle.jpg',
        ]);

        Product::create([
            'name' => 'Proteine bundle',
            'description' => 'De grooste bundle2 ter wereld',
            'price' => 23.99,
            'image' => 'products/proteineBundle2.png',
        ]);

        Product::create([
            'name' => 'Proteine pot',
            'description' => 'De grooste pot ter wereld',
            'price' => 16.99,
            'image' => 'products/proteinepot.jpg',
        ]);

                
        Product::create([
            'name' => 'Proteine pot',
            'description' => 'De grooste pot ter wereld',
            'price' => 5.99,
            'image' => 'products/proteinepot2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep',
            'description' => 'De grooste reep ter wereld',
            'price' => 2.99,
            'image' => 'products/proteinereep.jpg',
        ]);
        Product::create([
            'name' => 'Proteine reep2',
            'description' => 'De grooste reep ter wereld',
            'price' => 1.99,
            'image' => 'products/proteinereep2.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep3',
            'description' => 'De grooste reep ter wereld',
            'price' => 7.99,
            'image' => 'products/proteinereep3.jpg',
        ]);

        Product::create([
            'name' => 'Proteine reep4',
            'description' => 'De grooste shake ter wereld',
            'price' => 69.99,
            'image' => 'products/proteinereep4.jpg',
        ]);

        Product::create([
            'name' => 'shakebeker',
            'description' => 'De grooste shakebeker ter wereld',
            'price' => 69.99,
            'image' => 'products/shakebeker.jpg',
        ]);

        Product::create([
            'name' => 'shakebeker',
            'description' => 'De grooste shakebeker ter wereld',
            'price' => 69.99,
            'image' => 'products/shakebeker2.jpg',
        ]);

    }
}