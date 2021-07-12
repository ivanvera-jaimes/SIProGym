<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina1.jpg",
            "nombre" => "Whey Protein",
            "descripcion"=>"Es un suplemento con amplia evidencia científica y que se encuentra en el grupo A de la clasificación del Instituto Australiano 
                            del Deporte (AIS), una entidad referente en cuanto a nutrición deportiva.",
            "valor"=>88000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina2.jpg",
            "nombre" => "Isopure",
            "descripcion"=>"Isopure proteina cero carbohidratos vainilla - 3 Lb. Suplemento a base de albúmina de huevo en polvo, 
                            fuente de proteínas de alto valor biológico con el menor contenido de fósforo, potasio y sodio.",
            "valor"=>100000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina3.jpg",
            "nombre" => "Nitro Tech",
            "descripcion"=>"Nitrotech 100% Whey Gold de Muscletech es una mezcla de proteína de suero aislada y concentrada de alta calidad y pureza, con péptidos
                           de suero lácteo añadidos. Esta proteína tiene una rápida absorción y digestibilidad, ideal para recuperarse después de un entrenamiento.",
            "valor"=>160000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina4.jpg",
            "nombre" => "Mass Tech",
            "descripcion"=>"Es un producto de avanzada para ganar masa muscular diseñado para cualquier persona a quien le cueste trabajo aumentar el tamaño, 
                            que esté en fase de voluminización o deseen adquirir incluso más fuerza.",
            "valor"=>150000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina5.jpg",
            "nombre" => "Mega Whey",
            "descripcion"=>"MEGA WHEY PROTEIN es proteína de suero altamente bioasimilable adicionada con: Picolinato de cromo, y un excelente balance de vitaminas; 
                            de esta manera los deportistas obtienen mejores resultados en comparación con otras fórmulas comunes de proteína de suero.",
            "valor"=>170000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina6.jpg",
            "nombre" => "Cell Tech",
            "descripcion"=>"Cell Tech Performance Series de Muscletech es un producto alimenticio en polvo con un 79% de hidratos de carbono de lenta y rápida 
                            absorción, creatina y aminoácidos esenciales.",
            "valor"=>150000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina7.jpg",
            "nombre" => "Creatine Power",
            "descripcion"=>"Por esta compra obtienes la Proteína Megaplex Creatine Power por 10Lb con nueva fórmula que incluye HMB.
                           Adicional recibes la bolsa por 2Lb de la versión clásica (hasta agotar existencias).",
            "valor"=>167000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina8.jpg",
            "nombre" => "Super Mega Gainer",
            "descripcion"=>"Super mega gainer de GMN es un excelente complemento alimenticio capaz de mejorar en forma notable tu disponibilidad energética 
                            en el entrenamiento y de aumentar tu masa muscular, peso y fuerza rápidamente",
            "valor"=>50000
        ]);
        Producto::create([
            "foto"=>"Home/ImagenesPro-Gym/proteina9.jpg",
            "nombre" => "Hydroxycut Elite",
            "descripcion"=>"Hydroxycut Hardcore Elite es un super termogénico 4 en 1 con una fórmula que ofrece una experiencia sensorial increíble y que aporta cuatro ventajas distintas:
                             Super-termogénesis, Energía extrema, Mayor concentración, Pérdida de peso de gran alcance.",
            "valor"=>98000
        ]);
    }
}