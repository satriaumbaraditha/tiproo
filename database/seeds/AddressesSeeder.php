<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Province;
use App\Regency;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::populate();
        regency::populate();

        //sample address for customer
        $customer = User::where('email', 'customer@gmail.com')->first();
        $address1 = Address::create([
            'user_id'=>$customer->id,
            'name'=>'Krisna Putra ',
            'detail'=>'Jalan Nangka',
            //kota cimahi
            'regency_id'=>107,
            'phone'=>'087871243890',
        ]);

        $address1 = Address::create([
            'user_id'=>$customer->id,
            'name'=>'Eka Krisna',
            'detail'=>'Jalan Antasura',
            //kota bekasi
            'regency_id'=>55,
            'phone'=>'087871243890',
        ]);
    }
}
