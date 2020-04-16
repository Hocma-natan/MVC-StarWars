<?php
class DefaultController{

    public function home(){
        
        $planeteManager = new PlaneteManager;
        $planetes = $planeteManager->selectAll();
        require 'View/home_view.php';
    }
}
?>