<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Antwerp', 'Gent', 'Brussels', 'Paris', 'London'];
        $cars   = ['Volvo', 'Audi', 'Mercedes', 'Toyota', 'Jaguar'];
        $colours = ['red', 'blue', 'white', 'black', 'grey'];
        $digits = 5;

        DB::table('users')->delete();
        $users = [

            [
                //SUPER USER = admin
//                'username'      => 'admin',
                'first_name'    => 'Jolita',
                'last_name'     => 'Grazyte',
//                'email'       => 'jolita.grazyte@student.kdg.be',
                'email'         => 'test@test.be',
                'device_nr'     => 'LRN'.rand(pow(10, $digits-1), pow(10, $digits)-1),
                'city'          => $cities[rand(0, 4)],
                'car_brand'     => $cars[rand(0, 4)],
                'car_color'     => $colours[rand(0,4)],
                'password'      => Hash::make('test'),

            ]
        ];
        DB::table('users')->insert($users);

        factory(User::class, 25)->create();
    }
}
