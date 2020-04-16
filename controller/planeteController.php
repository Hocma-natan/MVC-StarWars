<?php
class PlaneteController{

    public function addForm(){

        require 'View/addForm.php';
    }
    public function addPlanete(){
        $planete = new Planete(null, $_POST['name'], $_POST['status'], $_POST['keyFact'], $_POST['image']);
        var_dump($planete);
        $planeteManager = new PlaneteManager();
        $planeteManager->insert($planete);
        header('location: http://localhost/PHP-orientéObjet/j5/index.php?controller=default&action=home');
    }
    public function deletePlanete($id){
        $planeteManager = new PlaneteManager();
        $planeteManager->delete($id);
        header('location: http://localhost/PHP-orientéObjet/j5/index.php?controller=default&action=home');
    }
    public function editForm($id){
        $planeteManager = new planeteManager();
        $planete = $planeteManager->select($id);
        require 'view/editForm.php';
    }
    public function editPlanete($id){
        $planeteManager = new planeteManager();
        $planete = new Planete($id , $_POST['name'], $_POST['status'], $_POST['keyfact'], $_POST['image']);
        $planeteManager->update($planete);
        header('location: http://localhost/PHP-orientéObjet/j5/index.php?controller=default&action=home');
    }
}