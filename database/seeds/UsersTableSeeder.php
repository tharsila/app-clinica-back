<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin'), 
        ]);

        $this->command->info('Usuário Admin criado:');
        $this->command->info('Email: admin@email.com');
        $this->command->info('Senha: admin');
    }
}
