<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->no_telp = "083180112238";
        $admin->password = bcrypt("admin1234");
        $admin->save();
        $admin->attachRole($adminRole);

    }
}
