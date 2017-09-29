<?php

use Illuminate\Database\Seeder;
use anuncios\Clase;
class seedClase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
            [
                'nombre'=>'Personas con Capacidades Diferentes',
                'descripcion'=>'Personas con capacidades diferentes, capacidades especiales y otros más en desuso como minusválido, inválido, impedido o deficiente.',
                'imagen'=>'categoria1.jpg',
            ],
            [
                'nombre'=>'Jovenes o Estudiantes',
                'descripcion'=>'Joven se emplea para definir a algo o alguien que presenta pocos años de existencia',
                'imagen'=>'categoria2.jpg',
            ],
            [
                'nombre'=>'Subir Curriculum',
                'descripcion'=>'Podras subir tu curriculum para que los demas lo vea',
                'imagen'=>'categoria3.jpg',
            ],
        );
        Clase::insert($datos);
    }
}
