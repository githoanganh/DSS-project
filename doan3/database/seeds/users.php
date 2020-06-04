<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id'=>3,'email'=>'B@gmail.com','password'=>'123456','level'=>'2'],
            ['id'=>4,'email'=>'C@gmail.com','password'=>'123456','level'=>'1'],
        ]);
    }
}
