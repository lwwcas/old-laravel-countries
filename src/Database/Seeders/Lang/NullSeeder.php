<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryBuilder;

class NullSeeder extends Seeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    protected $lang = 'null';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regions = [
            'africa' => 'Africa',
            'americas' => 'Americhe',
            'asia' => 'Asia',
            'europe' => 'Europa',
            'oceania' => 'Oceania',
        ];
        CountryBuilder::addRegionTranslation($regions, $this->lang);

        $countries = [
            "DZ" => "Algeria",
            "AO" => "Angola",
            "BJ" => "Benin",
            "BW" => "Botswana",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "CM" => "Camerun",
            "CV" => "Capo Verde",
            "TD" => "Ciad",
            "KM" => "Comore",
            "CG" => "Congo",
            "CI" => "Costa d’Avorio",
            "EG" => "Egitto",
            "ER" => "Eritrea",
            "ET" => "Etiopia",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GH" => "Ghana",
            "DJ" => "Gibuti",
            "GN" => "Guinea",
            "GQ" => "Guinea Equatoriale",
            "GW" => "Guinea-Bissau",
            "KE" => "Kenya",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libia",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "ML" => "Mali",
            "MA" => "Marocco",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "MZ" => "Mozambico",
            "NA" => "Namibia",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "CF" => "Repubblica Centrafricana",
            "CD" => "Repubblica Democratica del Congo",
            "RW" => "Ruanda",
            "RE" => "Réunion",
            "EH" => "Sahara Occidentale",
            "SH" => "Sant’Elena",
            "ST" => "Sao Tomé e Príncipe",
            "SN" => "Senegal",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SO" => "Somalia",
            "ZA" => "Sudafrica",
            "SD" => "Sudan",
            "SZ" => "Swaziland",
            "TZ" => "Tanzania",
            "TG" => "Togo",
            "TN" => "Tunisia",
            "UG" => "Uganda",
            "ZM" => "Zambia",
            "ZW" => "Zimbabwe",
            "AI" => "Anguilla",
            "AG" => "Antigua e Barbuda",
            "AN" => "Antille Olandesi",
            "AR" => "Argentina",
            "AW" => "Aruba",
            "BS" => "Bahamas",
            "BB" => "Barbados",
            "BZ" => "Belize",
            "BM" => "Bermuda",
            "BO" => "Bolivia",
            "BR" => "Brasile",
            "CA" => "Canada",
            "CL" => "Cile",
            "CO" => "Colombia",
            "CR" => "Costa Rica",
            "CU" => "Cuba",
            "DM" => "Dominica",
            "EC" => "Ecuador",
            "SV" => "El Salvador",
            "JM" => "Giamaica",
            "GD" => "Grenada",
            "GL" => "Groenlandia",
            "GP" => "Guadalupa",
            "GT" => "Guatemala",
            "GF" => "Guiana Francese",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HN" => "Honduras",
            "KY" => "Isole Cayman",
            "FK" => "Isole Falkland",
            "TC" => "Isole Turks e Caicos",
            "VI" => "Isole Vergini Americane",
            "VG" => "Isole Vergini Britanniche",
            "MQ" => "Martinica",
            "MX" => "Messico",
            "MS" => "Montserrat",
            "NI" => "Nicaragua",
            "PA" => "Panama",
            "PY" => "Paraguay",
            "PE" => "Perù",
            "PR" => "Portorico",
            "DO" => "Repubblica Dominicana",
            "KN" => "Saint Kitts e Nevis",
            "LC" => "Saint Lucia",
            "PM" => "Saint Pierre e Miquelon",
            "VC" => "Saint Vincent e Grenadines",
            "BL" => "San Bartolomeo",
            "US" => "Stati Uniti",
            "SR" => "Suriname",
            "TT" => "Trinidad e Tobago",
            "UY" => "Uruguay",
            "VE" => "Venezuela",
            "AF" => "Afghanistan",
            "SA" => "Arabia Saudita",
            "AM" => "Armenia",
            "AZ" => "Azerbaigian",
            "BH" => "Bahrein",
            "BD" => "Bangladesh",
            "BT" => "Bhutan",
            "BN" => "Brunei",
            "KH" => "Cambogia",
            "CN" => "Cina",
            "CY" => "Cipro",
            "KP" => "Corea del Nord",
            "KR" => "Corea del Sud",
            "AE" => "Emirati Arabi Uniti",
            "PH" => "Filippine",
            "GE" => "Georgia",
            "JP" => "Giappone",
            "JO" => "Giordania",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran",
            "IQ" => "Iraq",
            "IL" => "Israele",
            "KZ" => "Kazakistan",
            "KG" => "Kirghizistan",
            "KW" => "Kuwait",
            "LA" => "Laos",
            "LB" => "Libano",
            "MV" => "Maldive",
            "MY" => "Malesia",
            "MN" => "Mongolia",
            "MM" => "Myanmar",
            "NP" => "Nepal",
            "OM" => "Oman",
            "PK" => "Pakistan",
            "PS" => "Palestina",
            "QA" => "Qatar",
            "SY" => "Siria",
            "LK" => "Sri Lanka",
            "TJ" => "Tagikistan",
            "TH" => "Tailandia",
            "TW" => "Taiwan",
            "TL" => "Timor Est",
            "TR" => "Turchia",
            "TM" => "Turkmenistan",
            "UZ" => "Uzbekistan",
            "VN" => "Vietnam",
            "YE" => "Yemen",
            "AL" => "Albania",
            "AD" => "Andorra",
            "AT" => "Austria",
            "BE" => "Belgio",
            "BY" => "Bielorussia",
            "BA" => "Bosnia Erzegovina",
            "BG" => "Bulgaria",
            "CY" => "Cipro",
            "HR" => "Croazia",
            "DK" => "Danimarca",
            "EE" => "Estonia",
            "RU" => "Federazione Russa",
            "FI" => "Finlandia",
            "FR" => "Francia",
            "DE" => "Germania",
            "GI" => "Gibilterra",
            "GR" => "Grecia",
            "GG" => "Guernsey",
            "IE" => "Irlanda",
            "IS" => "Islanda",
            "SB" => "Isole Solomon",
            "KI" => "Kiribati",
            "FM" => "Micronesia",
            "IM" => "Isola di Man",
            "AX" => "Isole Aland",
            "FO" => "Isole Faroe",
            "IT" => "Italia",
            "JE" => "Jersey",
            "LV" => "Lettonia",
            "LI" => "Liechtenstein",
            "LT" => "Lituania",
            "LU" => "Lussemburgo",
            "MT" => "Malta",
            "MD" => "Moldavia",
            "MC" => "Monaco",
            "ME" => "Montenegro",
            "NO" => "Norvegia",
            "GB" => "Regno Unito",
            "CZ" => "Repubblica Ceca",
            "MK" => "Repubblica di Macedonia",
            "RO" => "Romania",
            "SM" => "San Marino",
            "RS" => "Serbia",
            "CS" => "Serbia e Montenegro",
            "SK" => "Slovacchia",
            "SI" => "Slovenia",
            "ES" => "Spagna",
            "SJ" => "Svalbard e Jan Mayen",
            "SE" => "Svezia",
            "CH" => "Svizzera",
            "UA" => "Ucraina",
            "HU" => "Ungheria",
            "VA" => "Vaticano",
            "AQ" => "Antartide",
            "AU" => "Australia",
            "FJ" => "Figi",
            "NR" => "Nauru",
            "NU" => "Niue",
            "TO" => "Tonga",
            "TV" => "Tuvalu",
            "VU" => "Vanuatu",
            "WF" => "Wallis e Futuna",
        ];

        CountryBuilder::addTranslation($countries, $this->lang);

    }
}
