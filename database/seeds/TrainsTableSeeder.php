<?php

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
            'codice_treno' => 'QWERTY',
            'n_carrozze' => 3,
            'stazione_partenza' => 'Ferrara',
            'stazione_arrivo' => 'Bari',
            'orario_partenza' => '10:15:00',
            'orario_arrivo' => '16:00:00',
            'prezzo' => '39,90',
            'is_available' => false,
        ];
    }
}
