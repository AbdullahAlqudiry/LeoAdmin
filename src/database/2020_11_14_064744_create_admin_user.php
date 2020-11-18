<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the admin
        $user = User::create([
                    'name' => 'Abdullah',
                    'email' => 'abdullah@leoadmin.com',
                    'password' => bcrypt('123456'),
                ]);

        $user->assignRole('Admin');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
