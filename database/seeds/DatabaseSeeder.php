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

        // factory(User::class, 10)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    
        // User::create([
        //     'name' => 'Henrique Lopes Lima',
        //     'email' => 'henriquelopeslima.hll@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
    
    }
}
