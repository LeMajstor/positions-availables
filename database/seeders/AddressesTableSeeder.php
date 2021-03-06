<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::factory(10)->create()->each(function($address){
            if ($address->id %2 == 0) {
                $address->company()->save($address);
            } else {
                $address->user()->save($address);
            }
        });
    }
}
