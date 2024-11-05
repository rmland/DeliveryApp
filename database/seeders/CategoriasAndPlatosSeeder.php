<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Plato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasAndPlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder de la tabla categorias:

        Categoria::create([
            'nombre' => 'Hamburguesa',
            'descripcion' => 'Deliciosas hamburguesas con ingredientes frescos y variadas combinaciones.'
        ]);

        Categoria::create([
            'nombre' => 'Pizza',
            'descripcion' => 'Pizzas artesanales con diferentes tipos de masa y una gran variedad de ingredientes.'
        ]);

        Categoria::create([
            'nombre' => 'Pasta',
            'descripcion' => 'Pastas italianas tradicionales con salsas caseras y opciones vegetarianas.'
        ]);

        Categoria::create([
            'nombre' => 'Sushi',
            'descripcion' => 'Auténtico sushi japonés, con ingredientes frescos y opciones de maki, nigiri y sashimi.'
        ]);
        
        // Seeder para la tabla platos:

        Plato::create([
            'id' => 1,
            'nombre' => 'Hamburguesa Clásica',
            'descripcion' => 'Hamburguesa con carne de res, queso, lechuga y tomate.',
            'precio' => 8.99,
            'id_categoria' => 1,
            'disponible' => true,
            'img_path' => 'imagenes/menu/h-clasica.webp'
        ]);

        Plato::create([
            'id' => 2,
            'nombre' => 'Hamburguesa BBQ',
            'descripcion' => 'Hamburguesa con salsa BBQ, tocino y cebolla caramelizada.',
            'precio' => 10.99,
            'id_categoria' => 1,
            'disponible' => true,
            'img_path' => 'imagenes/menu/h-bbq.webp'
        ]);

        Plato::create([
            'id' => 3,
            'nombre' => 'Hamburguesa Doble',
            'descripcion' => 'Hamburguesa con doble carne y doble queso.',
            'precio' => 12.50,
            'id_categoria' => 1,
            'disponible' => true,
            'img_path' => 'imagenes/menu/h-doble.webp'
        ]);

        Plato::create([
            'id' => 4,
            'nombre' => 'Hamburguesa Vegana',
            'descripcion' => 'Hamburguesa con carne de soya, aguacate y vegetales frescos.',
            'precio' => 9.99,
            'id_categoria' => 1,
            'disponible' => true,
            'img_path' => 'imagenes/menu/h-vegana.webp'
        ]);

        Plato::create([
            'id' => 5,
            'nombre' => 'Hamburguesa Picante',
            'descripcion' => 'Hamburguesa con jalapeños y salsa picante.',
            'precio' => 11.50,
            'id_categoria' => 1,
            'disponible' => true,
            'img_path' => 'imagenes/menu/h-picante.webp'
        ]);

        Plato::create([
            'id' => 6,
            'nombre' => 'Pizza Margarita',
            'descripcion' => 'Pizza con base de salsa de tomate, mozzarella y albahaca fresca.',
            'precio' => 9.99,
            'id_categoria' => 2,
            'disponible' => true,
            'img_path' => 'p-margarita.jpg'
        ]);

        Plato::create([
            'id' => 7,
            'nombre' => 'Pizza Pepperoni',
            'descripcion' => 'Pizza con salsa de tomate, mozzarella y pepperoni.',
            'precio' => 11.99,
            'id_categoria' => 2,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-margarita.webp'
        ]);

        Plato::create([
            'id' => 8,
            'nombre' => 'Pizza Cuatro Quesos',
            'descripcion' => 'Pizza con mezcla de mozzarella, parmesano, gorgonzola y ricotta.',
            'precio' => 13.50,
            'id_categoria' => 2,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-pepperoni.webp'
        ]);

        Plato::create([
            'id' => 9,
            'nombre' => 'Pizza Hawaiana',
            'descripcion' => 'Pizza con jamón, piña y mozzarella.',
            'precio' => 12.00,
            'id_categoria' => 2,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-cuatro-quesos.webp'
        ]);

        Plato::create([
            'id' => 10,
            'nombre' => 'Pizza Vegetariana',
            'descripcion' => 'Pizza con una variedad de vegetales frescos y queso mozzarella.',
            'precio' => 10.99,
            'id_categoria' => 2,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-vegetariana.webp'
        ]);
        Plato::create([
            'id' => 11,
            'nombre' => 'Spaghetti Bolognesa',
            'descripcion' => 'Pasta con salsa de carne y tomate casera.',
            'precio' => 12.99,
            'id_categoria' => 3,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-bolognesa.webp'
        ]);

        Plato::create([
            'id' => 12,
            'nombre' => 'Fettuccine Alfredo',
            'descripcion' => 'Fettuccine con salsa cremosa de queso parmesano.',
            'precio' => 11.50,
            'id_categoria' => 3,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-alfredos.webp'
        ]);

        Plato::create([
            'id' => 13,
            'nombre' => 'Pasta Carbonara',
            'descripcion' => 'Pasta con tocino, huevo y queso parmesano.',
            'precio' => 13.00,
            'id_categoria' => 3,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-carbonara.webp'
        ]);

        Plato::create([
            'id' => 14,
            'nombre' => 'Lasaña de Carne',
            'descripcion' => 'Lasaña de carne con salsa bechamel y queso gratinado.',
            'precio' => 14.99,
            'id_categoria' => 3,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-lasagna.webp'
        ]);

        Plato::create([
            'id' => 15,
            'nombre' => 'Pasta Pesto',
            'descripcion' => 'Pasta con salsa de pesto de albahaca fresca.',
            'precio' => 10.99,
            'id_categoria' => 3,
            'disponible' => true,
            'img_path' => 'imagenes/menu/p-pesto.webp'
        ]);

        Plato::create([
            'id' => 16,
            'nombre' => 'Maki de Salmón',
            'descripcion' => 'Rollo de sushi con salmón fresco y arroz.',
            'precio' => 8.50,
            'id_categoria' => 4,
            'disponible' => true,
            'img_path' => 'imagenes/menu/s-salmon.webp'
        ]);

        Plato::create([
            'id' => 17,
            'nombre' => 'Nigiri de Atún',
            'descripcion' => 'Bolita de arroz cubierta con atún fresco.',
            'precio' => 9.00,
            'id_categoria' => 4,
            'disponible' => true,
            'img_path' => 'imagenes/menu/s-atun.webp'
        ]);

        Plato::create([
            'id' => 18,
            'nombre' => 'California Roll',
            'descripcion' => 'Rollo de sushi con cangrejo, pepino y aguacate.',
            'precio' => 7.99,
            'id_categoria' => 4,
            'disponible' => true,
            'img_path' => 'imagenes/menu/s-california.webp'
        ]);

        Plato::create([
            'id' => 19,
            'nombre' => 'Tempura Roll',
            'descripcion' => 'Rollo de sushi frito relleno de camarón.',
            'precio' => 10.50,
            'id_categoria' => 4,
            'disponible' => true,
            'img_path' => 'imagenes/menu/s-tempura.webp'
        ]);

        Plato::create([
            'id' => 20,
            'nombre' => 'Sashimi de Salmón',
            'descripcion' => 'Finísimas lonjas de salmón fresco.',
            'precio' => 11.50,
            'id_categoria' => 4,
            'disponible' => true,
            'img_path' => 'imagenes/menu/s-sashimi.webp'
        ]);
    }
}
