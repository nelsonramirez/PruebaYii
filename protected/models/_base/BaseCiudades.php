<?php

/**
 * This is the model base class for the table "ciudades".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Ciudades".
 *
 * Columns in table "ciudades" available as properties of the model,
 * followed by relations of table "ciudades" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Usuarios[] $usuarioses
 */
abstract class BaseCiudades extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'ciudades';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array('nombre', 'required'),
            array('nombre', 'length', 'max'=>45),
            array('id, nombre', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'ciudad_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombre' => Yii::t('app', 'Nombre'),
                'usuarioses' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombre', $this->nombre, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}