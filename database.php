<?php
class database{

    //properties
    private $host;
    private $dbh;
    private $pass;
    private $user;
    private $db;

    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'vp9a';

        try{
            $dsn = "mysql:host=$this->host;dbname=$this->db"; //data source name = data 
            $this->dbh = new PDO($dsn, $this->$user, $this->$pass);
        }catch(PDOException $e){
            //die en exit zijn hetzelfde 
            die ("Unable to connect: " . $e->getMessage());
        }

    }

    public function addFirstUser(){

        $sql = "INSERT INTO users VALUES (:id, :username, :password, :created_at, :updated_at)";

        $statement = $this->dbh->prepare($sql); //prepared statement

        $statement->execute([
            'id'=>NULL, // NULL want kolom is auto_increment
            'username'=>'kyran',
            'password'=>password_hash('kyran', PASSWORD_DEFAULT), // sensitive data (niet leesbaar voor menselijk oog)
            'created_at'=>date("Y-m-d H:i:s"), // datetime mysql
            'created_at'=>date("Y-m-d H:i:s")
        ]);



    }


    public function login($uname, $psw){

        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        $stmt = $this->dbh->prepare($sql);

        $stm->execute([
            'username'=>$uname,

        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(is_array($result)){
            if(count($result) > 0){
                
                if($uname && password_verify($psw, $result['password'])){
                    session_start();

                    $_SESSION['username'] = $result['username'];
                    $_SESSION['ID'] = $result['id'];
                    $_SESSION['is_logged_in'] = true;

                    

                    //header("location: welcome.php");
                }

            }else{
                echo 'Username and/or password is incorrect. Please fix your input errors and try again';
            }
        }
    }
}


?>