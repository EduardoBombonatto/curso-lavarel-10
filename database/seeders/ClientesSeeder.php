<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Cliente::create([
            'nome' => 'Eduardo Lorenzetti',
            'email' => 'eduardobombonatto@gmail.com',
            'endereco' => 'Rua Souza Naves',
            'logradouro' => '4241',
            'CEP' => '85810-070',
            'bairro' => 'Centro',
        ]);
        Cliente::create([
            'nome' => 'Eduardo Bombonatto',
            'email' => 'eduardobombonatto@gmail.com',
            'endereco' => 'Rua Souza Naves',
            'logradouro' => '4241',
            'CEP' => '85810-070',
            'bairro' => 'Centro',
        ]);
    }
}
