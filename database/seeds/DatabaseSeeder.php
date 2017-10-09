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
                    'name' => 'HariKrishna AJ',
                    'email' => 'hkk710@gmail.com',
                    'password' => bcrypt('hkk710*'),
                                ]);
        DB::table('users')->insert([
                    'name' => 'HariVishnu',
                    'email' => 'hvmp2012@gmail.com',
                    'password' => bcrypt('Shillong2'),
                                        ]);
        DB::table('users')->insert([
                    'name' => 'Vineeth',
                    'email' => 'vineethkumar6469@gmail.com',
                    'password' => bcrypt('Vineeth1234'),
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
                    'name' => 'Krishna Chandran',
                    'email' => 'ks.krishnan1996@gmail.com',
                    'password' => bcrypt('krishnan1996'),
                ]);
    }
}
