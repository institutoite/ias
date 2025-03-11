<?php

namespace Database\Seeders;

use App\Models\Ia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Desactivar restricciones de clave foránea
         Schema::disableForeignKeyConstraints();
        
         // Limpiar la tabla antes de sembrar
         DB::table('ias')->truncate();
         
         // Datos de ejemplo
         $ias = [
             [
                 'nombre' => 'ChatGPT',
                 'logo' => 'ias/chatgpt.png',
                 'descripcion' => 'Modelo de lenguaje avanzado basado en GPT-4, capaz de mantener conversaciones naturales y generar contenido.',
                 'estado' => true,
                 'created_at' => '2023-01-15 00:00:00',
                 'updated_at' => '2023-06-20 00:00:00'
             ],
             [
                 'nombre' => 'DALL-E',
                 'logo' => 'ias/dalle.png',
                 'descripcion' => 'IA generativa que crea imágenes a partir de descripciones textuales con gran precisión y creatividad.',
                 'estado' => true,
                 'created_at' => '2022-11-10 00:00:00',
                 'updated_at' => '2023-05-15 00:00:00'
             ],
             [
                 'nombre' => 'Midjourney',
                 'logo' => 'ias/midjourney.png',
                 'descripcion' => 'Herramienta de IA que genera imágenes artísticas de alta calidad a partir de prompts textuales.',
                 'estado' => true,
                 'created_at' => '2022-07-12 00:00:00',
                 'updated_at' => '2023-04-30 00:00:00'
             ],
             [
                 'nombre' => 'Copilot',
                 'logo' => 'ias/copilot.png',
                 'descripcion' => 'Asistente de programación que sugiere código y funciones completas mientras escribes.',
                 'estado' => true,
                 'created_at' => '2021-06-29 00:00:00',
                 'updated_at' => '2023-03-10 00:00:00'
             ],
             [
                 'nombre' => 'Bard',
                 'logo' => 'ias/bard.png',
                 'descripcion' => 'Chatbot experimental de Google basado en el modelo de lenguaje LaMDA.',
                 'estado' => false,
                 'created_at' => '2023-02-08 00:00:00',
                 'updated_at' => '2023-07-01 00:00:00'
             ],
             [
                 'nombre' => 'Stable Diffusion',
                 'logo' => 'ias/stable.png',
                 'descripcion' => 'Modelo de IA de código abierto para generar imágenes detalladas a partir de descripciones textuales.',
                 'estado' => true,
                 'created_at' => '2022-08-22 00:00:00',
                 'updated_at' => '2023-05-18 00:00:00'
             ],
             [
                 'nombre' => 'Claude',
                 'logo' => 'ias/claude.png',
                 'descripcion' => 'Asistente de IA conversacional desarrollado por Anthropic con enfoque en ser útil, inofensivo y honesto.',
                 'estado' => true,
                 'created_at' => '2023-03-14 00:00:00',
                 'updated_at' => '2023-06-30 00:00:00'
             ],
             [
                 'nombre' => 'Sora',
                 'logo' => 'ias/sora.png',
                 'descripcion' => 'IA generativa de OpenAI capaz de crear videos realistas a partir de instrucciones textuales.',
                 'estado' => false,
                 'created_at' => '2024-02-15 00:00:00',
                 'updated_at' => '2024-02-15 00:00:00'
             ],
             [
                'nombre' => 'Grammarly',
                'logo' => 'lenguaje/grammarly.png',
                'descripcion' => 'Herramienta de corrección gramatical y de estilo para mejorar la escritura en inglés.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Wondershare',
                'logo' => 'ias/wondershare.png',
                'descripcion' => 'Herramientas de software para edición de video, PDF, recuperación de datos y más.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Digiface',
                'logo' => 'ias/digiface.png',
                'descripcion' => 'Plataforma de inteligencia artificial especializada en reconocimiento facial y análisis de imágenes.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Minimax AI',
                'logo' => 'ias/minimaxai.png',
                'descripcion' => 'Solución de IA para optimización y automatización de procesos empresariales.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nombre' => 'Viggle',
                'logo' => 'ias/viggle.png',
                'descripcion' => 'Herramienta de IA para análisis de datos en tiempo real y toma de decisiones inteligentes.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Krea',
                'logo' => 'ias/krea.png',
                'descripcion' => 'Plataforma de IA para la creación de contenido visual y diseño generativo.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'LivePortrait',
                'logo' => 'ias/liveportrait.png',
                'descripcion' => 'Tecnología de IA que genera retratos animados a partir de imágenes estáticas.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Adobe Express',
                'logo' => 'ias/adobe_express.png',
                'descripcion' => 'Herramienta de diseño gráfico y creación de contenido basada en IA, fácil de usar y en la nube.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
         ];
 
         // Insertar datos
         foreach ($ias as $ia) {
             Ia::create($ia);
         }
         
         // Reactivar restricciones de clave foránea
         Schema::enableForeignKeyConstraints();
    }
}
