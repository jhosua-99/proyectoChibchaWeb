<?php

/**
 * Represents the class of the ARTICLE - DTO entity
 */

class Article{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the document to which it belongs
     *
     * @return int
     */ 
    private $cod_documento;

    /**
     * article publication date
     *
     * @return date
     */ 
    private $fecha_publicacion; 

    /**
     * ssn of the article.
     *
     * @return int
     */ 
    private $ssn;
     


    /**
     * Get the value of cod_documento
     */ 
    public function getCod_documento()
    {
        return $this->cod_documento;
    }

    /**
     * Set the value of cod_documento
     *
     * @return  self
     */ 
    public function setCod_documento($cod_documento)
    {
        $this->cod_documento = $cod_documento;

        return $this;
    }

    /**
     * Get the value of fecha_publicacion
     */ 
    public function getFecha_publicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * Set the value of fecha_publicacion
     *
     * @return  self
     */ 
    public function setFecha_publicacion($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    /**
     * Get the value of ssn
     */ 
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set the value of ssn
     *
     * @return  self
     */ 
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }
}  