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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique();
            $table->string('password');
            $table->integer('address_id')->nullable();
            $table->string('gender');
            $table->string('join_date');
            $table->text('avter')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->rememberToken();
            
            $table->foreign('address_id')->references('id')->on('addres')->onDelete('cascade');
            $table->timestamps();
        });
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        DB::table('users')->insert([
            ['rec_id'=>'KHM_0000000001','first_name'=>'khaled','last_name'=>'alrefaee','phone'=>'962812838','password'=>Hash::make('123123'),'address_id'=>1,'gender'=>'Male','join_date'=>$todayDate],
            ['rec_id'=>'KHM_0000000002','first_name'=>'mohamed','last_name'=>'shbshb','phone'=>'947561302','password'=>Hash::make('123123'),'address_id'=>1,'gender'=>'Male','join_date'=>$todayDate],
           
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
