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
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://chat.openai.com',
                'created_at' => '2023-01-15 00:00:00',
                'updated_at' => '2023-06-20 00:00:00'
            ],
            [
                'nombre' => 'DALL-E',
                'logo' => 'ias/dalle.png',
                'descripcion' => 'IA generativa que crea imágenes a partir de descripciones textuales con gran precisión y creatividad.',
                'estado' => true,
                'categoria_id' => 2, // Generación de Imágenes
                'url' => 'https://openai.com/dall-e',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2023-05-15 00:00:00'
            ],
            [
                'nombre' => 'Midjourney',
                'logo' => 'ias/midjourney.png',
                'descripcion' => 'Herramienta de IA que genera imágenes artísticas de alta calidad a partir de prompts textuales.',
                'estado' => true,
                'categoria_id' => 2, // Generación de Imágenes
                'url' => 'https://www.midjourney.com',
                'created_at' => '2022-07-12 00:00:00',
                'updated_at' => '2023-04-30 00:00:00'
            ],
            [
                'nombre' => 'Copilot',
                'logo' => 'ias/copilot.png',
                'descripcion' => 'Asistente de programación que sugiere código y funciones completas mientras escribes.',
                'estado' => true,
                'categoria_id' => 6, // Herramientas de Programación
                'url' => 'https://copilot.github.com',
                'created_at' => '2021-06-29 00:00:00',
                'updated_at' => '2023-03-10 00:00:00'
            ],
            [
                'nombre' => 'Bard',
                'logo' => 'ias/bard.png',
                'descripcion' => 'Chatbot experimental de Google basado en el modelo de lenguaje LaMDA.',
                'estado' => false,
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://bard.google.com',
                'created_at' => '2023-02-08 00:00:00',
                'updated_at' => '2023-07-01 00:00:00'
            ],
            [
                'nombre' => 'Stable Diffusion',
                'logo' => 'ias/stable.png',
                'descripcion' => 'Modelo de IA de código abierto para generar imágenes detalladas a partir de descripciones textuales.',
                'estado' => true,
                'categoria_id' => 2, // Generación de Imágenes
                'url' => 'https://stability.ai/stable-diffusion',
                'created_at' => '2022-08-22 00:00:00',
                'updated_at' => '2023-05-18 00:00:00'
            ],
            [
                'nombre' => 'Claude',
                'logo' => 'ias/claude.png',
                'descripcion' => 'Asistente de IA conversacional desarrollado por Anthropic con enfoque en ser útil, inofensivo y honesto.',
                'estado' => true,
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://www.anthropic.com/claude',
                'created_at' => '2023-03-14 00:00:00',
                'updated_at' => '2023-06-30 00:00:00'
            ],
            [
                'nombre' => 'Sora',
                'logo' => 'ias/sora.png',
                'descripcion' => 'IA generativa de OpenAI capaz de crear videos realistas a partir de instrucciones textuales.',
                'estado' => false,
                'categoria_id' => 3, // Edición de Video
                'url' => 'https://openai.com/sora',
                'created_at' => '2024-02-15 00:00:00',
                'updated_at' => '2024-02-15 00:00:00'
            ],
            [
                'nombre' => 'Grammarly',
                'logo' => 'lenguaje/grammarly.png',
                'descripcion' => 'Herramienta de corrección gramatical y de estilo para mejorar la escritura en inglés.',
                'estado' => true,
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://www.grammarly.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Synthesia',
                'logo' => 'ias/synthesia.png',
                'descripcion' => 'Herramienta de IA para crear videos con avatares digitales a partir de texto.',
                'estado' => true,
                'categoria_id' => 3, // Edición de Video
                'url' => 'https://www.synthesia.io',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Jasper AI',
                'logo' => 'ias/jasper.png',
                'descripcion' => 'Herramienta de generación de contenido para marketing, blogs y redacción publicitaria.',
                'estado' => true,
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://www.jasper.ai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Runway ML',
                'logo' => 'ias/runway.png',
                'descripcion' => 'Plataforma de IA para creativos que permite editar videos, generar imágenes y más.',
                'estado' => true,
                'categoria_id' => 3, // Edición de Video
                'url' => 'https://runwayml.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Descript',
                'logo' => 'ias/descript.png',
                'descripcion' => 'Herramienta de edición de audio y video mediante transcripción y síntesis de voz.',
                'estado' => true,
                'categoria_id' => 4, // Generación de Audio y Voz
                'url' => 'https://www.descript.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Hugging Face',
                'logo' => 'ias/huggingface.png',
                'descripcion' => 'Plataforma de modelos de lenguaje natural (NLP) y herramientas de IA de código abierto.',
                'estado' => true,
                'categoria_id' => 1, // Generación de Texto
                'url' => 'https://huggingface.co',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Replika',
                'logo' => 'ias/replika.png',
                'descripcion' => 'Chatbot emocional diseñado para ser un compañero virtual y brindar soporte emocional.',
                'estado' => true,
                'categoria_id' => 12, // Chatbots y Conversacionales
                'url' => 'https://replika.ai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'IBM Watson',
                'logo' => 'ias/watson.png',
                'descripcion' => 'Plataforma de IA para análisis de datos, procesamiento de lenguaje natural y soluciones empresariales.',
                'estado' => true,
                'categoria_id' => 7, // Análisis de Datos
                'url' => 'https://www.ibm.com/watson',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Canva',
                'logo' => 'ias/canva.png',
                'descripcion' => 'Herramienta de diseño gráfico con funciones de IA para crear contenido visual.',
                'estado' => true,
                'categoria_id' => 9, // Diseño Gráfico
                'url' => 'https://www.canva.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Duolingo',
                'logo' => 'ias/duolingo.png',
                'descripcion' => 'Plataforma de aprendizaje de idiomas que utiliza IA para personalizar lecciones.',
                'estado' => true,
                'categoria_id' => 10, // Educación y Aprendizaje
                'url' => 'https://www.duolingo.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Notion AI',
                'logo' => 'ias/notion.png',
                'descripcion' => 'Herramienta de productividad con IA para redacción, organización y gestión de tareas.',
                'estado' => true,
                'categoria_id' => 11, // Productividad
                'url' => 'https://www.notion.so/product/ai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Dialogflow',
                'logo' => 'ias/dialogflow.png',
                'descripcion' => 'Plataforma de Google para crear chatbots y asistentes virtuales conversacionales.',
                'estado' => true,
                'categoria_id' => 12, // Chatbots y Conversacionales
                'url' => 'https://cloud.google.com/dialogflow',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Unity ML-Agents',
                'logo' => 'ias/unity.png',
                'descripcion' => 'Herramienta de IA para crear experiencias de realidad virtual y aumentada en Unity.',
                'estado' => true,
                'categoria_id' => 13, // Realidad Aumentada (AR) y Virtual (VR)
                'url' => 'https://unity.com/products/machine-learning-agents',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'AlphaSense',
                'logo' => 'ias/alpha.png',
                'descripcion' => 'Plataforma de IA para análisis financiero y búsqueda de información en documentos.',
                'estado' => true,
                'categoria_id' => 14, // Finanzas y Negocios
                'url' => 'https://www.alpha-sense.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Atomwise',
                'logo' => 'ias/atomwise.png',
                'descripcion' => 'Herramienta de IA para descubrimiento de fármacos y análisis de compuestos químicos.',
                'estado' => true,
                'categoria_id' => 15, // Salud y Medicina
                'url' => 'https://www.atomwise.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Inworld AI',
                'logo' => 'ias/inworld.png',
                'descripcion' => 'Plataforma de IA para crear personajes virtuales interactivos en videojuegos.',
                'estado' => true,
                'categoria_id' => 16, // Juegos
                'url' => 'https://inworld.ai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Hootsuite',
                'logo' => 'ias/hootsuite.png',
                'descripcion' => 'Herramienta de gestión de redes sociales con funciones de IA para programación y análisis.',
                'estado' => true,
                'categoria_id' => 17, // Redes Sociales
                'url' => 'https://www.hootsuite.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'LawGeex',
                'logo' => 'ias/lawgeex.png',
                'descripcion' => 'Herramienta de IA para revisión y análisis de contratos legales.',
                'estado' => true,
                'categoria_id' => 18, // Legal y Jurídico
                'url' => 'https://www.lawgeex.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Textio',
                'logo' => 'ias/textio.png',
                'descripcion' => 'Herramienta de IA para mejorar la redacción de ofertas de empleo y comunicación empresarial.',
                'estado' => true,
                'categoria_id' => 19, // Recursos Humanos
                'url' => 'https://textio.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'DeepMind AlphaFold',
                'logo' => 'ias/alphafold.png',
                'descripcion' => 'Herramienta de IA para predecir la estructura de proteínas y avanzar en la investigación científica.',
                'estado' => true,
                'categoria_id' => 20, // Ciencia e Investigación
                'url' => 'https://www.deepmind.com/alphafold',
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
