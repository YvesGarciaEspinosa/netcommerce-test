<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tarea;
use App\models\Empresa;
use App\models\User;


class TareasController extends Controller
{
    public function mostrarPendientes(){
        $tareas = Tarea::where('estatus','Pendiente')
        ->select('tareas.nombre','tareas.descripcion','tareas.fecha_inicio','tareas.fecha_vencimiento', 'empresas.nombre as empresa','users.name as usuario')
        ->join('empresas','tareas.id_empresa','=','empresas.id')
        ->join('users','tareas.id_usuario','=','users.id')
        ->orderBy('empresa')
        ->get();

        foreach($tareas as $tarea){
            if(!isset($tareas->usuario)){
                $tareas->usuario = "Sin usuario asignado";
            }
        }
        return response()->json($tareas);
    }

    public function usuariosDisponibles(){

        $empresasTareas = [];

        $empresas = Empresa::all();

        foreach($empresas as $empresa){
            $tareas = Tarea::where('estatus','Pendiente')->where('id_empresa',$empresa->id);
            $empresa = ["nombre" => $empresa->nombre, "cantidad" => $tareas->count()];

            array_push($empresasTareas,$empresa);
        }

        $empresaMasPendientes = ["nombre" => null, "cantidad" => 0];
        $max = 0;
        foreach($empresasTareas as $empresa){
            if($empresa["cantidad"] > $max){
                $empresaMasPendientes = $empresa;
                $max = $empresa["cantidad"];
            }
        }


        $usuariosTareas = [];

        $usuarios = User::all();

        foreach($usuarios as $usuario){
            $tareas = Tarea::where('estatus','Pendiente')->where('id_usuario',$usuario->id);
            $usuario = ["nombre" => $usuario->name, "cantidad" => $tareas->count()];

            array_push($usuariosTareas,$usuario);
        }

        $usuariosDisponibles = [];

        foreach($usuariosTareas as $usuario){
            if($usuario["cantidad"] < 5){
                array_push($usuariosDisponibles,$usuario);
            }
        }

        $empresaMasPendientes = json_encode($empresaMasPendientes);
        $usuariosDisponibles = json_encode($usuariosDisponibles);

        return "Empresa con mas tareas pendientes: " . $empresaMasPendientes . " Usuarios sin maximo de tareas: " . $usuariosDisponibles;

    }
}
