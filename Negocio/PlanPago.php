<?php

/**
 * Represents the class of the PlanPago - DTO entity
 */

class PlanPago{

    //----------------------------
    //Attributes
    //----------------------------

    /**
     * Code of the payment plan to which it belongs
     *
     * @return int
     */ 
    private $cod_planPago;

    /**
     * name payment plan
     *
     * @return date
     */ 
    private $nom_planPago; 

    /**
     * value payment plan.
     *
     * @return int
     */ 
    private $valor_planPago;
     


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
     * Get the value of nom_planPago
     */ 
    public function getNom_planPago()
    {
        return $this->nom_planPago;
    }

    /**
     * Set the value of nom_planPago
     *
     * @return  self
     */ 
    public function setNom_planPago($nom_planPago)
    {
        $this->nom_planPago = $nom_planPago;

        return $this;
    }

    /**
     * Get the value of valor_planPago
     */ 
    public function getValor_planPago()
    {
        return $this->valor_planPago;
    }

    /**
     * Set the value of valor_planPago
     *
     * @return  self
     */ 
    public function setValor_planPago($ssn)
    {
        $this->valor_planPago = $valor_planPago;

        return $this;
    }
}  