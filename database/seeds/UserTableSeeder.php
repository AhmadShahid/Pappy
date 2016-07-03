<?php 

use Illuminate\Database\Seeder;
//use \DB;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(array(
            'Name' => 'admin',
            'email' => 'admin@pappy.com',
            'password' => bcrypt('admin123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
    }
}