<?php
class planeteManager extends DbManager{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectAll(){
        $planetes = [];
        $sql = 'SELECT * FROM planets';
        foreach($this->bdd->query($sql) as $row){
            $planetes[] = new Planete($row['id'], $row['name'], $row['status'], $row['keyFact'], $row['image']);
        }
        return $planetes;
    }
    public function insert(Planete $planete){
        $name = $planete->getName();
        $status = $planete->getStatus();
        $keyFact = $planete->getKeyFact();
        $image = $planete->getImage();
        $requete = $this->bdd->prepare("INSERT INTO planets(name, status, keyfact, image)VALUE(?,?,?,?)");
        $requete->bindParam(1, $name);
        $requete->bindParam(2, $status);
        $requete->bindParam(3, $keyFact);
        $requete->bindParam(4, $image);
        $requete->execute();
        $planete->setId($this->bdd->lastInsertId());
    }

    public function delete($id)
    {
        $requete = $this->bdd->prepare("DELETE FROM planets where id = ?");
        $requete->bindParam(1,$id);
        $requete->execute();
    }
    public function select($id){
        $requete = $this->bdd->prepare("SELECT * FROM planets WHERE id=?");
        $requete->bindParam(1, $id);
        $requete->execute();
        $res = $requete->fetch();
        $planete = new Planete($res['id'], $res['name'], $res['status'], $res['keyFact'], $res['image']);
        return $planete;
    }
    public function update(Planete $planete){
        $name = $planete->getName();
        $status = $planete->getStatus();
        $keyFacts = $planete->getKeyFact();
        $image = $planete->getImage();
        $id = $planete->getId();
        $requete = $this->bdd->prepare("UPDATE planets SET name=?, status=?, keyFact=?, image=? WHERE id=?");
        $requete->bindParam(1, $name);
        $requete->bindParam(2, $status);
        $requete->bindParam(3, $keyFacts);
        $requete->bindParam(4, $image);
        $requete->bindParam(5, $id);
        $requete->execute();
    }
}