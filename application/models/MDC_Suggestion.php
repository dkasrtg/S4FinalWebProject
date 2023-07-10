<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MDC_Suggestion extends CI_Model 
{
    public $_date;
    public $_objectif;
    public $_client;
    public $_categories_repas;

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
        $this->_categories_repas = $this->db->get('categorie_repas')->result();
    }

    public function setRepasOfEachCategorie() 
    {
        for($i = 0 ; $i < count($this->_categories_repas) ; $i++)
        {
            $this->_categories_repas[$i]->_repas = $this->MDC_Client->getRepasByCategorieAndObjectif($this->_objectif, $this->_categories_repas[$i]->id_categorie_repas);
        }
    }

    public function isReduce($_clientHeight, $_target)
    {
        if($_clientHeight > $_target) return true;
        return false;
    }

    public function generateListeSuggestion($_dateDebut, $_client, $_target)
    {
        // $_height = $this->MDC_Client->getLastWeightByUser($_client->id_client);
        $_height = 1000;

        $_List = array();

        if($this->isReduce($_height, $_target))
        {
            while ($_height > $_target)
            {
                $_List[] = new MDC_Suggestion();
                $_lastList = end($_List);
                $_lastList->setObjectif(-1);
                $_lastList->setClient($_client);
                $_lastList->setAllCategories_repas();
                $_lastList->setRepasOfEachCategorie();
                $_height -= 0.2;

                foreach($_lastList->_categories_repas as $_categorie_repas)
                {    
                    $_height -= $_categorie_repas->_repas['affectation_poids'];
                    $_dateDebut = date('Y-m-d', strtotime($_dateDebut . ' +1 day')); // Ajouter un jour à la date de début
                }
            }
        }
        else
        {
            while ($_height < $_target) 
            {
                $_List[] = new MDC_Suggestion();
                $_lastList = end($_List);
                $_lastList->setObjectif(1);
                $_lastList->setClient($_client);
                $_lastList->setAllCategories_repas();
                $_lastList->setRepasOfEachCategorie();
                // $_height += $_lastList->repas->affectation_poids;
                $_dateDebut = date('Y-m-d', strtotime($_dateDebut . ' +1 day')); // Ajouter un jour à la date de début
            }
        }
        var_dump($_List);
        return $_List;
    }
}
