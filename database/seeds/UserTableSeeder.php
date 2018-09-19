<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'gast',
                'email' => 'gast@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Susanne Meeuwissen',
                'email' => 'susanne@embav.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Maarten de Jager',
                'email' => 'maartendejager@gmail.com',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@temp.com',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'guest',
                'email' => 'guest@guest.com',
                'password' => Hash::make('guest'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Erik Beekman',
                'email' => 'guest1@guest.com',
                'password' => Hash::make('guest'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Annejet Kerckhaert',
                'email' => 'guest2@guest.com',
                'password' => Hash::make('guest'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Indra van der Valk',
                'email' => 'guest3@guest.com',
                'password' => Hash::make('guest'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Henk Bakker',
                'email' => 'guest4@guest.com',
                'password' => Hash::make('guest'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast1',
                'email' => 'gast1@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast2',
                'email' => 'gast2@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast3',
                'email' => 'gast3@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast4',
                'email' => 'gast4@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast5',
                'email' => 'gast5@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast6',
                'email' => 'gast6@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast7',
                'email' => 'gast7@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast8',
                'email' => 'gast8@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast9',
                'email' => 'gast9@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast10',
                'email' => 'gast10@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast11',
                'email' => 'gast11@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast12',
                'email' => 'gast12@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast13',
                'email' => 'gast13@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gast14',
                'email' => 'gast14@gast.nl',
                'password' => Hash::make('password'),
                'verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
