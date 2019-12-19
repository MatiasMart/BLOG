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
            'contenido' => 'La ciudad de Hong Kong (cuyo nombre oficial es Región Administrativa Especial de Hong Kong de la República Popular China), se encuentra en la costa sur de China y está formada por una parte peninsular y varias islas. Este destino, que en principio no parece encajar en un viaje de mochilero, no estaba entre nuestros planes hasta que nos vimos obligados a salir de Filipinas por cuestiones de visado y apareció como una opción bastante económica para volar desde Manila. Esta ciudad es usada también como escala en algunos vuelos largos, así que puede que, aunque no tuvieras pensado visitarla, aproveches que pasas por allí en dirección a algún otro país y la visites.
            Hong Kong es cara, sobretodo comparada con los precios que se manejan en el sudeste asiático, sin embargo se puede descubrir y disfrutar sin que ello suponga un enorme esfuerzo económico intentando ahorrar en cosas como el alojamiento o la comida. Nosotros lo hicimos en 4 días y a continuación te contamos lo que vimos y como lo hicimos.
            La urbe es enorme y pese a la extensión del post esto es un superhipermegaresumen, pero viene a ser lo que a mi me hubiese gustado tener en las manos cuando empecé a organizar la escapada y no sabía ni por dónde empezar. A partir de esta info puedes empezar a desgranar. ¡Allá vamos!
            Teniendo en cuenta el tiempo del que disponíamos para la ciudad y viendo cómo estaban distribuidas la mayoría de las atracciones turísticas nosotros dividimos la visita en tres partes: 1) Kowloon, que es la parte peninsular, 2) Hong Kong Island y 3) Lantau, otra isla. El día extra lo dedicamos para volver a pasear por en centro de Hong Kong Island y subir al pico Victoria, pues la primera vez que fuimos era sábado y la cola para el tram era mucho más larga que nuestra paciencia. Por lo tanto perdimos un día que podríamos haber aprovechado para ir a Macao, de la que desde ya adelantamos que no tenemos nada de información.
            Edificios colosales, templos tradicionales, tiendas exclusivas, mercadillos en la calle, comida china y de otras muchas nacionalidades. A continuación te dejamos una lista de los lugares más conocidos por los que pasamos y sitios donde comimos, pero la verdad es que Hong Kong es una ciudad fácil de recorrer e invita a coger un mapa y empezar a caminar. Mientras buscas una cosa aparecerán ante ti cincuenta más ¡Disfruta!',
            'categoria' => 5
        ]);
        
        DB::table('post')->insert([
            'titulo' => 'SAFARI EN KENIA',
            'img' => 'QmFAPhuS6PeSiaoz2gqo1tYlhDbL4roLBfp4UOy0.jpeg',
            'contenido' => 'Organizar un safari en Kenia: todo lo que necesitas saber
            ¿Cómo se organiza un safari? ¿Cuánto dinero necesito? ¿Es seguro? ¿Cuáles son las mejores opciones? ¿Por dónde empiezo? Son muchas preguntas así que vamos a ir por pasos.
            ¿Con agencia o por libre? ¿Contratarlo desde casa o una vez allí?
            La eterna pregunta a la hora de organizar un safari es, ¿es mejor hacerlo por tu cuenta o con una agencia? Y en caso de querer hacerlo organizado, ¿es mejor prepararlo todo desde casa o buscar una empresa una vez en el país? Piensa estas cosas a la hora de decidir:  
            La primera cosa que tienes que tener en cuenta es el tiempo, ¿tienes suficientes días como para perder por lo menos un par de ellos organizándolo todo una vez en el destino? (ya sea para hacerlo por tu cuenta o para buscar una agencia en Nairobi) De no ser así, es mejor que lleves los deberes hechos antes de subir al avión. Y si lo haces por tu cuenta, ¿tienes margen de tiempo por si pierdes alguno desplazándote de un parque a otro? Recuerda que el transporte público puede no ser tan rápido, puntual o efectivo como lo puede ser en tu país de origen.
            La segunda es que, aunque vayas por tu cuenta, dentro de los parques va a ser mucho más fácil encontrar animales con alguien que conozca la zona.
            En nuestro caso, tras mucho pensar al respecto e investigar, llegamos a la conclusión de que era mejor llevarlo todo organizado desde casa y contratar una agencia desde aquí. Solo disponíamos de dos semanas en Kenia y queríamos un safari con garantías, así que esta decisión fue la determinante para ahorrarnos perder el tiempo que necesitábamos en Nairobi buscando agencias, el que perderíamos viajando entre parques por nuestra cuenta, y la certeza de ir con un guía competente. Por mucho que nos pesara perder libertad.',
            'categoria' => 4
        ]);
        
        DB::table('post')->insert([
            'titulo' => 'BREMEN, Marktplatz la plaza del mercado y sus edificios',
            'img' => 'xtzXrsLn6i6q5dfADuSrzWMuwkhqZJbDo8Bu3N4d.jpeg',
            'contenido' => 'Con más de 1200 años de historia la ciudad de Bremen, situada al noroeste de Alemania, presume de patrimonio y de su bien conservado centro histórico, cuyas estrechas y adoquinadas calles transportan al viajero siglos atrás en el tiempo.
            El río Weser, que la atraviesa de sudeste a noroeste para desembocar en el mar del norte, es protagonista de su historia, siempre ligada al comercio gracias a su puerto.
            Bremen es una ciudad muy tranquila en la que, pese a la incesante actividad y el tintineo puntual de las campanas del carillón, la calma es la protagonista. Adáptate al ritmo de la ciudad y dedícale los dos o tres días que se merece.
            El centro neurálgico de Bremen es su plaza del mercado o Marktplatz con varios edificios históricos, Patrimonios de la Humanidad o la famosa estatua de los músicos Bremer Stadtmusikanten. Desde el primer piso de la tienda de chocolate Hachez se pueden divisar varios de los lugares que nombramos a continuación.
            Las estatuas de Roland se levantaron durante la Edad Media en algunas ciudades para representar sus privilegios, la libertad y sus derechos. La de Bremen, hoy Patrimonio de la Humanidad, fue erigida el año 1404 y la encontrarás enfrente del ayuntamiento, mirando hacia la catedral de San Pedro. Sujeta una espada en su mano derecha y un escudo en la otra y con sus casi 10 metros de altura es, sin duda alguna, el principal protagonista de la Plaza del mercado.
            Bremer Rathaus
            El edificio del ayuntamiento, Bremer Rathaus, fue también declarado Patrimonio de la Humanidad en el año 2004. No pasa desapercibida su fachada de estilo gótico, a la que no le falta ni un detalle, justo detrás de la estatua de Roland. El edificio de dos pisos se puede visitar por dentro y en su planta más alta hay unas curiosas maquetas de barcos colgando del techo.',
            'categoria' => 2
        ]);
        
        DB::table('post')->insert([
            'titulo' => 'Precios y gastos para un viaje a PERU',
            'img' => 'ncdR4WSnZEt7apaVDRzRcStSfne8YVqHVjazEoW5.jpeg',
            'contenido' => '¿Cuanto dinero vas a necesitar para viajar a Perú? Depende del tipo de viaje que hagas, pero ya te adelantamos que, aunque no son los precios a los que nos tiene acostumbrados Asia, se puede encontrar alojamiento a un precio asequible y comer bastante bien sin gastar demasiado.
            Visado: Lo primero que debes saber es que si eres ciudadano español y vas a estar menos de 90 días no vas a necesitar visado de Perú para entrar en el país. Así que si lo que estás organizando es una escapada no tienes que preocuparte de nada más, tan solo de tener el pasaporte vigente, que no caduque antes de 6 meses y tener suficientes páginas en blanco para que puedan estampar el sello los agentes de inmigración del aeropuerto. Un gasto menos…   
            Alojamiento: Perú dispone de alojamiento apto para mochileros (hay camas en dormitorios por 10 € y habitaciones dobles por 15 €), y pagando un poquito más el confort se multiplica exponencialmente; en definitiva, que hay bastante variedad.
            Comida: El dinero que vas a gastar en comida lo vas a decidir tú; puedes reducir el gasto comiendo en locales o despilfarrar todo lo que quieras en restaurantes. Nosotras gastábamos unos 50-70 soles por persona y comida, incluyendo bebida (que podían ser varias cervezas) y siendo bastante generosas con lo que pedíamos… Vamos, que se puede comer por menos.            
            Dinero: En cuanto a cambiar dinero para llevar en efectivo, en Lima (en Miraflores sobretodo) hay miles de casas de cambio, así que podrás hacerlo allí directamente sin necesidad de tener que ir a un banco en España. Evita cambiar en el aeropuerto pues te va a salir mucho peor, si necesitas soles para el transporte cambia allí solo la cantidad justa para llegar al hotel.          
            Seguro de viaje: ¿Tienes dudas acerca de qué seguro de viajes contratar? Como siempre decimos, hay muchas compañías y muchos tipos del pólizas, pero nosotros siempre viajamos con IATI seguros. En temas de salud no nos la jugamos y con ellos no hemos tenido ningún problema hasta el momento. Obtén un 5% de descuento en el tuyo por ser lector de conmochila.',
            'categoria' => 3
        ]);

        DB::table('post')->insert([
            'titulo' => 'Viaje a NUEVA ZELANDA en 36 días',
            'img' => 'gqQQaANTDqigEeZk6XNpVI2ECLmjsnmIweE7B0Ns.jpeg',
            'contenido' => 'Este viaje a Nueva Zelanda en 36 días nos llevará a conocer el País de la Nube Blanca y adentrarnos en uno de los destinos más increíbles y soñados por los viajeros.
            Relativamente pequeño, Nueva Zelanda cuenta con una población de poco más de cuatro millones de habitantes, algo que también lo hace un país poco poblado, en el que su mayor atractivo está en la diversidad de paisajes que posee, que convierten cualquier viaje a Nueva Zelanda, en un momento único e inolvidable.
            Además de esta increíble variedad de paisajes, entre los que destacan increíbles lagos, bosques, montañas, playas infinitas y fiordos épicos, en Nueva Zelanda destaca la facilidad para viajar, sea cuál sea tu condición.
            Extremadamente preparada para recorrerla sobre ruedas, no podemos olvidar que es uno de los mejores viajes en autocaravana del mundo, Nueva Zelanda es conocida también por ser un país tranquilo, en el que todo funciona correctamente y en el que la seguridad es la gran protagonista.
            Si estás interesado en hacer este tipo de viaje, te recomendamos mirar la página Motorhome Republic en la que podrás ver todas las opciones disponibles, los precios y hacer la reserva directamente.
            Antes de empezar a planificar el viaje a Nueva Zelanda es importante conocer algunos datos muy básicos, como que este está formado por dos islas principales; la Isla Norte y la Isla Sur, pobladas en sus inicios por maoríes para después, en el año 1840 pasar a ser colonia británica hasta el año 1907, en el que Nueva Zelanda volvió a ser independiente.
            
            Aunque podríamos decir que cualquier época es perfecta para un viaje a Nueva Zelanda, es necesario saber que debido a su ubicación geográfica, las estaciones son invertidas a las de España. Es decir, los meses más calurosos en Nueva Zelanda son enero y febrero, mientras que los más fríos se sitúan entre los meses de junio y julio.
            A parte de este aspecto, también conviene determinar que tipo de actividades quieras realizar en el destino, ya que según estas, habrá una época más adecuada que otra para realizar el viaje a Nueva Zelanda.',
            'categoria' => 6
        ]);
        
        DB::table('post')->insert([
            'titulo' => ' 10 Secretos para conseguir vuelos baratos',
            'img' => 'UiRkQ0FtpTa2loi60BztfTiOT3DXrsKob0wFu75v.jpeg',
            'contenido' => 'Compra tus billetes por internet
            A mi no se me ocurre otra forma de hacerlo, pero aún hay gente que compra los billetes en una agencia o en oficinas de los aerolíneas, por increíble que parezca.
            Si tú eres de las personas que compran sus billetes aéreos por internet en lugar de acudir a las agencias, puedes aprovechar las herramientas que te ofrecen los diferentes sitios web   preparados para comparar precios de los billetes aéreos de cualquier destino que se escoja.
            Actualmente existe una gran cantidad de sitios web que se dedican a la realización de la comparación de los precios de los billetes de las diferentes aerolíneas, los cuales te darán una idea general de precios y fechas disponibles para vuelos al destino de tu elección.
            Uses la web que uses, no dejes de comparar precios. Esa es tu mejor herramienta siempre.
            Para no inclinar la balanza hacia ninguno de ellos te diré que casi todas ofrecen lo mismo. Es casi lo mismo si visitas Kayak, Opodo o la más famosa de todas, Skyscanner. Estas webs ofrecen una herramienta muy útil, ya que puedes filtrar tus búsquedas y resultados según tu conveniencia, puedes activar también alertas de tarifas para cuando bajan los precios en una ruta en particular, realizar predicción de vuelos para obtener información sobre una ruta, etc. Algunas de las páginas  que puedes utilizar para esto son por ejemplo: skyscanner, momondo, kayak, farecompare, entre muchísimas otras.',
            'categoria' => 1
        ]);

    }
}
