<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('ProductTypesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('SlidersTableSeeder');
		$this->call('ActionsTableSeeder');
		$this->call('OrdersTableSeeder');
	}

}
