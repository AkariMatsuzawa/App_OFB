<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // StudentSeederへ指令する。送りたい。
        $this->call(StudentsTableSeeder::class);
    }
}
