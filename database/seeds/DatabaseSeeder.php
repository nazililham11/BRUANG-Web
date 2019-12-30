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
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(ClassSessionsTableSeeder::class);
        $this->call(CourseSchedulesTableSeeder::class);
        $this->call(ClassSchedulesTableSeeder::class);
    }
}
