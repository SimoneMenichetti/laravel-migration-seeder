<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creiamo un'istanza di Faker
        $faker = Faker::create();

        // Lista di nomi dei pacchetti di viaggio realistici
        $nomiPacchetti = [
            'Avventura in Montagna',
            'Relax sulla Spiaggia',
            'Tour Culturale in Città',
            'Soggiorno di Lusso',
            'Vacanza Avventurosa',
            'Weekend Romantico',
            'Gita Gastronomica',
            'Esplorazione Urbana',
            'Viaggio nella Natura',
            'Escursione ai Templi'
        ];

        // Lista di città reali per destinazioni
        $citta = [
            'Roma',
            'Milano',
            'Firenze',
            'Venezia',
            'Napoli',
            'Torino',
            'Bologna',
            'Genova',
            'Palermo',
            'Catania'
        ];

        $existingSlugs = DB::table('travel_packages')->pluck('slug')->toArray();

        // Lista di template per descrizioni
        $descriptionTemplates = [
            "Vivi un'esperienza unica con '{nome_pacchetto}' a {destinazione}. Goditi {numero_giorni} giorni di avventure e relax in questa splendida località.",
            "Scopri la bellezza di {destinazione} con '{nome_pacchetto}'. Questo pacchetto di {numero_giorni} giorni include tutte le principali attrazioni e attività.",
            "Partecipa a '{nome_pacchetto}' e immergiti nella cultura di {destinazione}. Soggiorna per {numero_giorni} giorni e scopri le meraviglie locali.",
            "Con '{nome_pacchetto}', avrai {numero_giorni} giorni per esplorare {destinazione} e vivere un'avventura indimenticabile."
        ];

        // Ciclo per generare 20 pacchetti di viaggio
        for ($i = 0; $i < 20; $i++) {
            // Seleziona un nome pacchetto e una città casuale
            $nomePacchetto = $faker->randomElement($nomiPacchetti);
            $destinazione = $faker->randomElement($citta);
            $luogoPartenza = $faker->randomElement($citta);

            // Genera una data di partenza e una durata in giorni
            $dataPartenza = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d');
            $numeroGiorni = $faker->numberBetween(3, 21);
            $dataRitorno = (new \DateTime($dataPartenza))->add(new \DateInterval("P{$numeroGiorni}D"))->format('Y-m-d');

            // Genera un slug unico
            $slugBase = Str::slug($nomePacchetto);
            $slug = $slugBase;
            $counter = 1;

            while (in_array($slug, $existingSlugs)) {
                $slug = $slugBase . '-' . $counter;
                $counter++;
            }

            $existingSlugs[] = $slug;

            // Seleziona un template di descrizione e sostituisci i segnaposti
            $template = $faker->randomElement($descriptionTemplates);
            $descrizione = str_replace(
                ['{nome_pacchetto}', '{destinazione}', '{numero_giorni}'],
                [$nomePacchetto, $destinazione, $numeroGiorni],
                $template
            );

            // Inserisci i dati nella tabella
            DB::table('travel_packages')->insert([
                'nome_pacchetto' => $nomePacchetto,
                'descrizione' => $descrizione,
                'prezzo' => $faker->randomFloat(2, 500, 6000),
                'data_partenza' => $dataPartenza,
                'data_ritorno' => $dataRitorno,
                'numero_giorni' => $numeroGiorni,
                'luogo_partenza' => $luogoPartenza,
                'destinazione' => $destinazione,
                'numero_posti' => $faker->numberBetween(10, 70),
                'disponibile' => $faker->boolean(70),
                'slug' => $slug,
            ]);
        }
    }
}
