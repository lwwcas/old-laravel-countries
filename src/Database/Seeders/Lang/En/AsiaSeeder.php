<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryBuilder;

class AsiaSeeder extends Seeder
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
    protected $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Afghanistan',
                'iso_alpha_2' => 'AF',
                'iso_alpha_3' => 'AFG',
                'iso_numeric' => '4',
                'international_phone' => '93',
            ],
            [
                'name' => 'Armenia',
                'iso_alpha_2' => 'AM',
                'iso_alpha_3' => 'ARM',
                'iso_numeric' => '51',
                'international_phone' => '374',
            ],
            [
                'name' => 'Azerbaijan',
                'iso_alpha_2' => 'AZ',
                'iso_alpha_3' => 'AZE',
                'iso_numeric' => '31',
                'international_phone' => '994',
            ],
            [
                'name' => 'Bahrain',
                'iso_alpha_2' => 'BH',
                'iso_alpha_3' => 'BHR',
                'iso_numeric' => '48',
                'international_phone' => '973',
            ],
            [
                'name' => 'Bangladesh',
                'iso_alpha_2' => 'BD',
                'iso_alpha_3' => 'BGD',
                'iso_numeric' => '50',
                'international_phone' => '880',
            ],
            [
                'name' => 'Bhutan',
                'iso_alpha_2' => 'BT',
                'iso_alpha_3' => 'BTN',
                'iso_numeric' => '64',
                'international_phone' => '975',
            ],
            [
                'name' => 'Brunei Darussalam',
                'iso_alpha_2' => 'BN',
                'iso_alpha_3' => 'BRN',
                'iso_numeric' => '96',
                'international_phone' => '673',
            ],
            [
                'name' => 'Cambodia',
                'iso_alpha_2' => 'KH',
                'iso_alpha_3' => 'KHM',
                'iso_numeric' => '116',
                'international_phone' => '855',
            ],
            [
                'name' => 'China',
                'iso_alpha_2' => 'CN',
                'iso_alpha_3' => 'CHN',
                'iso_numeric' => '156',
                'international_phone' => '86',
            ],
            [
                'name' => 'Cyprus',
                'iso_alpha_2' => 'CY',
                'iso_alpha_3' => 'CYP',
                'iso_numeric' => '196',
                'international_phone' => '357',
            ],
            [
                'name' => 'Georgia',
                'iso_alpha_2' => 'GE',
                'iso_alpha_3' => 'GEO',
                'iso_numeric' => '268',
                'international_phone' => '995',
            ],
            [
                'name' => 'Hong Kong SAR China',
                'iso_alpha_2' => 'HK',
                'iso_alpha_3' => 'HKG',
                'iso_numeric' => '344',
                'international_phone' => '852',
            ],
            [
                'name' => 'India',
                'iso_alpha_2' => 'IN',
                'iso_alpha_3' => 'IND',
                'iso_numeric' => '356',
                'international_phone' => '91',
            ],
            [
                'name' => 'Indonesia',
                'iso_alpha_2' => 'ID',
                'iso_alpha_3' => 'IDN',
                'iso_numeric' => '360',
                'international_phone' => '62',
            ],
            [
                'name' => 'Iran',
                'iso_alpha_2' => 'IR',
                'iso_alpha_3' => 'IRN',
                'iso_numeric' => '364',
                'international_phone' => '98',
            ],
            [
                'name' => 'Iraq',
                'iso_alpha_2' => 'IQ',
                'iso_alpha_3' => 'IRQ',
                'iso_numeric' => '368',
                'international_phone' => '964',
            ],
            [
                'name' => 'Israel',
                'iso_alpha_2' => 'IL',
                'iso_alpha_3' => 'ISR',
                'iso_numeric' => '376',
                'international_phone' => '972',
            ],
            [
                'name' => 'Japan',
                'iso_alpha_2' => 'JP',
                'iso_alpha_3' => 'JPN',
                'iso_numeric' => '392',
                'international_phone' => '81',
            ],
            [
                'name' => 'Jordan',
                'iso_alpha_2' => 'JO',
                'iso_alpha_3' => 'JOR',
                'iso_numeric' => '400',
                'international_phone' => '962',
            ],
            [
                'name' => 'Kazakhstan',
                'iso_alpha_2' => 'KZ',
                'iso_alpha_3' => 'KAZ',
                'iso_numeric' => '398',
                'international_phone' => '7',
            ],
            [
                'name' => 'Kuwait',
                'iso_alpha_2' => 'KW',
                'iso_alpha_3' => 'KWT',
                'iso_numeric' => '414',
                'international_phone' => '965',
            ],
            [
                'name' => 'Kyrgyzstan',
                'iso_alpha_2' => 'KG',
                'iso_alpha_3' => 'KGZ',
                'iso_numeric' => '417',
                'international_phone' => '996',
            ],
            [
                'name' => 'Lao PDR',
                'iso_alpha_2' => 'LA',
                'iso_alpha_3' => 'LAO',
                'iso_numeric' => '418',
                'international_phone' => '856',
            ],
            [
                'name' => 'Lebanon',
                'iso_alpha_2' => 'LB',
                'iso_alpha_3' => 'LBN',
                'iso_numeric' => '422',
                'international_phone' => '961',
            ],
            [
                'name' => 'Macau SAR China',
                'iso_alpha_2' => 'MO',
                'iso_alpha_3' => 'MAC',
                'iso_numeric' => '446',
                'international_phone' => '853',
            ],
            [
                'name' => 'Malaysia',
                'iso_alpha_2' => 'MY',
                'iso_alpha_3' => 'MYS',
                'iso_numeric' => '458',
                'international_phone' => '60',
            ],
            [
                'name' => 'Maldives',
                'iso_alpha_2' => 'MV',
                'iso_alpha_3' => 'MDV',
                'iso_numeric' => '462',
                'international_phone' => '960',
            ],
            [
                'name' => 'Mongolia',
                'iso_alpha_2' => 'MN',
                'iso_alpha_3' => 'MNG',
                'iso_numeric' => '496',
                'international_phone' => '976',
            ],
            [
                'name' => 'Myanmar',
                'iso_alpha_2' => 'MM',
                'iso_alpha_3' => 'MMR',
                'iso_numeric' => '104',
                'international_phone' => '95',
            ],
            [
                'name' => 'Nepal',
                'iso_alpha_2' => 'NP',
                'iso_alpha_3' => 'NPL',
                'iso_numeric' => '524',
                'international_phone' => '977',
            ],
            [
                'name' => 'Neutral Zone',
                'iso_alpha_2' => 'NT',
                'iso_alpha_3' => 'NTZ',
                'iso_numeric' => '1058',
                'international_phone' => null,
            ],
            [
                'name' => 'North Korea',
                'iso_alpha_2' => 'KP',
                'iso_alpha_3' => 'PRK',
                'iso_numeric' => '408',
                'international_phone' => '850',
            ],
            [
                'name' => 'Oman',
                'iso_alpha_2' => 'OM',
                'iso_alpha_3' => 'OMN',
                'iso_numeric' => '512',
                'international_phone' => '968',
            ],
            [
                'name' => 'Pakistan',
                'iso_alpha_2' => 'PK',
                'iso_alpha_3' => 'PAK',
                'iso_numeric' => '586',
                'international_phone' => '92',
            ],
            [
                'name' => 'Palestinian Territory',
                'iso_alpha_2' => 'PS',
                'iso_alpha_3' => 'PSE',
                'iso_numeric' => '275',
                'international_phone' => '970',
            ],
            [
                'name' => 'People\'s Democratic Republic of Yemen',
                'iso_alpha_2' => 'YD',
                'iso_alpha_3' => 'YDD',
                'iso_numeric' => null,
                'international_phone' => '967',
            ],
            [
                'name' => 'Philippines',
                'iso_alpha_2' => 'ph',
                'iso_alpha_3' => 'PHL',
                'iso_numeric' => '608',
                'international_phone' => '63',
            ],
            [
                'name' => 'Qatar',
                'iso_alpha_2' => 'QA',
                'iso_alpha_3' => 'QAT',
                'iso_numeric' => '634',
                'international_phone' => '974',
            ],
            [
                'name' => 'Saudi Arabia',
                'iso_alpha_2' => 'SA',
                'iso_alpha_3' => 'SAU',
                'iso_numeric' => '682',
                'international_phone' => '966',
            ],
            [
                'name' => 'Singapore',
                'iso_alpha_2' => 'SG',
                'iso_alpha_3' => 'SGP',
                'iso_numeric' => '702',
                'international_phone' => '65',
            ],
            [
                'name' => 'South Korea',
                'iso_alpha_2' => 'KR',
                'iso_alpha_3' => 'KOR',
                'iso_numeric' => '410',
                'international_phone' => '82',
            ],
            [
                'name' => 'Sri Lanka',
                'iso_alpha_2' => 'LK',
                'iso_alpha_3' => 'LKA',
                'iso_numeric' => '144',
                'international_phone' => '94',
            ],
            [
                'name' => 'Syria',
                'iso_alpha_2' => 'SY',
                'iso_alpha_3' => 'SYR',
                'iso_numeric' => '760',
                'international_phone' => '963',
            ],
            [
                'name' => 'Taiwan',
                'iso_alpha_2' => 'TW',
                'iso_alpha_3' => 'TWN',
                'iso_numeric' => '158',
                'international_phone' => '886',
            ],
            [
                'name' => 'Tajikistan',
                'iso_alpha_2' => 'TJ',
                'iso_alpha_3' => 'TJK',
                'iso_numeric' => '762',
                'international_phone' => '992',
            ],
            [
                'name' => 'Thailand',
                'iso_alpha_2' => 'TH',
                'iso_alpha_3' => 'THA',
                'iso_numeric' => '764',
                'international_phone' => '66',
            ],
            [
                'name' => 'Timor-Leste',
                'iso_alpha_2' => 'TL',
                'iso_alpha_3' => 'TLS',
                'iso_numeric' => '626',
                'international_phone' => '670',
            ],
            [
                'name' => 'Turkey',
                'iso_alpha_2' => 'TR',
                'iso_alpha_3' => 'TUR',
                'iso_numeric' => '792',
                'international_phone' => '90',
            ],
            [
                'name' => 'Turkmenistan',
                'iso_alpha_2' => 'TM',
                'iso_alpha_3' => 'TKM',
                'iso_numeric' => '795',
                'international_phone' => '993',
            ],
            [
                'name' => 'United Arab Emirates',
                'iso_alpha_2' => 'AE',
                'iso_alpha_3' => 'ARE',
                'iso_numeric' => '784',
                'international_phone' => '971',
            ],
            [
                'name' => 'Uzbekistan',
                'iso_alpha_2' => 'UZ',
                'iso_alpha_3' => 'UZB',
                'iso_numeric' => '860',
                'international_phone' => '998',
            ],
            [
                'name' => 'Vietnam',
                'iso_alpha_2' => 'VN',
                'iso_alpha_3' => 'VNM',
                'iso_numeric' => '704',
                'international_phone' => '84',
            ],
            [
                'name' => 'Yemen',
                'iso_alpha_2' => 'YE',
                'iso_alpha_3' => 'YEM',
                'iso_numeric' => '887',
                'international_phone' => '967',
            ],
        ];

        CountryBuilder::create($countries, $this->region, $this->lang);
    }
}
