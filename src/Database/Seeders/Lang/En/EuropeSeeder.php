<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryBuilder;

class EuropeSeeder extends Seeder
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
    protected $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Albania',
                'iso_alpha_2' => 'AL',
                'iso_alpha_3' => 'ALB',
                'iso_numeric' => '8',
                'international_phone' => '355',
            ],
            [
                'name' => 'Andorra',
                'iso_alpha_2' => 'AD',
                'iso_alpha_3' => 'AND',
                'iso_numeric' => '20',
                'international_phone' => '376',
            ],
            [
                'name' => 'Austria',
                'iso_alpha_2' => 'AT',
                'iso_alpha_3' => 'AUT',
                'iso_numeric' => '40',
                'international_phone' => '43',
            ],
            [
                'name' => 'Belarus',
                'iso_alpha_2' => 'BY',
                'iso_alpha_3' => 'BLR',
                'iso_numeric' => '112',
                'international_phone' => '375',
            ],
            [
                'name' => 'Belgium',
                'iso_alpha_2' => 'BE',
                'iso_alpha_3' => 'BEL',
                'iso_numeric' => '56',
                'international_phone' => '32',
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'iso_alpha_2' => 'BA',
                'iso_alpha_3' => 'BIH',
                'iso_numeric' => '70',
                'international_phone' => '387',
            ],
            [
                'name' => 'Bulgaria',
                'iso_alpha_2' => 'BG',
                'iso_alpha_3' => 'BGR',
                'iso_numeric' => '100',
                'international_phone' => '359',
            ],
            [
                'name' => 'Croatia',
                'iso_alpha_2' => 'HR',
                'iso_alpha_3' => 'HRV',
                'iso_numeric' => '191',
                'international_phone' => '385',
            ],
            [
                'name' => 'Cyprus',
                'iso_alpha_2' => 'CY',
                'iso_alpha_3' => 'CYP',
                'iso_numeric' => '196',
                'international_phone' => '357',
            ],
            [
                'name' => 'Czech Republic',
                'iso_alpha_2' => 'CZ',
                'iso_alpha_3' => 'CZE',
                'iso_numeric' => '203',
                'international_phone' => '420',
            ],
            [
                'name' => 'Denmark',
                'iso_alpha_2' => 'DK',
                'iso_alpha_3' => 'DNK',
                'iso_numeric' => '208',
                'international_phone' => '45',
            ],
            [
                'name' => 'East Germany',
                'iso_alpha_2' => 'DD',
                'iso_alpha_3' => 'DDR',
                'iso_numeric' => '278',
                'international_phone' => '37',
            ],
            [
                'name' => 'Estonia',
                'iso_alpha_2' => 'EE',
                'iso_alpha_3' => 'EST',
                'iso_numeric' => '233',
                'international_phone' => '372',
            ],
            [
                'name' => 'Faroe Islands',
                'iso_alpha_2' => 'FO',
                'iso_alpha_3' => 'FRO',
                'iso_numeric' => '234',
                'international_phone' => '298',
            ],
            [
                'name' => 'Finland',
                'iso_alpha_2' => 'FI',
                'iso_alpha_3' => 'FIN',
                'iso_numeric' => '246',
                'international_phone' => '358',
            ],
            [
                'name' => 'France',
                'iso_alpha_2' => 'FR',
                'iso_alpha_3' => 'FRA',
                'iso_numeric' => '250',
                'international_phone' => '33',
            ],
            [
                'name' => 'Germany',
                'iso_alpha_2' => 'DE',
                'iso_alpha_3' => 'DEU',
                'iso_numeric' => '276',
                'international_phone' => '49',
            ],
            [
                'name' => 'Gibraltar',
                'iso_alpha_2' => 'GI',
                'iso_alpha_3' => 'GIB',
                'iso_numeric' => '292',
                'international_phone' => '350',
            ],
            [
                'name' => 'Greece',
                'iso_alpha_2' => 'GR',
                'iso_alpha_3' => 'GRC',
                'iso_numeric' => '300',
                'international_phone' => '30',
            ],
            [
                'name' => 'Guernsey',
                'iso_alpha_2' => 'GG',
                'iso_alpha_3' => 'GGY',
                'iso_numeric' => '831',
                'international_phone' => '44',
            ],
            [
                'name' => 'Hungary',
                'iso_alpha_2' => 'HU',
                'iso_alpha_3' => 'HUN',
                'iso_numeric' => '348',
                'international_phone' => '36',
            ],
            [
                'name' => 'Iceland',
                'iso_alpha_2' => 'IS',
                'iso_alpha_3' => 'ISL',
                'iso_numeric' => '352',
                'international_phone' => '354',
            ],
            [
                'name' => 'Ireland',
                'iso_alpha_2' => 'IE',
                'iso_alpha_3' => 'IRL',
                'iso_numeric' => '372',
                'international_phone' => '353',
            ],
            [
                'name' => 'Isle of Man',
                'iso_alpha_2' => 'IM',
                'iso_alpha_3' => 'IMN',
                'iso_numeric' => '833',
                'international_phone' => '44',
            ],
            [
                'name' => 'Italy',
                'iso_alpha_2' => 'IT',
                'iso_alpha_3' => 'ITA',
                'iso_numeric' => '380',
                'international_phone' => '39',
            ],
            [
                'name' => 'Jersey',
                'iso_alpha_2' => 'JE',
                'iso_alpha_3' => 'JEY',
                'iso_numeric' => '832',
                'international_phone' => '44',
            ],
            [
                'name' => 'Latvia',
                'iso_alpha_2' => 'LV',
                'iso_alpha_3' => 'LVA',
                'iso_numeric' => '428',
                'international_phone' => '371',
            ],
            [
                'name' => 'Liechtenstein',
                'iso_alpha_2' => 'LI',
                'iso_alpha_3' => 'LIE',
                'iso_numeric' => '438',
                'international_phone' => '423',
            ],
            [
                'name' => 'Lithuania',
                'iso_alpha_2' => 'LT',
                'iso_alpha_3' => 'LTU',
                'iso_numeric' => '440',
                'international_phone' => '370',
            ],
            [
                'name' => 'Luxembourg',
                'iso_alpha_2' => 'LU',
                'iso_alpha_3' => 'LUX',
                'iso_numeric' => '442',
                'international_phone' => '352',
            ],
            [
                'name' => 'Macedonia',
                'iso_alpha_2' => 'MK',
                'iso_alpha_3' => 'MKD',
                'iso_numeric' => '807',
                'international_phone' => '389',
            ],
            [
                'name' => 'Malta',
                'iso_alpha_2' => 'MT',
                'iso_alpha_3' => 'MLT',
                'iso_numeric' => '470',
                'international_phone' => '356',
            ],
            [
                'name' => 'Metropolitan France',
                'iso_alpha_2' => 'FX',
                'iso_alpha_3' => 'FXX',
                'iso_numeric' => '249',
                'international_phone' => null,
            ],
            [
                'name' => 'Moldova',
                'iso_alpha_2' => 'MD',
                'iso_alpha_3' => 'MDA',
                'iso_numeric' => '498',
                'international_phone' => '373',
            ],
            [
                'name' => 'Monaco',
                'iso_alpha_2' => 'MC',
                'iso_alpha_3' => 'MCO',
                'iso_numeric' => '492',
                'international_phone' => '377',
            ],
            [
                'name' => 'Montenegro',
                'iso_alpha_2' => 'ME',
                'iso_alpha_3' => 'MNE',
                'iso_numeric' => '499',
                'international_phone' => '382',
            ],
            [
                'name' => 'Netherlands',
                'iso_alpha_2' => 'NL',
                'iso_alpha_3' => 'NLD',
                'iso_numeric' => '528',
                'international_phone' => '31',
            ],
            [
                'name' => 'Norway',
                'iso_alpha_2' => 'NO',
                'iso_alpha_3' => 'NOR',
                'iso_numeric' => '578',
                'international_phone' => '47',
            ],
            [
                'name' => 'Poland',
                'iso_alpha_2' => 'PL',
                'iso_alpha_3' => 'POL',
                'iso_numeric' => '616',
                'international_phone' => '48',
            ],
            [
                'name' => 'Portugal',
                'iso_alpha_2' => 'PT',
                'iso_alpha_3' => 'PRT',
                'iso_numeric' => '620',
                'international_phone' => '351',
            ],
            [
                'name' => 'Romania',
                'iso_alpha_2' => 'RO',
                'iso_alpha_3' => 'ROU',
                'iso_numeric' => '642',
                'international_phone' => '40',
            ],
            [
                'name' => 'Russia',
                'iso_alpha_2' => 'EU',
                'iso_alpha_3' => 'RUS',
                'iso_numeric' => '643',
                'international_phone' => '7',
            ],
            [
                'name' => 'San Marino',
                'iso_alpha_2' => 'SM',
                'iso_alpha_3' => 'SMR',
                'iso_numeric' => '674',
                'international_phone' => '378',
            ],
            [
                'name' => 'Serbia',
                'iso_alpha_2' => 'RS',
                'iso_alpha_3' => 'SRB',
                'iso_numeric' => '688',
                'international_phone' => '381',
            ],
            [
                'name' => 'Serbia and Montenegro',
                'iso_alpha_2' => 'CS',
                'iso_alpha_3' => 'SCG',
                'iso_numeric' => '891',
                'international_phone' => '381',
            ],
            [
                'name' => 'Slovakia',
                'iso_alpha_2' => 'SK',
                'iso_alpha_3' => 'SVK',
                'iso_numeric' => '703',
                'international_phone' => '421',
            ],
            [
                'name' => 'Slovenia',
                'iso_alpha_2' => 'SI',
                'iso_alpha_3' => 'SVN',
                'iso_numeric' => '705',
                'international_phone' => '386',
            ],
            [
                'name' => 'Spain',
                'iso_alpha_2' => 'ES',
                'iso_alpha_3' => 'ESP',
                'iso_numeric' => '724',
                'international_phone' => '34',
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'iso_alpha_2' => 'SJ',
                'iso_alpha_3' => 'SJM',
                'iso_numeric' => '744',
                'international_phone' => '47',
            ],
            [
                'name' => 'Sweden',
                'iso_alpha_2' => 'SE',
                'iso_alpha_3' => 'SWE',
                'iso_numeric' => '752',
                'international_phone' => '46',
            ],
            [
                'name' => 'Switzerland',
                'iso_alpha_2' => 'CH',
                'iso_alpha_3' => 'CHE',
                'iso_numeric' => '756',
                'international_phone' => '41',
            ],
            [
                'name' => 'Ukraine',
                'iso_alpha_2' => 'UA',
                'iso_alpha_3' => 'UKR',
                'iso_numeric' => '804',
                'international_phone' => '380',
            ],
            [
                'name' => 'Union of Soviet Socialist Republics',
                'iso_alpha_2' => 'SU',
                'iso_alpha_3' => 'SUN',
                'iso_numeric' => '810',
                'international_phone' => '7',
            ],
            [
                'name' => 'United Kingdom',
                'iso_alpha_2' => 'GB',
                'iso_alpha_3' => 'GBR',
                'iso_numeric' => '826',
                'international_phone' => '44',
            ],
            [
                'name' => 'Vatican City',
                'iso_alpha_2' => 'VA',
                'iso_alpha_3' => 'VAT',
                'iso_numeric' => '336',
                'international_phone' => null,
            ],
            [
                'name' => 'Åland Islands',
                'iso_alpha_2' => 'AX',
                'iso_alpha_3' => 'ALA',
                'iso_numeric' => '248',
                'international_phone' => '358',
            ],
        ];

        CountryBuilder::create($countries, $this->region, $this->lang);

    }
}
