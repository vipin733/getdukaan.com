<?php
 
use Illuminate\Database\Seeder;
 
class CategoryTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categories')->delete();
 
        $projects = array(
            ['name' => 'select a category', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Eatery', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Electronics', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Stationary', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Departmental store', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cloths & shoes', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Services', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sports', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Food Plaza', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Gift shop', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Entertainment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Building Supplies', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Electrical', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Fashion', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Accessories', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Hostels & P.G.', 'created_at' => new DateTime, 'updated_at' => new DateTime]

        );
 
        // Uncomment the below to run the seeder
        DB::table('categories')->insert($projects);
    }
 
}