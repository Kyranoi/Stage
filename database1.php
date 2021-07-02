<?php 

    // dit zijn properties

    class database { 
        private $host; 
        private $user; 
        private $password; 
        private $flowerpower; 
        private $charset;

        // een constructor is een speciale class functie 
        // een constructor wordt gebruikt voor het initialiseren van bijv. variabelen 
        // localhost is een alias voor de ip van je computer (127.0.0.1) 

        public function __construct(){
            $this->host = 'localhost';
            $this->user = 'root'; 
            $this->password = ''; 
            $this->db_name = 'flowerpower';
            $this->charset = 'utf8mb4';

            // maak een PDO class instance 
            // een try-catch statement wordt gebruikt om mogelijke errors af te vangen 

            $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=$this->charset";

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                $this->db_conn = new PDO($dsn, $this->user, $this->password);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
           }
       }

        

    }
    
?> 