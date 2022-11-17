<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // \App\Models\User::factory(10)->create();
        $this->call(AgenciesTableSeeder::class);
        $this->call(AjudesFrasesTableSeeder::class);
        $this->call(CartesTrucadesTableSeeder::class);
        $this->call(CartesTrucadesHasAgenciesTableSeeder::class);
        $this->call(ComarquesTableSeeder::class);
        $this->call(DadesPersonalsTableSeeder::class);
        $this->call(EstatsAgenciesTableSeeder::class);
        $this->call(EstatsExpedientsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(MunicipisTableSeeder::class);
        $this->call(PerfilsTableSeeder::class);
        $this->call(ProvinciesTableSeeder::class);
        $this->call(TipusIncidentsTableSeeder::class);
        $this->call(TipusLocalitzacionsTableSeeder::class);
        $this->call(UsuarisTableSeeder::class);

        //Enable foreign key check for this connection after running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
