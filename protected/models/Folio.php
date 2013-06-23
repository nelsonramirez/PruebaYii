<?php

/**
 * This is the model class for table "folio".
 *
 * The followings are the available columns in table 'folio':
 * @property integer $id
 * @property string $lugar
 * @property integer $psicologica
 * @property integer $tecnica
 * @property integer $entrevista
 * @property integer $puntaje
 *
 * The followings are the available model relations:
 * @property Usuarios[] $usuarioses
 */
class Folio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Folio the static model class
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
		return 'folio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugar', 'required'),
			array('psicologica, tecnica, entrevista, puntaje', 'numerical', 'integerOnly'=>true),
			array('lugar', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lugar, psicologica, tecnica, entrevista, puntaje', 'safe', 'on'=>'search'),
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
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'folio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lugar' => 'Lugar',
			'psicologica' => 'Psicologica',
			'tecnica' => 'Tecnica',
			'entrevista' => 'Entrevista',
			'puntaje' => 'Puntaje',
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
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('psicologica',$this->psicologica);
		$criteria->compare('tecnica',$this->tecnica);
		$criteria->compare('entrevista',$this->entrevista);
		$criteria->compare('puntaje',$this->puntaje);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}