<?php
 
use Illuminate\Database\Seeder;
 
class SubCategoryTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('subcategories')->delete();
 
        $projects = array(
            ['name' => 'select a subcategory' , 'category_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Fast food' , 'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'South Indian shop' , 'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Chinese', 'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Juice corner',  'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Paratha Shop',  'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mobile shop',  'category_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Laptop shop',  'category_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Home Appliances Store',  'category_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Electronics gadgets', 'category_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Books and stuff',  'category_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'General store',  'category_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Super market',  'category_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Other Departmental store',  'category_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mens cloth shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ladies cloth shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mens & Ladies cloth shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sarees shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cloths and shoes shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Shoes, Slippers, Sandals shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mens Shoes, Slippers, Sandals shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ladies Shoes, Slippers, Sandals shop',  'category_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Internet cafe',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Hospital(Medical)',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Repairing Centres',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Coching Centres',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Gym',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'P.G.',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Rent Houses',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Tours and travel',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Tailor shop',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Hair saloon/spa',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sports shop',  'category_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Restaurant',  'category_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Dhaba',  'category_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Archies',  'category_id' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Other gift shop',  'category_id' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Gaming centre',  'category_id' => 11, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'property dealer',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Automobile Service Advisor',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'bakery shop',  'category_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cement Tile Shop',  'category_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Marble & Tile Shop',  'category_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Home Appliances Shop',  'category_id' => 13, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'digital studio',  'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'sanitary shop',  'category_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Beauty parlour',  'category_id' => 14, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => "Men's parlour"  ,'category_id' => 14, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cosmetics shop'  ,'category_id' => 14, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'watches shop'  ,'category_id' => 15, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Glasses shop'  ,'category_id' => 15, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Belts shop'  ,'category_id' => 15, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Caterers'  ,'category_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Boys Hostel'  ,'category_id' => 16, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Girls Hostel'  ,'category_id' => 16, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'P.G.'  ,'category_id' => 16, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Apartment'  ,'category_id' => 16, 'created_at' => new DateTime, 'updated_at' => new DateTime]

        );
 
        // Uncomment the below to run the seeder
        DB::table('subcategories')->insert($projects);
    }
 
}