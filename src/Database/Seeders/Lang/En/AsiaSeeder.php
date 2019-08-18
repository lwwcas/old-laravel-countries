<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class AsiaSeeder extends Seeder
{
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
                'numeric' => '4',
                'international_phone' => '93',
            ],
            [
                'name' => 'Armenia',
                'iso_alpha_2' => 'AM',
                'iso_alpha_3' => 'ARM',
                'numeric' => '51',
                'international_phone' => '374',
            ],
            [
                'name' => 'Azerbaijan',
                'iso_alpha_2' => 'AZ',
                'iso_alpha_3' => 'AZE',
                'numeric' => '31',
                'international_phone' => '994',
            ],
            [
                'name' => 'Bahrain',
                'iso_alpha_2' => 'BH',
                'iso_alpha_3' => 'BHR',
                'numeric' => '48',
                'international_phone' => '973',
            ],
            [
                'name' => 'Bangladesh',
                'iso_alpha_2' => 'BD',
                'iso_alpha_3' => 'BGD',
                'numeric' => '50',
                'international_phone' => '880',
            ],
        ];

        [
            'BT' => 'Bhutan',
            'BN' => 'Brunei',
            'KH' => 'Cambodia',
            'CN' => 'China',
            'CY' => 'Cyprus',
            'GE' => 'Georgia',
            'HK' => 'Hong Kong SAR China',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran',
            'IQ' => 'Iraq',
            'IL' => 'Israel',
            'JP' => 'Japan',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Laos',
            'LB' => 'Lebanon',
            'MO' => 'Macau SAR China',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'MN' => 'Mongolia',
            'MM' => 'Myanmar [Burma]',
            'NP' => 'Nepal',
            'NT' => 'Neutral Zone',
            'KP' => 'North Korea',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PS' => 'Palestinian Territories',
            'YD' => "People's Democratic Republic of Yemen",
            'PH' => 'Philippines',
            'QA' => 'Qatar',
            'SA' => 'Saudi Arabia',
            'SG' => 'Singapore',
            'KR' => 'South Korea',
            'LK' => 'Sri Lanka',
            'SY' => 'Syria',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'AE' => 'United Arab Emirates',
            'UZ' => 'Uzbekistan',
            'VN' => 'Vietnam',
            'YE' => 'Yemen',
        ];

    }
}
