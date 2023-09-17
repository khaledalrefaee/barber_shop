<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return [
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '0962812838',
            'email' => 'admin@gmail.com',
            'birthday' => '2000-03-23',
            'address_id' => 1,
            'join_date' =>  $todayDate,
            'type' => 'owner',
            'status'=> true,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
