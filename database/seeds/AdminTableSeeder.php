<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tt13_admin')->insert([
          [
              'username' => 'superadmin',
              'password' => bcrypt('12345'),
              'level'    => 1,
              'created_at' => new DateTime(),
          ],
          [
              'username' => 'admin',
              'password' => bcrypt('12345'),
              'level'    => 1,
              'created_at' => new DateTime(),
          ],
          [
              'username' => 'member',
              'password' => bcrypt('12345'),
              'level'    => 2,
              'created_at' => new DateTime(),
          ],
          [
              'username' => 'user',
              'password' => bcrypt('12345'),
              'level'    => 2,
              'created_at' => new DateTime(),
          ]
        ]);
    }
}
