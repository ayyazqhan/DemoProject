<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Student::class, 50)->create();
        // factory(App\Course::class, 50)->create();
        factory(App\Discipline::class, 50)->create();
    }
}
