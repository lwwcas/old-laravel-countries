<?php

namespace Modules\Countries\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Countries\Database\Seeders\BaseCountriesRegionsSeeder;
use Modules\Countries\Database\Seeders\BaseCountriesSeeder;


class CountriesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BaseCountriesRegionsSeeder::class);
        $this->call(BaseCountriesSeeder::class);

    }
}
