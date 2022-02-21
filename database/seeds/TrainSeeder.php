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
        $dates = [
            '2022/02/18 13:30:00',
            '2022/02/19 16:30:00',
            '2022/02/20 10:30:00',
            '2022/02/21 8:30:00',
            '2022/02/22 8:30:00'
        ];

        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $dates[rand(0, 4)];
            $train->orario_di_arrivo =  $dates[rand(0, 4)];
            $train->codice_treno = $faker->numberBetween(145, 356);
            $train->numero_carrozze = $faker->numberBetween(1, 55);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
