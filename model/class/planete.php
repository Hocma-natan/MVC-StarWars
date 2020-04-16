<?php
class Planete{
    private $id;
    private $name;
    private $status;
    private $keyFact;
    private $image;
    public function __construct($id = null, $name, $status, $keyFact, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->keyFact = $keyFact;
        $this->image = $image;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function getKeyFact(){
        return $this->keyFact;
    }
    public function setKeyFact($keyFact){
        $this->keyFact = $keyFact;
    }
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }
}
?>