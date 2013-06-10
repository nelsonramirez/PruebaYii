<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SaludoController
 *
 * @author Empresa
 */
class SaludoController extends Controller {
    //put your code here

    public function actionIndex(){

	$saludo = 'Hola Que tal como estas?';
	$this->render('index',array('saludo'=>$saludo));
    }
    
}

?>
