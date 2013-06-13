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
class TareasController extends Controller {

    //put your code here

    public function actionIndex() {
        $model = Tareas::model();

        $tareas = $model->findAll();

        $this->render('index', array('tareas' => $tareas));
    }

    public function actionView($id) {
        $model = Tareas::model()->findByPk($id);

        $this->render('view', array('model' => $model));
    }

    public function actionEdit($id) {
        $model = Tareas::model()->findByPk($id);

        if (isset($_POST['Tareas'])) {
           /* echo '<pre>'; print_r($_POST); echo '</pre>';            
            Yii::app()->end();
            */
            $model->attributes = $_POST['Tareas'];

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('edit', array('model' => $model));
    }
    
    public function actionAdd() {
        $model = new Tareas() ;

        if (isset($_POST['Tareas'])) {
           /* echo '<pre>'; print_r($_POST); echo '</pre>';            
            Yii::app()->end();
            */
            $model->attributes = $_POST['Tareas'];

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('add', array('model' => $model));
    }
    
    public function actionDelete($id){
        
       // $elemento = Tareas::model()->deleteByPk($id);
        $elemento = Tareas::model()->findByPk($id);
        $elemento->delete();
        $this->redirect(array("index"));
    }

}

?>
