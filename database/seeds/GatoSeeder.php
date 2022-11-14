<?php

use Illuminate\Database\Seeder;

class GatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gato::class, 10)->create();
    }
}
