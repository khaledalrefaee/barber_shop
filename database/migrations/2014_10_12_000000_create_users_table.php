<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('rec_id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('password');
            $table->foreignId('address_id')->references('id')->on('addres')->onDelete('cascade');
            $table->string('join_date');
            $table->text('avter')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->timestamp('phone_verified_at')->nullable();
            $table->rememberToken();

            $table->timestamps();
        });
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        DB::table('users')->insert([
            ['rec_id'=>'KHM_0000000001','name'=>'khaled','phone'=>'962812838','password'=>Hash::make('123123'),'address_id'=>1,'join_date'=>$todayDate],
            ['rec_id'=>'KHM_0000000002','name'=>'mohamed','phone'=>'947561302','password'=>Hash::make('123123'),'address_id'=>1,'join_date'=>$todayDate],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
