<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id' => 1, 'name' => 'fikri', 'type' => 'admin', 'mobile' => '0987483938', 'email' => 'fikri@gmail.com',
                'password' => '$2y$10$w0MXhmMlXPAL1h3zsYdTXOVeueof2zhy37myLBQ3CNS6rw20qlDy.', 'image' => '', 'status' => 1
            ],
            ['id' => 2, 'name' => 'wahyu', 'type' => 'admin', 'mobile' => '098748487', 'email' => 'wahyu@gmail.com',
                'password' => '$2y$10$w0MXhmMlXPAL1h3zsYdTXOVeueof2zhy37myLBQ3CNS6rw20qlDy.', 'image' => '', 'status' => 1
            ],
            ['id' => 3, 'name' => 'wakjeng', 'type' => 'subadmin', 'mobile' => '09873333938', 'email' => 'wakjeng@gmail.com',
                'password' => '$2y$10$w0MXhmMlXPAL1h3zsYdTXOVeueof2zhy37myLBQ3CNS6rw20qlDy.', 'image' => '', 'status' => 1
            ],
            ['id' => 4, 'name' => 'joko', 'type' => 'subadmin', 'mobile' => '098748373', 'email' => 'joko@gmail.com',
                'password' => '$2y$10$w0MXhmMlXPAL1h3zsYdTXOVeueof2zhy37myLBQ3CNS6rw20qlDy.', 'image' => '', 'status' => 1
            ],
            ['id' => 5, 'name' => 'nanang', 'type' => 'admin', 'mobile' => '098292483938', 'email' => 'nanang@gmail.com',
                'password' => '$2y$10$w0MXhmMlXPAL1h3zsYdTXOVeueof2zhy37myLBQ3CNS6rw20qlDy.', 'image' => '', 'status' => 1
            ]
        ];
        DB::table('admins')->insert($adminRecords);
    }
}
