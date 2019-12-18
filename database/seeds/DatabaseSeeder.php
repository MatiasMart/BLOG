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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname'=> 'Admin',
            'fecha' => '2000-01-01',
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



    }
}
