<?php
    class database{
        private $host;
        private $dbusername;
        private $dbpassword;
        private $dbname;

        protected function connect(){
            $this->host = 'localhost';
            $this->dbusername = 'root';
            $this->dbpassword = '';
            $this->dbname = 'crud';

            $con = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
            return $con;
        }
    }

    class query extends database{
        public function getData(){
            $sql = "select * from user";
            $result= $this->connect()->query($sql);
            print_r($result);
        }
    }

?>