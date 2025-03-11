<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Desactivar restricciones de clave foránea
         Schema::disableForeignKeyConstraints();
        
         // Limpiar la tabla antes de sembrar
         DB::table('categorias')->truncate();
         
         // Lista de categorías
         $categorias = [
             'Generación de Texto',
             'Generación de Imágenes',
             'Edición de Video',
             'Generación de Audio y Voz',
             'Asistentes Virtuales',
             'Herramientas de Programación',
             'Análisis de Datos',
             'Marketing y Ventas',
             'Diseño Gráfico',
             'Educación y Aprendizaje',
             'Productividad',
             'Chatbots y Conversacionales',
             'Realidad Aumentada (AR) y Virtual (VR)',
             'Finanzas y Negocios',
             'Salud y Medicina',
             'Juegos',
             'Redes Sociales',
             'Legal y Jurídico',
             'Recursos Humanos',
             'Ciencia e Investigación'
         ];
 
         // Insertar categorías
         foreach ($categorias as $categoria) {
             Categoria::create([
                 'categoria' => $categoria
             ]);
         }
         
         // Reactivar restricciones de clave foránea
         Schema::enableForeignKeyConstraints();
    }
}
