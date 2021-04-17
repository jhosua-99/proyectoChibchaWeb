<?php

/**
 * Represents the class of the Administrador - DTO entity
 */

class Administrador{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the admin to which it belongs
     *
     * @return int
     */ 
    private $cod_administrador;

    /**
     * name of the admin
     *
     * @return String
     */ 
    private $nom_administrador; 

    /**
     * user of the aplication admin
     *
     * @return String
     */ 
    private $usuario_administrador;

    /**
     * password of the aplication admin
     *
     * @return String
     */ 
    private $contraseña_administrador;
     
    /**
     * code of user
     *
     * @return int
     */ 
    private $cod_usuario;


    /**
     * Get the value of cod_administrador
     */ 
    public function getCod_administrador()
    {
        return $this->getCod_administrador;
    }

    /**
     * Set the value of cod_administrador
     *
     * @return  self
     */ 
    public function setCod_administrador($cod_administrador)
    {
        $this->cod_administrador = $cod_administrador;

        return $this;
    }

    /**
     * Get the value of Nom_administrador
     */ 
    public function getNom_administrador()
    {
        return $this->nom_administrador;
    }

    /**
     * Set the value of Nom_administrador
     *
     * @return  self
     */ 
    public function setNom_administrador($nom_administrador)
    {
        $this->nom_administrador = $nom_administrador;

        return $this;
    }

    /**
     * Get the value of usuario_administrador
     */ 
    public function getUsuario_administrador()
    {
        return $this->usuario_administrador;
    }

    /**
     * Set the value of usuario_administrador
     *
     * @return  self
     */ 
    public function setUsuario_administrador($usuario_administrador)
    {
        $this->usuario_administrador = $usuario_administrador;

        return $this;
    }

    /**
     * Get the value of contraseña_administrador
     */ 
    public function getContraseña_administrador()
    {
        return $this->contraseña_administrador;
    }

    /**
     * Set the value of contraseña_administrador
     *
     * @return  self
     */ 
    public function setContraseña_administrador($contraseña_administrador)
    {
        $this->contraseña_administrador = $contraseña_administrador;

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