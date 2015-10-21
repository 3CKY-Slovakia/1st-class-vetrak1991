<?php
class Databaza {
    private $server = 'localhost';
    private $username = 'root';
    private $password = 'kuriatko';
    private $database = 'mydb';
   
    public function connect () {
    
        $this->db= mysqli_connect($this->server, $this->username, $this->password, $this->database);
        //mysqli_connect($this->server, $this->username, $this->password);
              
            
        
    }
    
    public function insert($table, $value, $row) {
        $row = implode($row);
        $sql= "INSERT INTO "."`".$table."` (`".$value."`)". " VALUES " . "('".$row."')";
   // echo "$sql";
        mysqli_query($this->db ,$sql);
   // if(mysqli_ping($this->db)){echo "mame pripojenie";} else {echo "nejde";};
   //var_dump($this->db);
    
   
}
       
        
        }



?>