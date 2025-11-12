<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return 'Página de bienvenida';
    }

    public function misServicios()
    {
        return 'Página de mis servicios de ';
    }

    public function misServiciosCategoria($categoria, $tipo)
    {
        return 'Página de mis servicios de ' . $categoria . ' - Tipo: ' . $tipo;
    }

    public function acercaDe()
    {
        return 'Página de acerca de';
    }

    public function contactos()
    {
        return 'Página de contactos';
    }
}
