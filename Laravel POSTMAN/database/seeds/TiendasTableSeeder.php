<?php

use App\Tienda;
use Illuminate\Database\Seeder;
use Faker\factory as faker;
use Carbon\Carbon;


class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        $faker = faker::Create();
        for($i = 0; $i <= 100; $i++){
            Tienda::create([
                'nombre_tienda' => $faker->company,
                'direccion' => $faker->address,
                'telefono' => $faker->phoneNumber,
                'nit' => $faker->ean13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } 
    }
}
