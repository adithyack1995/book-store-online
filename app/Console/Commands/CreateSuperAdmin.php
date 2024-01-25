<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:create-super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a super admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::role('superadmin')->count();

        if (!$user) {
            User::factory()->createQuietly([
                'name' => 'Super Admin',
                'email' => 'admin@bookstore.com',
                'password' => Hash::make('bookstore@123'),
            ])->assignRole('superadmin');


            $this->info("SUCCESS, Super admin created.");
        } else {
            $this->info("SUCCESS, Super admin already exist.");
        }
    }
}
