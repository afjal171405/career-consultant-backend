<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use modules\Customer\app\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'mobile_number' => '9828323232',
                'password' => Hash::make('12345678')
            ]
        ];

        foreach ($customers as $customer) {
            $customer = Customer::query()->firstOrCreate([
                'email' => $customer['email']
                ], [
                    'name' => $customer['name'],
                'mobile_number' => $customer['mobile_number'],
                'password' => $customer['password']
            ]);
            $customer->save();
        }
    }
}
