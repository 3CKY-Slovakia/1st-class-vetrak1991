<?php

class GeneratorDat {
    private $cislo= array("+",4,2,1,9);
    private $double; 
    private $meno;
   
   
    function __construct()/* function volanieObjektov() */{
        $this->generujCislo();
        $this->double();
        $this->meno();
     //   $this->retazec();
      //  $this->vypis(); 
      
        $this->retazec();
        $this->zapis_db();
       
        
    }
    
    private function generujCislo(){
        $this->value='cislo';
        for($i=1; $i<=8;$i++){
          $aaa[$i+4]= mt_rand(0,9);
           }
          $this->aaa=$aaa;
           
    }
    
    private function double(){
        $value='desatinne_znaky';
     
        $this->aaa= round(((mt_rand(1, 10)) / (mt_rand(1, 100))), mt_rand(1, 5));
    
    }
    
    private function meno(){
        $value='meno';
        $mena = array ('Miso', 'Peter', 'jozo', 'fesi', 'borec' );
        $this->aaa = $mena[mt_rand(0,4)];

    }
    
    private function retazec(){
    $value='retazec';    
    $retazec = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    for($i=0;$i<10;$i++){
        
        $pole = str_split($retazec);
        $this->aaa[$i]= $pole[mt_rand(0, 35)];
    }
    }
 
   /* public function vypis(){
        
        return '<tr><td>'
                . implode($this->cislo).'</td><td>' 
                . $this->double .'</td><td>'
                . $this->meno .'</td><td>'
                . implode($this->retazec).'</tr></td>';
               
    } */
    public function zapis_db(){
        $pripojenie = new Databaza();
        $pripojenie->connect();
        
        $this->generujCislo();
        
        $pripojenie->insert('aaa', $this->value, $this->aaa );
        //echo "<br />"."$this->aaa"."   " . $this->aaa;
        
        $pripojenie = NULL;
    }
}
    
    
    
    
 
    
    

?>
