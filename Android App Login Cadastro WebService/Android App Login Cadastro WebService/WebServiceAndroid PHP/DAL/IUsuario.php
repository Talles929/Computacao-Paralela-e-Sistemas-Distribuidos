<?php

interface IUsuario {
        
    function insert(Usuario $usuario);
    function select($id);
}
