<?php

/**
 * Represents the class of the Employeer - DTO entity
 */

class Administrador{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the employeer to which it belongs
     *
     * @return int
     */ 
    private $cod_empleado;

    /**
     * name of the employeer
     *
     * @return String
     */ 
    private $nom_empleado; 

     /**
     * id of the employeer
     *
     * @return int
     */ 
    private $cedula_empleado;

    /**
     * cargo del empleado
     *
     * @return Varchar
     */ 
    private $cargo_empleado;

    /**
     * user of the aplication employeer
     *
     * @return String
     */ 
    private $usuario_empleado;

    /**
     * password of the aplication employeer
     *
     * @return String
     */ 
    private $contraseña_empleado;

    /**
     * mail of the employeer
     *
     * @return String
     */ 
    private $correo_empleado;

    /**
     * tickets of the employeer
     *
     * @return int
     */ 
    private $cantidad_de_tickets;

    /**
     * level of the employeer
     *
     * @return int
     */ 
    private $nivel_empleado;

    /**
     * code of petition
     *
     * @return int
     */ 
    private $cod_peticion;
     
    /**
     * code of user
     *
     * @return int
     */ 
    private $cod_usuario;


    /**
     * Get the value of cod_empleado
     */ 
    public function getCod_empleado()
    {
        return $this->getCod_empleado;
    }

    /**
     * Set the value of cod_empleado
     *
     * @return  self
     */ 
    public function setCod_empleado($cod_empleado)
    {
        $this->cod_empleado = $cod_empleado;

        return $this;
    }

    /**
     * Get the value of Nom_empleado
     */ 
    public function getNom_empleado()
    {
        return $this->nom_empleado;
    }

    /**
     * Set the value of nom_empleado
     *
     * @return  self
     */ 
    public function setNom_empleado($nom_empleado)
    {
        $this->nom_empleado = $nom_empleado;

        return $this;
    }

    /**
     * Get the value of cedula_empleado
     */ 
    public function getCedula_empleado()
    {
        return $this->cedula_empleado;
    }

    /**
     * Set the value of cedula_empleado
     *
     * @return  self
     */ 
    public function setCedula_empleado($cedula_empleado)
    {
        $this->cedula_empleado = $cedula_empleado;

        return $this;
    }

    /**
     * Get the value of cargo_empleado
     */ 
    public function getCargo_empleado()
    {
        return $this->cargo_empleado;
    }

    /**
     * Set the value of cargo_empleado
     *
     * @return  self
     */ 
    public function setCargo_empleado($cargo_empleado)
    {
        $this->cargo_empleado = $cargo_empleado;

        return $this;
    }

    /**
     * Get the value of usuario_empleado
     */ 
    public function getUsuario_empleado()
    {
        return $this->usuario_empleado;
    }

    /**
     * Set the value of usuario_empleado
     *
     * @return  self
     */ 
    public function setUsuario_empleado($usuario_empleado)
    {
        $this->usuario_empleado = $usuario_empleado;

        return $this;
    }


    /**
     * Get the value of contraseña_empleado
     */ 
    public function getContraseña_empleado()
    {
        return $this->contraseña_empleado;
    }

    /**
     * Set the value of contraseña_empleado
     *
     * @return  self
     */ 
    public function setContraseña_empleado($contraseña_empleado)
    {
        $this->contraseña_empleado = $contraseña_empleado;

        return $this;
    }

    /**
     * Get the value of correo_empleado
     */ 
    public function getCorreo_empleado()
    {
        return $this->correo_empleado;
    }

    /**
     * Set the value of correo_empleado
     *
     * @return  self
     */ 
    public function setCorreo_empleado($correo_empleado)
    {
        $this->correo_empleado = $correo_empleado;

        return $this;
    }

    /**
     * Get the value of cantidad_tickets
     */ 
    public function getCantidad_tickets()
    {
        return $this->cantidad_tickets;
    }

    /**
     * Set the value of cantidad_tickets
     *
     * @return  self
     */ 
    public function setCantidad_tickets($cantidad_tickets)
    {
        $this->cantidad_tickets = $cantidad_tickets;

        return $this;
    }

    /**
     * Get the value of nivel_empleado
     */ 
    public function getNivel_empleado()
    {
        return $this->nivel_empleado;
    }

    /**
     * Set the value of nivel_empleado
     *
     * @return  self
     */ 
    public function setNivel_empleado($nivel_empleado)
    {
        $this->nivel_empleado = $nivel_empleado;

        return $this;
    }

    /**
     * Get the value of code petition
     */ 
    public function getCod_peticion()
    {
        return $this->cod_peticion;
    }

    /**
     * Set the value of code petition
     *
     * @return  self
     */ 
    public function setCod_usuario($cod_peticion)
    {
        $this->cod_peticion = $cod_peticion;

        return $this;
    }

    /**
     * Get the value of code user
     */ 
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Set the value of code users
     *
     * @return  self
     */ 
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }
}  