<?php

use Illuminate\Database\Seeder;
use anuncios\User;

class seederUser extends Seeder
{
    public function run()
    {
        $datos=array(
            [
                'nombre'=>'Gabriel',
                'apellido'=>'Pinto',
                'email'=>'gabriel@gmail.com',
                'password'=>\Hash::make('12345678'),
                'avatar'=>'imagen.jpg',
            ],
            [
                'nombre'=>'Joel',
                'apellido'=>'Pinto',
                'email'=>'joel@gmail.com',
                'password'=>\Hash::make('12345678'),
                'avatar'=>'imagen.jpg',
            ]
        );
        User::insert($datos);
    }
}
