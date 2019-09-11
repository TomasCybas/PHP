<?php

namespace Classes;
class Company{
    public $id;
    public $name;
    public $address;
    public $vatCode;
    public $companyName;
    public $phone;
    public $email;


    /**
     * Company constructor. If short name is not given, searches the database by VAT code
     * @param $vatCode - VAT Code of the company
     * @param null $id
     * @param  $name - short name of the company
     * @param  $address - company address
     * @param  $companyName -  full company name
     * @param  $phone
     * @param  $email
     */
    public function __construct($vatCode, $id = null, $name = null, $address = null, $companyName = null, $phone = null, $email = null){
        if($name == null) {
            $row = DB_MySQL::getRow("SELECT * FROM companies WHERE vat_code = '$vatCode'");
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->address = $row['address'];
            $this->vatCode = $row['vat_code'];
            $this->companyName = $row['company_name'];
            $this->phone = $row['phone'];
            $this->email = $row['email'];
        } else {
            $this->name = $name;
            $this->address = $address;
            $this->vatCode = $vatCode;
            $this->companyName = $companyName;
            if($phone == '') {
                $this->phone = null;
            } else {
                $this->phone = $phone;
            }
            if($email == '') {
                $this->email = null;
            } else {
                $this->email = $email;
            }
        }
    }

    public function add() {
        $sql = "INSERT INTO companies (name, address, vat_code, company_name, phone, email) 
                VALUES ('$this->name', '$this->address', '$this->vatCode', 
                        '$this->companyName', '$this->phone', '$this->email') ";
        DB_MySQL::query($sql);
    }

    public function remove() {
            DB_MySQL::query("DELETE FROM companies WHERE id = '$this->id'");
    }


    public function update() {
        $sql = "UPDATE companies SET 
                name = '$this->name',
                address = '$this->address',
                vat_code = '$this->vatCode',
                company_name = '$this->companyName',
                phone = '$this->phone',
                email = '$this->email'";
        DB_MySQL::query($sql);
    }

    public static function getCompanies(){
        $companies = [];
        $data = DB_MySQL::getTable("SELECT * FROM companies");
        foreach ($data as $item) {
            $companies []= new Company($item['vat_code']);
        }
        return $companies;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


    public function getVatCode()
    {
        return $this->vatCode;
    }

    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;
        return $this;
    }


    public function getCompanyName()
    {
        return $this->companyName;
    }


    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}