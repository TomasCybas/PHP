<?php


class Conversation{
    public $id;
    public $customerId;
    public $date;
    public $conversation;

    public function __construct($customerId, $date = null, $conversation = null){
        if($conversation == null) {
            $row = DB_MySQL::getRow("SELECT * FROM contact_information WHERE customer_id = '$customerId' AND date = '$date'");
            $this->id = $row['id'];
            $this->customerId = $row['customer_id'];
            $this->date = $row['date'];
            $this->conversation = $row['conversation'];
        } else {
               $this->customerId = $customerId;
               $this->date = date("Y-m-d H:i:s", $date);
               $this->conversation = $conversation;
            }
    }

    public function add(){
        $sql = "INSERT INTO contact_information
                (customer_id, date, conversation)
                VALUES ('$this->customerId', '$this->date', '$this->conversation')";
        DB_MySQL::query($sql);
    }

    public function remove(){
        DB_MySQL::query("DELETE FROM contact_info WHERE id = '$this->id'");
    }
}