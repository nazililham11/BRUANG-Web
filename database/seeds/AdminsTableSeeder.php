<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('87654321');

        DB::insert("INSERT INTO `admins`
         (`user_id`, `name`, `password`, `created_at`, `updated_at`) VALUES
        ('190000001',	'Agus Purwanto, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000002',	'Anggit Dwi Hartanto, M.Kom'                        , '$password', '2019-12-28 13:25:30', null),
        ('190000003',	'Bayu Setiaji, S.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000004',	'Erni Seniwati, S.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000005',	'Ferry Wahyu Wibowo, S.Si., M.Cs'                   , '$password', '2019-12-28 13:25:30', null);
        ");
    }
}
