<?php


class City  {
    public $id;
    public $name;
    public $countryCode;
    public $population;
    public $country = null;



    public function __construct($id = null, $countryCode = null, $name = null, $population = null){
        if($countryCode==null){
            $row = DB_MySQL::getRow("SELECT * FROM city WHERE id = '$id'");
            $this->id = $row['id'];
            $this->countryCode = $row['country_code'];
            $this->name = $row['name'];
            $this->population = $row['population'];
        } else {
            $this->countryCode = $countryCode;
            $this->id = $id;
            $this->name = $name;
            $this->population = $population;
        }
        $this->country = new Country($this->countryCode);

    }

    public function save(){
        $sql = "UPDATE city SET 
                name = '$this->name', 
                country_code ='$this->countryCode', 
                population = '$this->population',
                WHERE id = '$this->id'";
        DB_MySQL::query($sql);
    }


    public function delete(){
        DB_MySQL::query("DELETE FROM city WHERE id='$this->id'");
    }


    public static function getCities($countryCode){
        $cities = [];
        foreach (DB_MySQL::getTable("SELECT * FROM city WHERE country_code = '$countryCode'") as $row){
            $cities[]= new City($row['id'], $row['country_code'], $row['name'],
                        $row['population']);
        }
        return $cities;
    }




}