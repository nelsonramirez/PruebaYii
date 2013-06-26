<?php

/**
 * This is the model class for table "experiencia".
 *
 * The followings are the available columns in table 'experiencia':
 * @property integer $id
 * @property string $Empresa
 * @property string $Inicio
 * @property string $Finalizacion
 * @property string $Jefe
 * @property integer $usuarios_id
 *
 * The followings are the available model relations:
 * @property Usuarios $usuarios
 */
class Experiencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'experiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empresa, Inicio, Finalizacion, Jefe, usuarios_id', 'required'),
			array('usuarios_id', 'numerical', 'integerOnly'=>true),
			array('Empresa', 'length', 'max'=>64),
			array('Jefe', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Empresa, Inicio, Finalizacion, Jefe, usuarios_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Empresa' => 'Empresa',
			'Inicio' => 'Inicio',
			'Finalizacion' => 'Finalizacion',
			'Jefe' => 'Jefe',
			'usuarios_id' => 'Usuarios',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Empresa',$this->Empresa,true);
		$criteria->compare('Inicio',$this->Inicio,true);
		$criteria->compare('Finalizacion',$this->Finalizacion,true);
		$criteria->compare('Jefe',$this->Jefe,true);
		$criteria->compare('usuarios_id',$this->usuarios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}