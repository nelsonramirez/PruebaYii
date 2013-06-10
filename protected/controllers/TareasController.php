<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TareasController
 *
 * @author Empresa
 */
class TareasController extends Controller{
    //put your code here
    
    public function actionIndex(){
        $model = Tareas::model();
        
        $tareas = $model->findAll();
	
	$this->render('index', array('tareas'=>$tareas));
    }
}

?>
