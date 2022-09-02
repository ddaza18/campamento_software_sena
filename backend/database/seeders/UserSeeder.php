<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use File;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo user.json
        $json=File::get("database/_data/users.json");
        //2. convertir el contenido json a un arreglo php
        $arreglo=json_decode($json);
        var_dump($arreglo);
        //3. recorrer el arreglo en php
        foreach($arreglo as $usuario){
        //4. por cada uno de los elementos del arreglo crear un user
        $u=new User();
        $u->name =$usuario->name;
        $u->email =$usuario->email;
        $u->password=Hash::make($usuario->password);
        $u->save();
        }
        
         
    }
}
