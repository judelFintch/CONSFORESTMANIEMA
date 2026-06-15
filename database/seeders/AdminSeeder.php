<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $email    = 'admin@consforestmaniema.com';
        $password = 'ConsForest2026!';

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name'     => 'Administrateur',
                'password' => Hash::make($password),
            ]
        );

        $status = $user->wasRecentlyCreated ? 'créé' : 'déjà existant';

        $this->command->info('');
        $this->command->info('  ✦ Compte admin ' . $status);
        $this->command->info('  URL      : /admin/login');
        $this->command->info('  Email    : ' . $email);
        $this->command->info('  Mot de passe : ' . $password);
        $this->command->info('');
    }
}
