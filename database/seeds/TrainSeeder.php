<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200; $i++) { 
            $newTrain = new Train();
            $newTrain->stazione_di_partenza = $faker->cityName();
            $newTrain->stazione_di_arrivo = $faker->cityName();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(6, true);
            $newTrain->numero_carrozze = $faker->randomNumber(2, false);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->save();
        }
    }
}
