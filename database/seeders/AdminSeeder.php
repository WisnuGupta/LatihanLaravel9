<?php

namespace Database\Seeders;

use App\Models\Admin;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
            [
                'name' => 'administrator',
                'username'=>'wisnu21gupta@gmail.com',
                'password'=>bcrypt('21121999'),
                'level'=>1,
                'email'=>'wisnu21gupta@gmail.com'
            ],
            [
                'name' => 'kasir',
                'username'=>'kasir',
                'password'=>bcrypt('1234567'),
                'level'=>2,
                'email'=>'kasir@blogku.com'
            ],
            [
                'name' => 'pimpinan',
                'username'=>'pimpinan',
                'password'=>bcrypt('12345678'),
                'level'=>3,
                'email'=>'pimpinan@blogku.com'
            ]
            ];
            foreach($admin as $key => $value){
                Admin::create($value);
            }
        }
    }

