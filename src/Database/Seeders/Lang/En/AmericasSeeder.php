<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;

class AmericasSeeder extends Seeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    protected $lang = 'en';

    /**
     * Attribute that defines the continent of countries
     *
     * @var string
     */
    protected $region = 'america';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Anguilla',
                'iso_alpha_2' => 'AI',
                'iso_alpha_3' => 'AIA',
                'iso_numeric' => '660',
                'international_phone' => '1-264',
            ],
            [
                'name' => 'Antigua and Barbuda',
                'iso_alpha_2' => 'AG',
                'iso_alpha_3' => 'ATG',
                'iso_numeric' => '28',
                'international_phone' => '1-268',
            ],
            [
                'name' => 'Argentina',
                'iso_alpha_2' => 'AR',
                'iso_alpha_3' => 'ARG',
                'iso_numeric' => '32',
                'international_phone' => '54',
            ],
            [
                'name' => 'Aruba',
                'iso_alpha_2' => 'AW',
                'iso_alpha_3' => 'ABW',
                'iso_numeric' => '533',
                'international_phone' => '297',
            ],
            [
                'name' => 'Bahamas',
                'iso_alpha_2' => 'BS',
                'iso_alpha_3' => 'BHS',
                'iso_numeric' => '44',
                'international_phone' => '1-242',
            ],
            [
                'name' => 'Barbados',
                'iso_alpha_2' => 'BB',
                'iso_alpha_3' => 'BRB',
                'iso_numeric' => '52',
                'international_phone' => '1-246',
            ],
            [
                'name' => 'Belize',
                'iso_alpha_2' => 'BZ',
                'iso_alpha_3' => 'BLZ',
                'iso_numeric' => '84',
                'international_phone' => '501',
            ],
            [
                'name' => 'Bermuda',
                'iso_alpha_2' => 'BM',
                'iso_alpha_3' => 'BMU',
                'iso_numeric' => '60',
                'international_phone' => '1-441',
            ],
            [
                'name' => 'Bolivia',
                'iso_alpha_2' => 'BO',
                'iso_alpha_3' => 'BOL',
                'iso_numeric' => '68',
                'international_phone' => '591',
            ],
            [
                'name' => 'Brazil',
                'iso_alpha_2' => 'BR',
                'iso_alpha_3' => 'BRA',
                'iso_numeric' => '76',
                'international_phone' => '55',
            ],
            [
                'name' => 'British Virgin Islands',
                'iso_alpha_2' => 'VG',
                'iso_alpha_3' => 'VGB',
                'iso_numeric' => '92',
                'international_phone' => '1-284',
            ],
            [
                'name' => 'Canada',
                'iso_alpha_2' => 'CA',
                'iso_alpha_3' => 'CAN',
                'iso_numeric' => '124',
                'international_phone' => '1',
            ],
            [
                'name' => 'Cayman Islands',
                'iso_alpha_2' => 'KY',
                'iso_alpha_3' => 'CYM',
                'iso_numeric' => '163',
                'international_phone' => '1-345',
            ],
            [
                'name' => 'Chile',
                'iso_alpha_2' => 'CL',
                'iso_alpha_3' => 'CHL',
                'iso_numeric' => '152',
                'international_phone' => '56',
            ],
            [
                'name' => 'Colombia',
                'iso_alpha_2' => 'CO',
                'iso_alpha_3' => 'COL',
                'iso_numeric' => '170',
                'international_phone' => '57',
            ],
            [
                'name' => 'Costa Rica',
                'iso_alpha_2' => 'CR',
                'iso_alpha_3' => 'CRI',
                'iso_numeric' => '188',
                'international_phone' => '506',
            ],
            [
                'name' => 'Cuba',
                'iso_alpha_2' => 'CU',
                'iso_alpha_3' => 'CUB',
                'iso_numeric' => '192',
                'international_phone' => '53',
            ],
            [
                'name' => 'Dominica',
                'iso_alpha_2' => 'DM',
                'iso_alpha_3' => 'DMA',
                'iso_numeric' => '212',
                'international_phone' => '1-767',
            ],
            [
                'name' => 'Dominican Republic',
                'iso_alpha_2' => 'DO',
                'iso_alpha_3' => 'DOM',
                'iso_numeric' => '214',
                'international_phone' => '1-809,1-829,1-849',
            ],
            [
                'name' => 'Ecuador',
                'iso_alpha_2' => 'EC',
                'iso_alpha_3' => 'ECU',
                'iso_numeric' => '218',
                'international_phone' => '593',
            ],
            [
                'name' => 'El Salvador',
                'iso_alpha_2' => 'SV',
                'iso_alpha_3' => 'SLV',
                'iso_numeric' => '222',
                'international_phone' => '503',
            ],
            [
                'name' => 'Falkland Islands',
                'iso_alpha_2' => 'FK',
                'iso_alpha_3' => 'FLK',
                'iso_numeric' => '238',
                'international_phone' => '500',
            ],
            [
                'name' => 'French Guiana',
                'iso_alpha_2' => 'GF',
                'iso_alpha_3' => 'GUF',
                'iso_numeric' => '254',
                'international_phone' => '594',
            ],
            [
                'name' => 'Greenland',
                'iso_alpha_2' => 'GL',
                'iso_alpha_3' => 'GRL',
                'iso_numeric' => '304',
                'international_phone' => '299',
            ],
            [
                'name' => 'Grenada',
                'iso_alpha_2' => 'GD',
                'iso_alpha_3' => 'GRD',
                'iso_numeric' => '308',
                'international_phone' => '1-473',
            ],
            [
                'name' => 'Guadeloupe',
                'iso_alpha_2' => 'GP',
                'iso_alpha_3' => 'GLP',
                'iso_numeric' => '312',
                'international_phone' => '590',
            ],
            [
                'name' => 'Guatemala',
                'iso_alpha_2' => 'GT',
                'iso_alpha_3' => 'GTM',
                'iso_numeric' => '320',
                'international_phone' => '502',
            ],
            [
                'name' => 'Guyana',
                'iso_alpha_2' => 'GY',
                'iso_alpha_3' => 'GUY',
                'iso_numeric' => '328',
                'international_phone' => '592',
            ],
            [
                'name' => 'Haiti',
                'iso_alpha_2' => 'HT',
                'iso_alpha_3' => 'HTI',
                'iso_numeric' => '332',
                'international_phone' => '509',
            ],
            [
                'name' => 'Honduras',
                'iso_alpha_2' => 'HN',
                'iso_alpha_3' => 'HND',
                'iso_numeric' => '340',
                'international_phone' => '504',
            ],
            [
                'name' => 'Jamaica',
                'iso_alpha_2' => 'JM',
                'iso_alpha_3' => 'JAM',
                'iso_numeric' => '388',
                'international_phone' => '1-876',
            ],
            [
                'name' => 'Martinique',
                'iso_alpha_2' => 'MQ',
                'iso_alpha_3' => 'MTQ',
                'iso_numeric' => '474',
                'international_phone' => '596',
            ],
            [
                'name' => 'Mexico',
                'iso_alpha_2' => 'MX',
                'iso_alpha_3' => 'MEX',
                'iso_numeric' => '484',
                'international_phone' => '52',
            ],
            [
                'name' => 'Montserrat',
                'iso_alpha_2' => 'MS',
                'iso_alpha_3' => 'MSR',
                'iso_numeric' => '500',
                'international_phone' => '1-664',
            ],
            [
                'name' => 'Netherlands Antilles',
                'iso_alpha_2' => 'AN',
                'iso_alpha_3' => 'ANT',
                'iso_numeric' => '530',
                'international_phone' => '599',
            ],
            [
                'name' => 'Nicaragua',
                'iso_alpha_2' => 'NI',
                'iso_alpha_3' => 'NIC',
                'iso_numeric' => '558',
                'international_phone' => '505',
            ],
            [
                'name' => 'Panama',
                'iso_alpha_2' => 'PA',
                'iso_alpha_3' => 'PAN',
                'iso_numeric' => '591',
                'international_phone' => '507',
            ],
            [
                'name' => 'Paraguay',
                'iso_alpha_2' => 'PY',
                'iso_alpha_3' => 'PRY',
                'iso_numeric' => '600',
                'international_phone' => '595',
            ],
            [
                'name' => 'Peru',
                'iso_alpha_2' => 'PE',
                'iso_alpha_3' => 'PER',
                'iso_numeric' => '604',
                'international_phone' => '51',
            ],
            [
                'name' => 'Puerto Rico',
                'iso_alpha_2' => 'PR',
                'iso_alpha_3' => 'PRI',
                'iso_numeric' => '630',
                'international_phone' => '1',
            ],
            [
                'name' => 'Saint Barthélemy',
                'iso_alpha_2' => 'BL',
                'iso_alpha_3' => 'BLM',
                'iso_numeric' => '652',
                'international_phone' => '590',
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'iso_alpha_2' => 'KN',
                'iso_alpha_3' => 'KNA',
                'iso_numeric' => '659',
                'international_phone' => '1-869',
            ],
            [
                'name' => 'Saint Lucia',
                'iso_alpha_2' => 'LC',
                'iso_alpha_3' => 'LCA',
                'iso_numeric' => '662',
                'international_phone' => '1-758',
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'iso_alpha_2' => 'PM',
                'iso_alpha_3' => 'SPM',
                'iso_numeric' => '666',
                'international_phone' => '508',
            ],
            [
                'name' => 'Saint Vincent and Grenadines',
                'iso_alpha_2' => 'VC',
                'iso_alpha_3' => 'VCT',
                'iso_numeric' => '670',
                'international_phone' => '1-784',
            ],
            [
                'name' => 'Suriname',
                'iso_alpha_2' => 'SR',
                'iso_alpha_3' => 'SUR',
                'iso_numeric' => '740',
                'international_phone' => '597',
            ],
            [
                'name' => 'Trinidad and Tobago',
                'iso_alpha_2' => 'TT',
                'iso_alpha_3' => 'TTO',
                'iso_numeric' => '780',
                'international_phone' => '1-868',
            ],
            [
                'name' => 'Trinidad and Tobago',
                'iso_alpha_2' => 'TC',
                'iso_alpha_3' => 'TCA',
                'iso_numeric' => '796',
                'international_phone' => '1-649',
            ],
            [
                'name' => 'Virgin Islands, US',
                'iso_alpha_2' => 'VI',
                'iso_alpha_3' => 'VIR',
                'iso_numeric' => '850',
                'international_phone' => '1-340',
            ],
            [
                'name' => 'Virgin Islands, US',
                'iso_alpha_2' => 'VI',
                'iso_alpha_3' => 'VIR',
                'iso_numeric' => '850',
                'international_phone' => '1-340',
            ],
            [
                'name' => 'United States of America',
                'iso_alpha_2' => 'US',
                'iso_alpha_3' => 'USA',
                'iso_numeric' => '840',
                'international_phone' => '1',
            ],
            [
                'name' => 'Uruguay',
                'iso_alpha_2' => 'UY',
                'iso_alpha_3' => 'URY',
                'iso_numeric' => '858',
                'international_phone' => '598',
            ],
            [
                'name' => 'Venezuela',
                'iso_alpha_2' => 'VE',
                'iso_alpha_3' => 'VEN',
                'iso_numeric' => '862',
                'international_phone' => '58',
            ],
        ];


    }
}
