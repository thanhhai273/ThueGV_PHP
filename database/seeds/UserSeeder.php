<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserModel::class, 13)->create()->each(function ($u) {
            $u->employee()->save(factory(App\Employee::class)->make());
        });
    }
}
