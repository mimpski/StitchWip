<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;

class ThreadsTableSeeder extends CsvSeeder
{

    public function __construct()
	{
        $this->tablename = 'threads';
        $this->file = '/database/seeds/dmc.csv';
        $this->delimiter = (',');
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		// DB::table($this->table)->truncate();

		parent::run();
    }
}
