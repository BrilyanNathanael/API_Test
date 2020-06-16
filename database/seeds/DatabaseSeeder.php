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
        factory(App\Event::class,10)->create();
        // $this->call(UserSeeder::class);
        DB::table('companies')->insert([
            'event_id' => 1,
            'name_company' => 'BukaLapak'
        ]);
        DB::table('companies')->insert([
            'event_id' => 2,
            'name_company' => 'Tokped'
        ]);
        DB::table('companies')->insert([
            'event_id' => 3,
            'name_company' => 'Berniaga'
        ]);
        DB::table('companies')->insert([
            'event_id' => 1,
            'name_company' => 'Lazada'
        ]);
        DB::table('companies')->insert([
            'event_id' => 6,
            'name_company' => 'Gojek'
        ]);
        DB::table('employees')->insert([
            'company_id' => 1,
            'name' => 'Didi',
            'age' => 22,
            'position' => 'staff'
        ]);
        DB::table('employees')->insert([
            'company_id' => 1,
            'name' => 'Didi',
            'age' => 32,
            'position' => 'Manager'
        ]);
        DB::table('employees')->insert([
            'company_id' => 3,
            'name' => 'Meli',
            'age' => 33,
            'position' => 'Manager'
        ]);
        DB::table('employees')->insert([
            'company_id' => 2,
            'name' => 'Dodi',
            'age' => 42,
            'position' => 'CEO'
        ]);
        DB::table('employees')->insert([
            'company_id' => 2,
            'name' => 'Cili',
            'age' => 35,
            'position' => 'Manager'
        ]);
        DB::table('employees')->insert([
            'company_id' => 4,
            'name' => 'Lili',
            'age' => 24,
            'position' => 'staff'
        ]);
    }
}
