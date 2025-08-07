<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        // Crear farmacias existentes del sistema actual
        $farmacias = [
            [
                'name' => 'FARMACIA TRANCHET S.R.L.',
                'address' => 'San Martín Nº 202 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACIA VEDIA S.C.C.',
                'address' => 'San Martín Nº 402 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACITY S.A.',
                'address' => 'San Martín Nº 131 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACIA ITATI S.H.',
                'address' => 'San Martín Nº 502 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACIA VEDIA S.C.S',
                'address' => 'San Martín Nº 901 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACIA ITATI II SRL',
                'address' => 'San Martín Nº 1300 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'A.M.E.B.',
                'address' => 'San Martín Nº 100 Bº CENTRO',
                'category' => 'farmacias',
            ],
            [
                'name' => 'FARMACIA CATEDRAL S.C.C.',
                'address' => 'San Martín Nº 66 Bº CENTRO',
                'category' => 'farmacias',
            ],
        ];

        // Centros de salud existentes
        $centrosSalud = [
            [
                'name' => 'CLÍNICA AVENIDA',
                'address' => 'Av. Sarmiento 259',
                'phones' => ['0364 442-1925'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'MAMOTEST - Clínica ginecológica',
                'address' => 'Laprida 472',
                'phones' => ['0364 443-0131'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'INSTITUTO PRIVADO SANTA MARÍA',
                'address' => 'Chacabuco 634',
                'phones' => ['0364 443-9100'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'CLÍNICA CENTRO MEDICO S.R.L',
                'address' => 'Laprida 795',
                'phones' => ['0364 442-9211'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'UME Unidad Médica Educativa',
                'address' => 'Comandante Fernández 755',
                'phones' => ['0364 442-6628'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'SIAPA (Servicio Integral Amigable Para Adolescentes)',
                'address' => 'Calle 5 entre 12 y 14 - Bº Centro',
                'phones' => ['0362 475-8320'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'POLICONSULTORIOS INSTITUTO PRIVADO SANTA MARÍA S.R.L.',
                'address' => 'Chacabuco 556',
                'phones' => ['0364 460-3952'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'SANATORIO MAYO - Salud Mental',
                'address' => 'Belgrano 101',
                'phones' => ['0364 442-1433'],
                'category' => 'centros_salud',
            ],
            [
                'name' => 'HOSPITAL 4 DE JUNIO - Dr. Ramón Carrillo',
                'address' => 'Av. Malvinas Argentinas 1350',
                'phones' => ['0364 443-1861'],
                'category' => 'centros_salud',
            ],
        ];

        // Algunos restaurantes existentes
        $gastronomia = [
            [
                'name'     => 'IL TANO PASTAS',
                'address'  => '9 DE JULIO 650 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'BEL Y ZAMI',
                'address'  => 'AVENIDA 33 ENTRE 26 Y 28',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'ROJO BAR',
                'address'  => 'CALLE 14 ENTRE 11 Y 13 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'CULLEN HARRISON',
                'address'  => 'AV. 2 CASI AV. 1 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'SHADAY',
                'address'  => 'CALLES 12 Y 23 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'BEER GARDEN',
                'address'  => 'CALLE 9 ESQUINA 16',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'AMERICAN DINER',
                'address'  => 'CALLE 12 ENTRE 21 Y 23',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'ROQUE HOUSE RESTOBAR',
                'address'  => 'CALLE 13 ENTRE 16 Y 18 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'ESQUINA DORREGO',
                'address'  => 'JUAN DOMINGO PERON Y DORREGO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PARRILLA LA TABITA',
                'address'  => 'CDTE. FERNANDEZ 604 - ENSANCHE SUR',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'VIDA FELIZ',
                'address'  => 'SAAVEDRA 535',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'CONFITERIA Y COMEDOR GUALOK',
                'address'  => 'CALLE 12 ENTRE 23 Y 25',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PARRILLA EL CHÚCARO',
                'address'  => 'CALLE 9 Y AV. 2 - Bº MONSEÑOR DE CARLO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'CONFITERÍA LA ROTONDA',
                'address'  => 'RUTA 16 Y 95',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'CARRITO BAR LIDIA',
                'address'  => 'RUTA 16 Y 95',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PIZZERIA PALMITA',
                'address'  => 'AV. 33 Y 28 Y CALLE 15 ESQUINA 12 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'GRILL MODELO',
                'address'  => 'AV. 2 Y 17',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PAMPERS KING PIZZERÍA Y SANDWICHERÍA',
                'address'  => 'CALLE 10 ENTRE 9 Y 11 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'SUPER LOMO',
                'address'  => 'CALLE 27 ESQ. 22 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'SARAVA',
                'address'  => 'CALLE 3 ENTRE 12 Y 14 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'AMANALEC',
                'address'  => 'CALLE 14 Y 13 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'MANOLO',
                'address'  => 'ESQUINA 12 Y 3 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PIZZERIA ADAMS',
                'address'  => 'CALLE 14 ESQUINA 19 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'RESTAURANTE COQUI EVENTOS',
                'address'  => 'CALLE 000 ENTRE 23 Y 25',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'DOLCE DELICATESSA',
                'address'  => 'BELGRANO 425',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'EL FERRO RESTAURANTE',
                'address'  => 'AV. 1 Y 6 - ENSANCHE SUR',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'LA ROMA CAFETERÍA',
                'address'  => 'CALLE 14 ENTRE 3 Y 5 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'COMEDOR EL FARO',
                'address'  => 'RUTA 16 Y 95',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'LA RINCONADA',
                'address'  => 'CALLE 116 Y RUTA 16',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'ROTISERÍA LAS TÍAS – COMIDAS PARA LLEVAR',
                'address'  => 'ARBO Y BLANCO 271',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PORTOFINO CAFÉ',
                'address'  => 'CALLE 9 ENTRE 6 Y 8 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'SOLO EMPANADAS – PARA LLEVAR',
                'address'  => 'CALLE 16 ENTRE 15 Y 17 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'GIUSEPE PIZZA E PASTA',
                'address'  => 'CALLE 14 ENTRE 3 Y 5 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'BAR BLES',
                'address'  => 'CALLE 14 ENTRE 15 Y 17 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PARRILLA LOBITA',
                'address'  => 'RUTA 16 Y 95',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'LA TABERNA PIZZERÍA',
                'address'  => 'CALLE 12 ENTRE 21 Y 23 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'MC PIZZA LIBRE',
                'address'  => 'CALLE 12 ENTRE 23 Y 25 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'GRILL EL ZURDO',
                'address'  => 'CALLE 9 Y 16 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'KUVA BAR',
                'address'  => 'CALLE 14 ESQUINA 19 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'PULPERÍA “LA SALAMANCA”',
                'address'  => 'CALLE 7 ENTRE 8 Y 10 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'OLD FASHIONED BURGER LAB',
                'address'  => 'CALLE 16 ESQUINA 31 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'HIPÓLITO PARRILLA RESTO',
                'address'  => 'AV. 2 Y AV. 1 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
            [
                'name'     => 'LA OCHAVA BODEGÓN',
                'address'  => 'AV. 2 ESQUINA 5 - Bº CENTRO',
                'category' => 'gastronomia',
            ],
        ];

        // Crear todos los registros
        foreach ($farmacias as $farmacia) {
            Shop::create(array_merge($farmacia, [
                'is_active' => true,
                'sort_order' => 0,
            ]));
        }

        foreach ($centrosSalud as $centro) {
            Shop::create(array_merge($centro, [
                'is_active' => true,
                'sort_order' => 0,
            ]));
        }

        foreach ($gastronomia as $restaurant) {
            Shop::create(array_merge($restaurant, [
                'is_active' => true,
                'sort_order' => 0,
            ]));
        }
    }
}
