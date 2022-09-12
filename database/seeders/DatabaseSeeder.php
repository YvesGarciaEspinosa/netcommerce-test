<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Tarea;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Yves Garcia';
        $user->email = 'admin@netcommerce.com';
        $user->password = bcrypt('Pass123.');
        $user->save();

        $user = new User();
        $user->name = 'Alberto Gómez';
        $user->email = 'admin1@netcommerce.com';
        $user->password = bcrypt('Pass123.');
        $user->save();

        $user = new User();
        $user->name = 'Ezequiel Segura';
        $user->email = 'admin2@netcommerce.com';
        $user->password = bcrypt('Pass123.');
        $user->save();

        $user = new User();
        $user->name = 'Adrian Araya';
        $user->email = 'admin3@netcommerce.com';
        $user->password = bcrypt('Pass123.');
        $user->save();

        $user = new User();
        $user->name = 'Rafa Meza';
        $user->email = 'admin4@netcommerce.com';
        $user->password = bcrypt('Pass123.');
        $user->save();

        $empresa = new Empresa();
        $empresa->nombre = 'Disney';
        $empresa->save();

        $empresa = new Empresa();
        $empresa->nombre = 'Sony';
        $empresa->save();

        $empresa = new Empresa();
        $empresa->nombre = 'Microsoft';
        $empresa->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '1';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '3';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '3';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '3';
        $tarea->id_usuario = '5';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '3';
        $tarea->id_usuario = '5';
        $tarea->estatus = 'Pendiente';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '1';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '1';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '1';
        $tarea->id_usuario = '2';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '3';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '2';
        $tarea->id_usuario = '4';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->nombre = 'Actividad';
        $tarea->descripcion = 'Descripción de la actividad';
        $tarea->id_empresa = '3';
        $tarea->id_usuario = '5';
        $tarea->estatus = 'Completada';
        $tarea->fecha_inicio = '08-09-2022';
        $tarea->fecha_vencimiento = '10-09-2022';
        $tarea->save();
    }
}
