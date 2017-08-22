<?php
 
use Illuminate\Database\Seeder;
 
class BlockTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('blocks')->delete();
 
        $projects = array(
            ['name' => '3A Block', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'LPU Mall', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => '13 Block', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => '33 Block', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => '20 Block', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'BH-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'BH-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => '56-Block', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
 
        // Uncomment the below to run the seeder
        DB::table('blocks')->insert($projects);
    }
 
}