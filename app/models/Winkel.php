<?php
    class Winkel{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getWinkels(){
            $this->db->query('SELECT *,
                                winkels.id as winkelId,
                                winkels.naam as winkelName,
                                winkels.adres as winkelAdres,
                                winkels.postcode as winkelPostcode,
                                winkels.vestegingsplaats as winkelVesteging,
                                winkels.telefoonnummer as winkelPhone,
                                winkels.img as winkelImg
                                FROM winkels
                              ');

            $results = $this->db->resultSet();

            return $results;

    
        }
    }