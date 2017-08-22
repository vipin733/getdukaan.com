<?php

//class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
 //public function run()
	//{
		//Eloquent::unguard();

		 //$this->call('CategoryTableSeeder');
		 //$this->call('SubCategoryTableSeeder');
		 //$this->call('BlockTableSeeder');
	//}

//}



class DatabaseSeeder extends Seeder {


	protected $tables = ['categories', 'subcategories'];

	protected $seeders = ['CategoryTableSeeder', 'SubCategoryTableSeeder'];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->cleanDatabase();

		foreach ($this->seeders as $seedClass) 
		{
			$this->call($seedClass);
		}
	}

	private function cleanDatabase()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		foreach($this->tables as $table)

		{
			DB::table($table)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}
