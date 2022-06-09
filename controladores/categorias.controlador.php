<?php

class CategoriasControlador
{

    static public function ctrListarCategorias()
    {

        $categorias = CategoriasModelo::mdlListarCategorias();

        return $categorias;
    }
}
