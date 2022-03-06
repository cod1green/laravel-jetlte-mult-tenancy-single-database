<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    public function run()
    {
        $plan = Plan::vip()->first();

        $plan->tenants()->create(
            [
                'name' => 'Marcelo Vaz de Camargo',
                'company' => 'Cod1green',
                'document' => '33.579.813/0001-37',
                'phone' => '(11) 94880-9185',
                'email' => config('admin.admin_email'),
                'url' => 'cod1green.test',
            ]
        );

        $plan->tenants()->create(
            [
                'name' => 'Patricia Lais',
                'company' => 'CT Força bruta',
                'document' => '391.294.728-73',
                'phone' => '(11) 944081-7841',
                'email' => 'user@user.com',
                'url' => 'ctforcabruta.test',
            ]
        );
    }
}
