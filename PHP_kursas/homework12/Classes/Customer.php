<?php


class Customer{
    public $id;
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $address;
    public $position;
    public $companyId;

    public $company = null;



    /**
     * Customer constructor.
     * @param $companyId
     * @param $name
     * @param $surname
     * @param bool $isNewEntry
     * @param null $phone
     * @param null $email
     * @param null $address
     * @param null $position
     */
    public function __construct($companyId, $name = null, $surname = null, $isNewEntry = FALSE, $phone = null, $email = null, $address = null, $position = null){
        if($isNewEntry != TRUE){
            $sql = "SELECT cust.* FROM customers as cust 
                LEFT JOIN companies as comp ON cust.company_id = comp.id
                WHERE cust.company_id = '$companyId' AND cust.name = '$name' AND cust.surname = '$surname' ";
            $row = DB_MySQL::getRow($sql);
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->surname = $row['surname'];
            $this->phone = $row['phone'];
            $this->email = $row['email'];
            $this->address = $row['address'];
            $this->position = $row['position'];
            $this->companyId = $row['company_id'];

        } else {
            $this->name = $name;
            $this->surname = $surname;
            $this->phone = $phone;
            $this->email = $email;
            $this->address = $address;
            $this->position = $position;
            $this->companyId = $companyId;
        }
    }

    public function add() {
        $sql = "INSERT INTO customers
                (name, surname, phone, email, address, position, company_id)
                VALUES ('$this->name', '$this->surname', '$this->phone', '$this->email',
                '$this->address', '$this->position', '$this->companyId')";
        DB_MySQL::query($sql);
    }

    public function remove(){
        DB_MySQL::query("DELETE FROM customers WHERE id = '$this->id'");
    }

    public static function getCustomers() {
       return DB_MySQL::getTable("SELECT * FROM customers");
    }

    public function getCompany(){
        $id = DB_MySQL::getRow("SELECT * FROM companies WHERE id = '$this->companyId'")['vat_code'];
        $this->company = new Company($id);
        return $this->company;
    }

    public function getConversations(){
        $sql = "SELECT * FROM contact_information WHERE customer_id = '$this->id'";
         $conversations = null;
        foreach (DB_MySQL::getTable($sql) as $item) {
            $conversations[]= new Conversation($item['customer_id'], $item['date']);
        }
        return $conversations;
    }


}