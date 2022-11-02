<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
            
                
                [       "nombre"=>"Cristopher Antoni Alvarado Armas",
                        "correo"=>"alvaradoarmas3@gmail.com",
                        "usuario"=>"cristoperant",
                        "password"=>"admin",
                        "foto"=>"https://drive.google.com/file/d/1rx6eP2HVYzt24HJjCdcuS_3q1XNOS3gP/view?usp=share_link",
                        "estado"=>"true"
                ],
                [       "nombre"=>"Alejandra Rosa Reyes Maldonado",
                        "correo"=>"reyesmaldonado@gmail.com",
                        "usuario"=>"alejandra123",
                        "password"=>"admin",
                        "foto"=>"https://drive.google.com/file/d/1nJU2KkOCCxLqEJTb3r_n_yeLV9wZkxoK/view?usp=share_link",
                        "estado"=>"true"
                ]
            

        ]);
    }
}
