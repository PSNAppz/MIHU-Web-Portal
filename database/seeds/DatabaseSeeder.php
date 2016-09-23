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
        DB::table('users')->insert([
                    'name' => 'PSN',
                    'email' => 'psnappz@gmail.com',
                    'password' => bcrypt('Elit3Hack3r'),
                ]);
        DB::table('users')->insert([
                    'name' => 'Sooraj',
                    'email' => 'soorajsomans@gmail.com',
                    'password' => bcrypt('Sooraj@123'),
                        ]);
        DB::table('users')->insert([
                    'name' => 'HariKrishnan',
                    'email' => 'mihuadmin@gmail.com',
                    'password' => bcrypt('secret'),
                                ]);
        DB::table('users')->insert([
                    'name' => 'HariVishnu',
                    'email' => 'mihuadmin2@gmail.com',
                    'password' => bcrypt('secret'),
                                        ]);
        DB::table('users')->insert([
                    'name' => 'Vineeth',
                    'email' => 'mihuadmin3@gmail.com',
                    'password' => bcrypt('secret'),
                                        ]);
        DB::table('users')->insert([
                    'name' => 'Test',
                    'email' => 'test@gmail.com',
                    'password' => bcrypt('secret'),
                                    ]);
        DB::table('users')->insert([
                    'name' => 'PSNAppZ',
                    'email' => 'thepsnappz@gmail.com',
                    'password' => bcrypt('Elit3Hack3r'),
                                    ]);
        DB::table('users')->insert([
                    'name' => 'debug',
                    'email' => 'debug@gmail.com',
                    'password' => bcrypt('secret'),
                                ]);
    }
}
