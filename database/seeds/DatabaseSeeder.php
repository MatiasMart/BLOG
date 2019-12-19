<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname'=> 'Admin',
            'fecha' => '2000-01-01',
            'img' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234')
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Otros',
            'descripcion' => 'Aqui podrias encontrar todos mis Post sobre temas relacionados a mis viejas que no son exactamente guias sino ayudas y consejos de todo tipo '
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Europa',
            'descripcion' => 'Aqui podras ver todos los posteos relacionados a Europa y toda su cultura, encontraras posteos sobre mis experiencias de viaje como culinarias'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'America',
            'descripcion' => 'Aqui podras ver todos los posteos relacionados a America y toda su cultura, encontraras posteos sobre mis experiencias de viaje como culinarias'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Africa',
            'descripcion' => 'Aqui podras ver todos los posteos relacionados a Africa y toda su cultura, encontraras posteos sobre mis experiencias de viaje como culinarias'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Asia',
            'descripcion' => 'Aqui podras ver todos los posteos relacionados a Asia y toda su cultura, encontraras posteos sobre mis experiencias de viaje como culinarias'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Oceania',
            'descripcion' => 'Aqui podras ver todos los posteos relacionados a Oceania y toda su cultura, encontraras posteos sobre mis experiencias de viaje como culinarias'
        ]);

        DB::table('post')->insert([
            'titulo' => 'HONG KONG Guia de viaje',
            'img' => 'U7Jtl90dmc0lePvpYY4GphZ2DVXd9JmceTn8U8wI.jpeg',
            'contendio' => 'La ciudad de Hong Kong (cuyo nombre oficial es Región Administrativa Especial de Hong Kong de la República Popular China), se encuentra en la costa sur de China y está formada por una parte peninsular y varias islas. Este destino, que en principio no parece encajar en un viaje de mochilero, no estaba entre nuestros planes hasta que nos vimos obligados a salir de Filipinas por cuestiones de visado y apareció como una opción bastante económica para volar desde Manila. Esta ciudad es usada también como escala en algunos vuelos largos, así que puede que, aunque no tuvieras pensado visitarla, aproveches que pasas por allí en dirección a algún otro país y la visites.

            Hong Kong es cara, sobretodo comparada con los precios que se manejan en el sudeste asiático, sin embargo se puede descubrir y disfrutar sin que ello suponga un enorme esfuerzo económico intentando ahorrar en cosas como el alojamiento o la comida. Nosotros lo hicimos en 4 días y a continuación te contamos lo que vimos y como lo hicimos.
            
            La urbe es enorme y pese a la extensión del post esto es un superhipermegaresumen, pero viene a ser lo que a mi me hubiese gustado tener en las manos cuando empecé a organizar la escapada y no sabía ni por dónde empezar. A partir de esta info puedes empezar a desgranar. ¡Allá vamos!
            
            Teniendo en cuenta el tiempo del que disponíamos para la ciudad y viendo cómo estaban distribuidas la mayoría de las atracciones turísticas nosotros dividimos la visita en tres partes: 1) Kowloon, que es la parte peninsular, 2) Hong Kong Island y 3) Lantau, otra isla. El día extra lo dedicamos para volver a pasear por en centro de Hong Kong Island y subir al pico Victoria, pues la primera vez que fuimos era sábado y la cola para el tram era mucho más larga que nuestra paciencia. Por lo tanto perdimos un día que podríamos haber aprovechado para ir a Macao, de la que desde ya adelantamos que no tenemos nada de información.
            
            Edificios colosales, templos tradicionales, tiendas exclusivas, mercadillos en la calle, comida china y de otras muchas nacionalidades. A continuación te dejamos una lista de los lugares más conocidos por los que pasamos y sitios donde comimos, pero la verdad es que Hong Kong es una ciudad fácil de recorrer e invita a coger un mapa y empezar a caminar. Mientras buscas una cosa aparecerán ante ti cincuenta más ¡Disfruta!',
            'categoria' => 5
        ]);
        
        DB::table('post')->insert([
            'titulo' => 'SAFARI EN KENIA',
            'img' => 'QmFAPhuS6PeSiaoz2gqo1tYlhDbL4roLBfp4UOy0.jpeg',
            'contendio' => 'Organizar un safari en Kenia: todo lo que necesitas saber
            ¿Cómo se organiza un safari? ¿Cuánto dinero necesito? ¿Es seguro? ¿Cuáles son las mejores opciones? ¿Por dónde empiezo? Son muchas preguntas así que vamos a ir por pasos.
            
            ¿Con agencia o por libre? ¿Contratarlo desde casa o una vez allí?
            La eterna pregunta a la hora de organizar un safari es, ¿es mejor hacerlo por tu cuenta o con una agencia? Y en caso de querer hacerlo organizado, ¿es mejor prepararlo todo desde casa o buscar una empresa una vez en el país? Piensa estas cosas a la hora de decidir:
            
            La primera cosa que tienes que tener en cuenta es el tiempo, ¿tienes suficientes días como para perder por lo menos un par de ellos organizándolo todo una vez en el destino? (ya sea para hacerlo por tu cuenta o para buscar una agencia en Nairobi) De no ser así, es mejor que lleves los deberes hechos antes de subir al avión. Y si lo haces por tu cuenta, ¿tienes margen de tiempo por si pierdes alguno desplazándote de un parque a otro? Recuerda que el transporte público puede no ser tan rápido, puntual o efectivo como lo puede ser en tu país de origen.
            La segunda es que, aunque vayas por tu cuenta, dentro de los parques va a ser mucho más fácil encontrar animales con alguien que conozca la zona.
            En nuestro caso, tras mucho pensar al respecto e investigar, llegamos a la conclusión de que era mejor llevarlo todo organizado desde casa y contratar una agencia desde aquí. Solo disponíamos de dos semanas en Kenia y queríamos un safari con garantías, así que esta decisión fue la determinante para ahorrarnos perder el tiempo que necesitábamos en Nairobi buscando agencias, el que perderíamos viajando entre parques por nuestra cuenta, y la certeza de ir con un guía competente. Por mucho que nos pesara perder libertad.',
            'categoria' => 4
        ]);


    }
}
