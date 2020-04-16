<?php

    require 'include.php';

    if ($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $planeteController = new DefaultController();
        $planeteController->home();
    }
    elseif($_GET['controller'] === 'planete' && $_GET['action'] === 'addForm'){
        $planeteController = new PlaneteController();
        $planeteController->addForm();
    }
    elseif($_GET['controller'] === 'planete' && $_GET['action'] === 'addPlanete'){
        $planeteController = new PlaneteController();
        $planeteController->addPlanete();
    }
    else if($_GET['controller'] === 'planete' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $articleController = new PlaneteController();
        $articleController->deletePlanete($_GET['id']);
    }
    elseif($_GET['controller'] === 'planete' && $_GET['action'] === 'editForm' && isset($_GET['id'])){
        $planeteController = new PlaneteController();
        $planeteController->editForm($_GET['id']);
    }
    elseif($_GET['controller'] === 'planete' && $_GET['action'] === 'editPlanete' && isset($_GET['id'])){
        $planeteController = new PlaneteController();
        $planeteController->editPlanete($_GET['id']);
    }
    else{
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>