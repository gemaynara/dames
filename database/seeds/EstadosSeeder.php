<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->truncate();

        DB::table('estados')->insert([
            ['id' => 1, 'estado' => 'Acre', 'abreviacao' => 'AC'],
            ['id' => 2, 'estado' => 'Alagoas', 'abreviacao' => 'AL'],
            ['id' => 3, 'estado' => 'Amapá', 'abreviacao' => 'AP'],
            ['id' => 4, 'estado' => 'Amazonas', 'abreviacao' => 'AM'],
            ['id' => 5, 'estado' => 'Bahia', 'abreviacao' => 'BA'],
            ['id' => 6, 'estado' => 'Ceará', 'abreviacao' => 'CE'],
            ['id' => 7, 'estado' => 'Distrito Federal', 'abreviacao' => 'DF'],
            ['id' => 8, 'estado' => 'Espírito Santo', 'abreviacao' => 'ES'],
            ['id' => 9, 'estado' => 'Goiás', 'abreviacao' => 'GO'],
            ['id' => 10, 'estado' => 'Maranhão', 'abreviacao' => 'MA'],
            ['id' => 11, 'estado' => 'Mato Grosso', 'abreviacao' => 'MT'],
            ['id' => 12, 'estado' => 'Mato Grosso do Sul', 'abreviacao' => 'MS'],
            ['id' => 13, 'estado' => 'Minas Gerais', 'abreviacao' => 'MG'],
            ['id' => 14, 'estado' => 'Pará', 'abreviacao' => 'PA'],
            ['id' => 15, 'estado' => 'Paraíba', 'abreviacao' => 'PB'],
            ['id' => 16, 'estado' => 'Paraná', 'abreviacao' => 'PR'],
            ['id' => 17, 'estado' => 'Pernambuco', 'abreviacao' => 'PE'],
            ['id' => 18, 'estado' => 'Piauí', 'abreviacao' => 'PI'],
            ['id' => 19, 'estado' => 'Rio de Janeiro', 'abreviacao' => 'RJ'],
            ['id' => 20, 'estado' => 'Rio Grande do Norte', 'abreviacao' => 'RN'],
            ['id' => 21, 'estado' => 'Rio Grande do Sul', 'abreviacao' => 'RS'],
            ['id' => 22, 'estado' => 'Rondônia', 'abreviacao' => 'RO'],
            ['id' => 23, 'estado' => 'Roraima', 'abreviacao' => 'RR'],
            ['id' => 24, 'estado' => 'Santa Catarina', 'abreviacao' => 'SC'],
            ['id' => 25, 'estado' => 'São Paulo', 'abreviacao' => 'SP'],
            ['id' => 26, 'estado' => 'Sergipe', 'abreviacao' => 'SE'],
            ['id' => 27, 'estado' => 'Tocantins', 'abreviacao' => 'TO'],
        ]);
    }
}
