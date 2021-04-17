<?php

/**
 * Represents the class of the Dominio - DTO entity
 */

class Dominio{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the domain to which it belongs
     *
     * @return int
     */ 
    private $cod_dominio;

    /**
     * Code of the web site
     *
     * @return int
     */ 
    private $cod_sitio_web; 

    /**
     * Code of Package
     *
     * @return int
     */ 
    private $cod_paquete;

     /**
     * Code Payment plan
     *
     * @return int
     */ 
    private $cod_planPago;

     /**
     * domain cration date
     *
     * @return date
     */ 
    private $fecha_creacion;
     


    /**
     * Get the value of cod_dominio
     */ 
    public function getCod_dominio()
    {
        return $this->cod_dominio;
    }

    /**
     * Set the value of cod_dominio
     *
     * @return  self
     */ 
    public function setCod_dominio($cod_dominio)
    {
        $this->cod_dominio = $cod_dominio;

        return $this;
    }

    /**
     * Get the value of cod_sitio_web
     */ 
    public function getCod_sitio_web()
    {
        return $this->cod_sitio_web;
    }

    /**
     * Set the value of cod_sitio_web
     *
     * @return  self
     */ 
    public function setCod_sitio_web($cod_sitio_web)
    {
        $this->cod_sitio_web = $cod_sitio_web;

        return $this;
    }

    /**
     * Get the value of cod_paquete
     */ 
    public function getCod_paquete()
    {
        return $this->cod_paquete;
    }

    /**
     * Set the value of cod_paquete
     *
     * @return  self
     */ 
    public function setCod_paquete($cod_paquete)
    {
        $this->cod_paquete = $cod_paquete;

        return $this;
    }

    /**
     * Get the value of cod_planPago
     */ 
    public function getCod_planPago()
    {
        return $this->cod_planPago;
    }

    /**
     * Set the value of cod_planPago
     *
     * @return  self
     */ 
    public function setCod_planPago($cod_planPago)
    {
        $this->cod_planPago = $cod_planPago;

        return $this;
    }

    /**
     * Get the value of fecha_creacion
     */ 
    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */ 
    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }
}  