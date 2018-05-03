<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $laptop = Category::create(['title'=>'Laptop']);
        $laptop->childs()->saveMany([
            new Category(['title'=>'Lifestyle']),
            new Category(['title'=>'Gaming']),
            new Category(['title'=>'Presention']),
            new Category(['title'=>'Mini Notebook']),
        ]);

        $notebook = Category::create(['title'=>'Notebook']);
        $notebook->childs()->saveMany([
            new Category(['title'=>'ScreenTouch']),
            new Category(['title'=>'Gaming']),
            new Category(['title'=>'Mini Notebook'])
        ]);

        //simple product
        $gaming = Category::where('title', 'Gaming')->first();
        $lifestyle = Category::where('title', 'Lifestyle')->first();
        $laptop1 = Product::create([
            'name'=> 'Laptop Pro',
            'model'=> 'Laptop Dinamic',
            'weight'=>rand(1,3) *1000,
            'photo'=>'sepatu.jpeg',
            'price'=> 340000]);


        $laptop2 = Product::create([
            'name'=> 'Laptop Max',
            'model'=> 'Laptop Static',
            'weight'=>rand(1,3) *1000,
            'photo'=>'sepatu2.jpg',
            'price'=> 310000]);

        $laptop3 = Product::create([
            'name'=> 'Laptop Zoom',
            'model'=> 'Laptop Protic',
            'weight'=>rand(1,3) *1000,
            'photo'=>'sepatu3.png',
            'price'=> 300000]);

        $gaming->products()->saveMany([$laptop1, $laptop2, $laptop3]);
        $lifestyle->products()->saveMany([$laptop1, $laptop2]);

        $jaket = Category::where('title', 'notebook')->first();
        $vest = Category::where('title', 'pc')->first();

        $notebook1 = Product::create([
            'name'=>'Notebook Mini',
            'model'=>'ScreenTouch Mini',
            'photo'=>'notebook1.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>890000]);

        $notebook2 = Product::create([
            'name'=>'Notebook Pro',
            'model'=>'ScreenTouch Pro',
            'photo'=>'notebook2.jpeg',
            'weight'=>rand(1,3) *1000,
            'price'=>89000]);

        $notebook3 = Product::create([
            'name'=>'Notebook Max',
            'model'=>'ScreenTouch Max',
            'photo'=>'notebook3.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>890000]);

        $notebook->products()->saveMany([$notebook1, $notebook2]);
        $vest->products()->saveMany([$notebook2, $notebook3]);

        //copy image simple to public folder
        $from =  database_path(). DIRECTORY_SEPARATOR. 'seeds'. DIRECTORY_SEPARATOR. 'img' .DIRECTORY_SEPARATOR;
        $to = public_path() .DIRECTORY_SEPARATOR. 'img'. DIRECTORY_SEPARATOR;
        File::copy($from. 'laptop1.jpg', $to. 'laptop1.jpg');
        File::copy($from. 'laptop2.jpeg', $to. 'laptop2.jpeg');
    }
}
