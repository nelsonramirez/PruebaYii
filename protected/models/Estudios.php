<?php

/**
 * This is the model class for table "estudios".
 *
 * The followings are the available columns in table 'estudios':
 * @property integer $id
 * @property string $Institucion
 * @property integer $anoGrado
 * @property string $Titulo
 * @property integer $usuarios_id
 *
 * The followings are the available model relations:
 * @property Usuarios $usuarios
 */
class Estudios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estudios the static model class
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
		return 'estudios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Institucion, anoGrado, Titulo, usuarios_id', 'required'),
			array('anoGrado, usuarios_id', 'numerical', 'integerOnly'=>true),
			array('Institucion, Titulo', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Institucion, anoGrado, Titulo, usuarios_id', 'safe', 'on'=>'search'),
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
			'Institucion' => 'Institucion',
			'anoGrado' => 'Ano Grado',
			'Titulo' => 'Titulo',
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
		$criteria->compare('Institucion',$this->Institucion,true);
		$criteria->compare('anoGrado',$this->anoGrado);
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('usuarios_id',$this->usuarios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}