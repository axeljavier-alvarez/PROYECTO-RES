<?php

namespace Database\Seeders\ConejoDeFuego;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConejoDeFuego\Categoria;
use App\Models\ConejoDeFuego\Producto;

class ComidaMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. CREACIÓN DE CATEGORÍAS
        $catDesayunosCena = Categoria::create(['nombre' => 'Desayunos y Cena']);
        $catAlmuerzos = Categoria::create(['nombre' => 'Almuerzos (Asados y Caldos)']);
        $catMariscos = Categoria::create(['nombre' => 'Mariscos y Ceviches']);
        $catPastas = Categoria::create(['nombre' => 'Pastas']);
        $catHamburguesas = Categoria::create(['nombre' => 'Hamburguesas']);
        $catAntojitos = Categoria::create(['nombre' => 'Antojitos y Postres']);

        // 2. POBLAR PRODUCTOS POR CATEGORÍA

        // --- DESAYUNOS Y CENA ---
        $desayunos = [
            [
                'nombre' => 'Tradicional',
                'descripcion' => 'Huevos al gusto acompañados de frijol, crema, una tortilla con queso mozzarella, salsa de tomate y plátanos fritos. Incluye avena, café y tortillas.',
                'precio' => 30.00,
            ],
            [
                'nombre' => "Chu' Taxtyox",
                'descripcion' => 'Huevos al gusto acompañado de 2 chorizos o 2 longanizas ahumado (a elección), frijol, crema, una tortilla con queso mozzarella, salsa de tomate y plátanos fritos. Incluye avena, café y tortillas.',
                'precio' => 45.00,
            ],
            [
                'nombre' => 'Conejo de Fuego',
                'descripcion' => 'Huevos revueltos con tomate, cebolla, chile jalapeño y chile pimiento, acompañado de lomito, frijol, crema, una tortilla con queso mozzarella, salsa de tomate y plátanos fritos. Incluye avena, café y tortillas.',
                'precio' => 50.00,
            ],
            [
                'nombre' => 'Omelette',
                'descripcion' => 'Relleno de jamón, queso, champiñones, tomate, pimientos y cebolla, acompañado de frijol, crema, salsa de tomate y plátanos fritos. Incluye avena, café y tortillas.',
                'precio' => 40.00,
            ],
            [
                'nombre' => 'Cereal',
                'descripcion' => 'Cereal, leche y banano. Incluye avena, café y tortillas.',
                'precio' => 25.00,
            ],
        ];
        foreach ($desayunos as $item) {
            $catDesayunosCena->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }

        // --- ALMUERZOS ---
        $almuerzos = [
            ['nombre' => 'Asado de Lomito', 'precio' => 45.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Asado de Pollo', 'precio' => 45.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Asado de Riñón', 'precio' => 45.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Asado de Hígado', 'precio' => 45.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Asado de Adobado', 'precio' => 45.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Asado de Lengua', 'precio' => 50.00, 'descripcion' => 'Incluye fresco natural, arroz, frijoles, ensalada verde, aderezos, chirmol y picante.'],
            ['nombre' => 'Mojarras Fritas o Empanizadas', 'precio' => 75.00, 'descripcion' => 'Plato de mojarra preparada al gusto.'],
            ['nombre' => 'Caldo de Res (Miércoles)', 'precio' => 45.00, 'descripcion' => 'Caldo tradicional disponible los días miércoles.'],
            ['nombre' => 'Caldo de Pata (Domingos)', 'precio' => 45.00, 'descripcion' => 'Caldo tradicional disponible los días domingos.'],
        ];
        foreach ($almuerzos as $item) {
            $catAlmuerzos->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }

        // --- MARISCOS Y CEVICHES ---
        $mariscos = [
            ['nombre' => 'Camarones Empanizados', 'precio' => 75.00, 'descripcion' => 'Porción de camarones empanizados crujientes.'],
            ['nombre' => 'Camarones al Ajillo / Pan Ajo o Simple', 'precio' => 90.00, 'descripcion' => 'Camarones al ajillo acompañados de pan con ajo o simple.'],
            ['nombre' => 'Camarones a la Diabla', 'precio' => 90.00, 'descripcion' => 'Camarones en salsa picante a la diabla.'],
            ['nombre' => 'Ceviches de Camarón / Cangrejo', 'precio' => 60.00, 'descripcion' => 'Ceviche fresco a elección de camarón o cangrejo.'],
            ['nombre' => 'Aguachile', 'precio' => 60.00, 'descripcion' => 'Platillo de camarones curtidos en jugo de limón con chile y verduras frescas.'],
        ];
        foreach ($mariscos as $item) {
            $catMariscos->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }

        // --- PASTAS ---
        $pastas = [
            ['nombre' => 'Lasagna a la Bolañesa Individual', 'precio' => 50.00, 'descripcion' => 'Acompañado de pan con ajo o simple.'],
            ['nombre' => 'Espagueti a la Bolañesa', 'precio' => 35.00, 'descripcion' => 'Acompañado de pan con ajo o simple.'],
        ];
        foreach ($pastas as $item) {
            $catPastas->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }

        // --- HAMBURGUESAS ---
        $hamburguesas = [
            ['nombre' => 'Hamburguesa Clásica', 'precio' => 25.00, 'descripcion' => 'Carne, vegetales y aderezos. Incluye papas fritas o papalina.'],
            ['nombre' => 'Queso Hamburguesa', 'precio' => 35.00, 'descripcion' => 'Carne, queso mozzarella, queso craft, vegetales y aderezos. Incluye papas fritas o papalina.'],
            ['nombre' => 'Torito', 'precio' => 35.00, 'descripcion' => 'Carne, huevo, queso craft, vegetales y aderezos. Incluye papas fritas o papalina.'],
            ['nombre' => 'Súper Torito', 'precio' => 42.00, 'descripcion' => 'Doble carne, huevo, queso craft, vegetales y aderezos. Incluye papas fritas o papalina.'],
            ['nombre' => '1/4 Libra', 'precio' => 45.00, 'descripcion' => 'Carne, huevo, queso craft, queso mozzarella, vegetales y aderezos. Incluye papas fritas o papalina.'],
            ['nombre' => 'Hamburguesas Hawaianas', 'precio' => 45.00, 'descripcion' => 'Carne, huevo, queso craft, queso mozzarella, piña, vegetales y aderezos. Incluye papas fritas o papalina.'],
        ];
        foreach ($hamburguesas as $item) {
            $catHamburguesas->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }

        // --- ANTOJITOS Y POSTRES ---
        $antojitos = [
            ['nombre' => 'Papas Fritas Simples', 'precio' => 18.00, 'descripcion' => 'Porción de papas fritas.'],
            ['nombre' => 'Papas Fritas con Carne', 'precio' => 25.00, 'descripcion' => 'Papas fritas acompañadas de carne y aderezos.'],
            ['nombre' => 'Nachos con Carne', 'precio' => 30.00, 'descripcion' => 'Totopos con queso, carne y extras.'],
            ['nombre' => 'Burritos', 'precio' => 25.00, 'descripcion' => 'Burrito relleno al estilo Conejo de Fuego.'],
            ['nombre' => 'Quesadillas', 'precio' => 35.00, 'descripcion' => 'Quesadillas con queso derretido.'],
            ['nombre' => 'Poporopos', 'precio' => 10.00, 'descripcion' => 'Porción de poporopos de la casa.'],
            ['nombre' => 'Plátanos Fritos', 'precio' => 20.00, 'descripcion' => 'Porción de plátanos maduros fritos.'],
            ['nombre' => 'Porción de Tortillas con Queso Mozzarella (6 tortillas)', 'precio' => 30.00, 'descripcion' => 'Seis tortillas calientes con queso mozzarella derretido.'],
            ['nombre' => 'Copa de Helado', 'precio' => 20.00, 'descripcion' => 'Helado servido en copa.'],
            ['nombre' => 'Crepa Nutella', 'precio' => 25.00, 'descripcion' => 'Crepa dulce rellena de Nutella.'],
            ['nombre' => 'Crepa de Nutella y Banano', 'precio' => 28.00, 'descripcion' => 'Crepa dulce rellena de Nutella y rodajas de banano.'],
            ['nombre' => 'Crepa de Nutella y Fresa', 'precio' => 30.00, 'descripcion' => 'Crepa dulce rellena de Nutella y fresas frescas.'],
            ['nombre' => 'Crepa Mixta', 'precio' => 35.00, 'descripcion' => 'Crepa dulce con combinación de frutas y salsas.'],
            ['nombre' => 'Crepa de Melocotón', 'precio' => 38.00, 'descripcion' => 'Crepa dulce con trozos de melocotón.'],
        ];
        foreach ($antojitos as $item) {
            $catAntojitos->productos()->create(array_merge($item, ['area' => 'Cocina', 'activo' => true]));
        }
    }
}
