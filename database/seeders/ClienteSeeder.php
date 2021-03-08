<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Cliente $cliente)
    {
        $cliente->create([
            'nome'=>'Douglas',
            'idade'=>'26',
            'cidade'=>'São Sebastião do Caí'
        ]);
        $cliente->create([
            'nome'=>'Sabrina',
            'idade'=>'28',
            'cidade'=>'Alto Feliz'
        ]);
        $cliente->create([
            'nome'=>'Marta',
            'idade'=>'35',
            'cidade'=>'Porto Alegre'
        ]);
        $cliente->create([
            'nome'=>'Fabiano',
            'idade'=>'54',
            'cidade'=>'Porto Alegre'
        ]);
    }
}
