<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            'codice_treno' => 'qwerty',
            'n_carrozze' => 3,
            'stazione_partenza' => 'Ferrara',
            'stazione_arrivo' => 'Bari',
            'orario_partenza' => '10:15:00',
            'orario_arrivo' => '16:00:00',
            'prezzo' => 39.90,
            'is_available' => 1
        ];

        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->codice_treno = $elem['codice_treno'];
            $newTrain->n_carrozze = $elem['n_carrozze'];
            $newTrain->stazione_partenza = $elem['stazione_partenza'];
            $newTrain->stazione_arrivo = $elem['stazione_arrivo'];
            $newTrain->orario_partenza = $elem['orario_partenza'];
            $newTrain->orario_arrivo = $elem['orario_arrivo'];
            $newTrain->prezzo = $elem['prezzo'];
            $newTrain->is_available = $elem['is_available'];
            $newTrain->save();
        }
    }
}
