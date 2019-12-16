<?php

use App\Producto;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Carbon\Carbon;


class ProductosTableSeeder extends Seeder
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
            Producto::create([
                'producto' => $faker->company,
                'descripcion' => $faker->text,
                'precio' => $faker->numberBetween($min=10, $max=1000),
                'cantidad' => $faker->numberBetween($min=1, $max=100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }  
        
    }
}