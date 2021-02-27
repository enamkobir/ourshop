<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tbl_admin')->insert(array(
          'admin_email' => 'enam2131@gmail.com',
          'admin_password' => '123456',
          'admin_name' => 'enam',
          'admin_phone' => '01521318497'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tbl_admin')->where('name', '=', 'enam')->delete();
    }
}
