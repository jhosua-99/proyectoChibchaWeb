<?php

/**
 * Represents the class of the Paquete - DTO entity
 */

class Paquete{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the package to which it belongs
     *
     * @return int
     */ 
    private $cod_paquete;

    /**
     * name package
     *
     * @return date
     */ 
    private $nom_paquete; 

    /**
     * description of package
     *
     * @return String
     */ 
    private $descripcion_paquete;

     /**
     * value of package
     *
     * @return int
     */ 
    private $valor_paquete;

     /**
     * cod of package's distributor
     *
     * @return int
     */ 
    private $cod_distribuidor;
     


    /**
     * Get the value of cod_package
     */ 
    public function getCod_package()
    {
        return $this->cod_package;
    }

    /**
     * Set the value of cod_documento
     *
     * @return  self
     */ 
    public function setCod_package($cod_package)
    {
        $this->cod_package = $cod_package;

        return $this;
    }

    /**
     * Get the value of nom_paquete
     */ 
    public function getNom_paquete()
    {
        return $this->nom_paquete;
    }

    /**
     * Set the value of nom_paquete
     *
     * @return  self
     */ 
    public function setNom_paquete($nom_paquete)
    {
        $this->nom_paquete = $nom_paquete;

        return $this;
    }

    /**
     * Get the value of descripcionPaquete
     */ 
    public function getDescripcion_paquete()
    {
        return $this->descripcion_paquete;
    }

    /**
     * Set the value of descripcionPaquete
     *
     * @return  self
     */ 
    public function setDescripcion_paquete($descripcion_paquete)
    {
        $this->descripcion_paquete = $descripcion_paquete;

        return $this;
    }

    /**
     * Get the value of valor_paquete
     */ 
    public function getValor_paquete()
    {
        return $this->valor_paquete;
    }

    /**
     * Set the value of valor_paquete
     *
     * @return  self
     */ 
    public function setValor_paquete($valor_paquete)
    {
        $this->valor_paquete = $valor_paquete;

        return $this;
    }

    /**
     * Get the value of cod_distribuidor
     */ 
    public function getCod_distribuidor()
    {
        return $this->cod_distribuidor;
    }

    /**
     * Set the value of cod_distribuidor
     *
     * @return  self
     */ 
    public function setCod_distribuidor($cod_distribuidor)
    {
        $this->cod_distribuidor = $cod_distribuidor;

        return $this;
    }
}  