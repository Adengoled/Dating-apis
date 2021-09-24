<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name' => 'Hortensia',
            'email' => 'hortensia.dadels@telenet.be',
            'password' => 'KatWitje',
            'gender' => 'female',
            'age' => 86,
            'location' => 'Vlaams-Brabant'
        ]);

        User::create ([
            'name' => 'Anna',
            'email' => 'anna.perkins@telenet.be',
            'password' => 'SterkWW',
            'gender' => 'female',
            'age' => 75,
            'location' => 'Antwerpen'
        ]);

        User::create ([
            'name' => 'Saskia',
            'email' => 'saskia.peulmans@gmail.com',
            'password' => 'VacationBabe',
            'gender' => 'female',
            'age' => 53,
            'location' => 'Oost-Vlaanderen'
        ]);

        User::create ([
            'name' => 'Brigitte',
            'email' => 'brigitte.baardo@gmail.com',
            'password' => 'DramaQueen',
            'gender' => 'female',
            'age' => 59,
            'location' => 'Luxemburg'
        ]);

        User::create ([
            'name' => 'Inga',
            'email' => 'inga456@gmail.com',
            'password' => 'LangeWorpstraat53',
            'gender' => 'female',
            'age' => 72,
            'location' => 'Limburg'
        ]);

        User::create ([
            'name' => 'Ria',
            'email' => 'Ria.Maria@gmail.com',
            'password' => 'RiaMaria',
            'gender' => 'female',
            'age' => 66,
            'location' => 'Oost-Vlaanderen'
        ]);

        User::create ([
            'name' => 'Britt',
            'email' => 'britt.nollekens@gmail.com',
            'password' => 'VerjaardagJef120395',
            'gender' => 'female',
            'age' => 56,
            'location' => 'West-Vlaanderen'
        ]);

        User::create ([
            'name' => 'Nick',
            'email' => 'nick.nollekens@gmail.com',
            'password' => 'JackDaniel',
            'gender' => 'male',
            'age' => 59,
            'location' => 'West-Vlaanderen'
        ]);

        User::create ([
            'name' => 'Bram',
            'email' => 'bram.tararam@gmail.com',
            'password' => 'Smirnoff',
            'gender' => 'male',
            'age' => 68,
            'location' => 'Oost-Vlaanderen'
        ]);

        User::create ([
            'name' => 'Geert',
            'email' => 'geertdeert@gmail.com',
            'password' => 'LadaKalina',
            'gender' => 'male',
            'age' => 84,
            'location' => 'Limburg'
        ]);

        User::create ([
            'name' => 'Wouter',
            'email' => 'pokemonfan@gmail.com',
            'password' => 'Pokemon1953',
            'gender' => 'male',
            'age' => 68,
            'location' => 'Antwerpen'
        ]);

        User::create ([
            'name' => 'Daniel',
            'email' => 'danielhastalavistababy@gmail.com',
            'password' => 'HastaLaVista',
            'gender' => 'male',
            'age' => 76,
            'location' => 'Luxemburg'
        ]);

        User::create ([
            'name' => 'Erik',
            'email' => 'erik.moermans@gmail.com',
            'password' => 'Tolstoiisthebest',
            'gender' => 'male',
            'age' => 85,
            'location' => 'Vlaams-Brabant'
        ]);
    }
}
