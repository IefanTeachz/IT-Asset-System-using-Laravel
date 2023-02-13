<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create([
            'id'        => '1',
            'name'      => 'USER PELUPUS/MISSING',
            'email'     => 'user@user.com',
            'password'  =>  bcrypt('password'),
            'staff_no'  => '1122',
            'phone_no'  => '0173803902',
        ]);

        User::create([
            'id'        => '2',
            'name'      => 'SYED ZULKARNAEN BIN HASSAN',
            'email'     => 'syed@mbsj.gov.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '2222',
            'phone_no'  => '0162559587',
        ]);
        User::create([
            'id'        => '3',
            'name'      => 'NURAZLINA BT KAMARUDIN',
            'email'     => 'nurazlina@mbsj.gov.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1122',
            'phone_no'  => '0193360095',
        ]);
        User::create([
            'id'        => '4',
            'name'      => 'MOHD NAZLY BIN ISMAIL',
            'email'     => 'nazly@mbsj.gov.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1122',
            'phone_no'  => '0173803902',
        ]);

        User::create([
            'id'        => '5',
            'name'      => 'MOHD RAZUHRIN BIN RAHMAD',
            'email'     => 'razuhrin@mbsj.gov.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1111',
            'phone_no'  => '0192622944',
        ]);
       
    }
}
