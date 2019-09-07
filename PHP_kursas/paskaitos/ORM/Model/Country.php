<?php


class Country
{
    public $id;
    public $name;
    public $code;
    public $population;
    public $lifeExpectancy;
    private $cities = null;


    public function __construct($code, $id = null, $name = null, $population = null, $lifeExpectancy = null)
    {
        if ($id == null) {
            $row = DB_MySQL::getRow("SELECT * FROM country WHERE code = '$code'");
            $this->id = $row['id'];
            $this->code = $row['code'];
            $this->name = $row['name'];
            $this->population = $row['population'];
            $this->lifeExpectancy = $row['life_expectancy'];
        } else {
            $this->code = $code;
            $this->id = $id;
            $this->name = $name;
            $this->population = $population;
            $this->lifeExpectancy = $lifeExpectancy;
        }


    }

    public function getCities(){
        if ($this > $this->cities == null) {
            $this->cities = City::getCities($this->code);
        }
        return $this->cities;
    }

    public function save()
    {
        $sql = "UPDATE country SET 
                name = '$this->name', 
                code ='$this->code', 
                population = '$this->population',
                life_expectancy = '$this->lifeExpectancy'
                WHERE code = '$this->code'";
        DB_MySQL::query($sql);
    }


    public function delete()
    {
        DB_MySQL::query("DELETE FROM country WHERE code='$this->code'");
    }


    public static function getCountries()
    {
        $countries = [];
        foreach (DB_MySQL::getTable("SELECT * FROM country") as $row) {
            $countries[] = new Country($row['code'], $row['id'], $row['name'],
                $row['population'], $row['life_expectancy']);
        }
        return $countries;
    }


}