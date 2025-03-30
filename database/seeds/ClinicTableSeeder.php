<?php

use App\Clinic;
use App\Specialty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionals = DB::table('regionals')->inRandomOrder()->limit(5)->pluck('id');

   
        $Specialty1 = Specialty::create(['name' => 'Cardiologia']);
        $Specialty2 = Specialty::create(['name' => 'Dermatologia']);
        $Specialty3 = Specialty::create(['name' => 'Ortopedia']);

        // Criando Clínicas
        $clinics = [
            [
                'corporate_name' => 'Clínica Saúde Total',
                'trade_name' => 'Saúde Total',
                'cnpj' => '11.111.111/0001-11',
                'regional_id' => $regionals[0],
                'opening_date' => '2020-05-10',
                'active' => true
            ],
            [
                'corporate_name' => 'Centro Médico Vida',
                'trade_name' => 'Vida Clínica',
                'cnpj' => '22.222.222/0001-22',
                'regional_id' => $regionals[1],
                'opening_date' => '2019-08-15',
                'active' => false
            ],
            [
                'corporate_name' => 'Clínica Bem-Estar',
                'trade_name' => 'Bem-Estar',
                'cnpj' => '33.333.333/0001-33',
                'regional_id' => $regionals[2],
                'opening_date' => '2018-03-20',
                'active' => true
            ],
            [
                'corporate_name' => 'Hospital Vida Longa',
                'trade_name' => 'Vida Longa',
                'cnpj' => '44.444.444/0001-44',
                'regional_id' => $regionals[3],
                'opening_date' => '2021-07-12',
                'active' => true
            ],
            [
                'corporate_name' => 'Instituto de Saúde Integral',
                'trade_name' => 'Saúde Integral',
                'cnpj' => '55.555.555/0001-55',
                'regional_id' => $regionals[4],
                'opening_date' => '2017-11-05',
                'active' => false
            ],
        ];

        foreach ($clinics as $dados) {
            $clinica = Clinic::create($dados);

            $clinica->specialties()->attach([
                $Specialty1->id,
                $Specialty2->id,
                $Specialty3->id
            ]);
        }
    }
}
