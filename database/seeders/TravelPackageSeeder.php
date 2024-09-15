<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('travel_packages')->insert([
            [
                'nome_pacchetto' => 'Tour delle Isole Greche',
                'descrizione' => 'Un viaggio indimenticabile tra le più belle isole della Grecia.',
                'prezzo' => 1299.99,
                'data_partenza' => '2024-06-15',
                'data_ritorno' => '2024-06-25',
                'numero_giorni' => 10,
                'destinazione' => 'Isole Greche',
                'numero_posti' => 30,
                'disponibile' => true,
            ],
            [
                'nome_pacchetto' => 'Safari in Africa',
                'descrizione' => 'Un avventuroso safari tra i parchi naturali più famosi dell\'Africa.',
                'prezzo' => 2499.99,
                'data_partenza' => '2024-08-01',
                'data_ritorno' => '2024-08-10',
                'numero_giorni' => 10,
                'destinazione' => 'Africa',
                'numero_posti' => 20,
                'disponibile' => true,
            ]
        ]);
    }
}
