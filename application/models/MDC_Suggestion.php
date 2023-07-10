<?php

class MDC_Suggestion extends CI_Model 
{
    public $_date;
    public $_objectif;
    public $_client;
    public $_categories_repas;
    public $_repas_by_categorie_and_objectif;

    public function __construct() {
        parent::__construct();
        $this->load->model('MDC_Client');
    }

    public function setObjectif($_objectif)
    {
        $this->_objectif = $_objectif;
    }

    public function setClient($_client)
    {
        $this->_client = $_client;
    }

    // Méthodes de la classe
    public function setAllCategories_repas() 
    {
        $this->_categories_repas = $this->db->get('categories_repas')->result();
    }

    public function setRepasOfEachCategorie() 
    {
        foreach($_categorie_repas as &$this->_categories_repas)
        {
            $_categorie_repas->repas = $this->MDC_Client->getRepasByCategorieAndObjectif($this->_objectif);
        }
    }

    public function isReduce($_client, $_target)
    {
        if($_client->poids > $_target) return true;
        return false;
    }

    public function generateListeSuggestion($_dateDebut, $_client, $_target)
    {
        $_height = $_client->poids;

        $_List = array();

        if(isReduce($_client, $_target))
        {
            while ($_height > $_target)
            {
                $_List[] = new MDC_Suggestion($_dateDebut, $_client, $_target);
                $_lastList = end($_List);
                $_lastList.setAllCategories_repas();
                $_lastList.setRepasOfEachCategorie();
            }
        }
        else
        {
            while ($_height < $_target) 
            {
                $_List[] = new MDC_Suggestion($_dateDebut, $_client, $_target);
                $_lastList = end($_List);
                $_lastList.setAllCategories_repas();
                $_lastList.setRepasOfEachCategorie();
            }
        }
    }
}
