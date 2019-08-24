<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;

class OceaniaSeeder extends Seeder
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
    protected $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'American Samoa',
                'iso_alpha_2' => 'AS',
                'iso_alpha_3' => 'ASM',
                'iso_numeric' => '16',
                'international_phone' => '1-684',
            ],
            [
                'name' => 'Antarctica',
                'iso_alpha_2' => 'AQ',
                'iso_alpha_3' => 'ATA',
                'iso_numeric' => '10',
                'international_phone' => '672',
            ],
            [
                'name' => 'Bouvet Island',
                'iso_alpha_2' => 'BV',
                'iso_alpha_3' => 'BVT',
                'iso_numeric' => '74',
                'international_phone' => '47',
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'iso_alpha_2' => 'IO',
                'iso_alpha_3' => 'IOT',
                'iso_numeric' => '86',
                'international_phone' => '246',
            ],
            [
                'name' => 'Christmas Island',
                'iso_alpha_2' => 'CX',
                'iso_alpha_3' => 'CXR',
                'iso_numeric' => '162',
                'international_phone' => '61',
            ],
            [
                'name' => 'Cocos [Keeling] Islands',
                'iso_alpha_2' => 'CC',
                'iso_alpha_3' => 'CCK',
                'iso_numeric' => '166',
                'international_phone' => '61',
            ],
            [
                'name' => 'Cook Islands',
                'iso_alpha_2' => 'CK',
                'iso_alpha_3' => 'COK',
                'iso_numeric' => '184',
                'international_phone' => '682',
            ],
            [
                'name' => 'Fiji',
                'iso_alpha_2' => 'FJ',
                'iso_alpha_3' => 'FJI',
                'iso_numeric' => '242',
                'international_phone' => '679',
            ],
            [
                'name' => 'French Polynesia',
                'iso_alpha_2' => 'PF',
                'iso_alpha_3' => 'PYF',
                'iso_numeric' => '258',
                'international_phone' => '689',
            ],
            [
                'name' => 'French Southern Territories',
                'iso_alpha_2' => 'TF',
                'iso_alpha_3' => 'ATF',
                'iso_numeric' => '260',
                'international_phone' => '262',
            ],
            [
                'name' => 'Guam',
                'iso_alpha_2' => 'GU',
                'iso_alpha_3' => 'GUM',
                'iso_numeric' => '316',
                'international_phone' => '1-671',
            ],
            [
                'name' => 'Heard Island and McDonald Islands',
                'iso_alpha_2' => 'HM',
                'iso_alpha_3' => 'HMD',
                'iso_numeric' => '672',
                'international_phone' => '672',
            ],
            [
                'name' => 'Kiribati',
                'iso_alpha_2' => 'KI',
                'iso_alpha_3' => 'KIR',
                'iso_numeric' => '296',
                'international_phone' => '686',
            ],
            [
                'name' => 'Marshall Islands',
                'iso_alpha_2' => 'MH',
                'iso_alpha_3' => 'MHL',
                'iso_numeric' => '584',
                'international_phone' => '692',
            ],
            [
                'name' => 'Micronesia',
                'iso_alpha_2' => 'FM',
                'iso_alpha_3' => 'FSM',
                'iso_numeric' => '583',
                'international_phone' => '691',
            ],
            [
                'name' => 'Nauru',
                'iso_alpha_2' => 'NR',
                'iso_alpha_3' => 'NRU',
                'iso_numeric' => '520',
                'international_phone' => '674',
            ],
            [
                'name' => 'New Caledonia',
                'iso_alpha_2' => 'NC',
                'iso_alpha_3' => 'NCL',
                'iso_numeric' => '540',
                'international_phone' => '687',
            ],
            [
                'name' => 'New Zealand',
                'iso_alpha_2' => 'NZ',
                'iso_alpha_3' => 'NZL',
                'iso_numeric' => '544',
                'international_phone' => '64',
            ],
            [
                'name' => 'Niue',
                'iso_alpha_2' => 'NU',
                'iso_alpha_3' => 'NIU',
                'iso_numeric' => '570',
                'international_phone' => '683',
            ],
            [
                'name' => 'Norfolk Island',
                'iso_alpha_2' => 'NF',
                'iso_alpha_3' => 'NFK',
                'iso_numeric' => '574',
                'international_phone' => '672',
            ],
            [
                'name' => 'Northern Mariana Islands',
                'iso_alpha_2' => 'MP',
                'iso_alpha_3' => 'MNP',
                'iso_numeric' => '580',
                'international_phone' => '1-670',
            ],
            [
                'name' => 'Palau',
                'iso_alpha_2' => 'PW',
                'iso_alpha_3' => 'PLW',
                'iso_numeric' => '585',
                'international_phone' => '680',
            ],
            [
                'name' => 'Papua New Guinea',
                'iso_alpha_2' => 'PG',
                'iso_alpha_3' => 'PNG',
                'iso_numeric' => '598',
                'international_phone' => '680',
            ],
            [
                'name' => 'Pitcairn Islands',
                'iso_alpha_2' => 'PN',
                'iso_alpha_3' => 'PCN',
                'iso_numeric' => '612',
                'international_phone' => '64',
            ],
            [
                'name' => 'Samoa',
                'iso_alpha_2' => 'WS',
                'iso_alpha_3' => 'WSM',
                'iso_numeric' => '882',
                'international_phone' => '685',
            ],
            [
                'name' => 'Solomon Islands',
                'iso_alpha_2' => 'SB',
                'iso_alpha_3' => 'SLB',
                'iso_numeric' => '90',
                'international_phone' => '677',
            ],
            [
                'name' => 'South Georgia and the South Sandwich Islands',
                'iso_alpha_2' => 'GS',
                'iso_alpha_3' => 'SGS',
                'iso_numeric' => '239',
                'international_phone' => '500',
            ],
            [
                'name' => 'Tokelau',
                'iso_alpha_2' => 'TK',
                'iso_alpha_3' => 'TKL',
                'iso_numeric' => '772',
                'international_phone' => '690',
            ],
            [
                'name' => 'Tonga',
                'iso_alpha_2' => 'TO',
                'iso_alpha_3' => 'TON',
                'iso_numeric' => '776',
                'international_phone' => '676',
            ],
            [
                'name' => 'Tuvalu',
                'iso_alpha_2' => 'TV',
                'iso_alpha_3' => 'TUV',
                'iso_numeric' => '798',
                'international_phone' => '688',
            ],
            [
                'name' => 'U.S. Minor Outlying Islands',
                'iso_alpha_2' => 'UM',
                'iso_alpha_3' => 'UMI',
                'iso_numeric' => '581',
                'international_phone' => '1',
            ],
            [
                'name' => 'Vanuatu',
                'iso_alpha_2' => 'VU',
                'iso_alpha_3' => 'VUT',
                'iso_numeric' => '548',
                'international_phone' => '678',
            ],
            [
                'name' => 'Wallis and Futuna Islands',
                'iso_alpha_2' => 'WF',
                'iso_alpha_3' => 'WLF',
                'iso_numeric' => '876',
                'international_phone' => '681',
            ],
        ];

    }
}
