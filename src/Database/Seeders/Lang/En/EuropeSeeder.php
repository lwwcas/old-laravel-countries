<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;

class EuropeSeeder extends Seeder
{
    /**
     * Attribute that defines the continent of countries
     *
     * @var string
     */
    protected $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        [
           'AL' => 'Albania',
            'AD' => 'Andorra',
            'AT' => 'Austria',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BA' => 'Bosnia and Herzegovina',
            'BG' => 'Bulgaria',
            'HR' => 'Croatia',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DD' => 'East Germany',
            'EE' => 'Estonia',
            'FO' => 'Faroe Islands',
            'FI' => 'Finland',
            'FR' => 'France',
            'DE' => 'Germany',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GG' => 'Guernsey',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IE' => 'Ireland',
            'IM' => 'Isle of Man',
            'IT' => 'Italy',
            'JE' => 'Jersey',
            'LV' => 'Latvia',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MK' => 'Macedonia',
            'MT' => 'Malta',
            'FX' => 'Metropolitan France',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'ME' => 'Montenegro',
            'NL' => 'Netherlands',
            'NO' => 'Norway',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'RO' => 'Romania',
            'RU' => 'Russia',
            'SM' => 'San Marino',
            'RS' => 'Serbia',
            'CS' => 'Serbia and Montenegro',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'ES' => 'Spain',
            'SJ' => 'Svalbard and Jan Mayen',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'UA' => 'Ukraine',
            'SU' => 'Union of Soviet Socialist Republics',
            'GB' => 'United Kingdom',
            'VA' => 'Vatican City',
            'AX' => 'Åland Islands',
        ];
    }
}
