<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nombre
 * @property integer $telefono
 * @property string $email
 * @property integer $estado
 * @property string $genero
 * @property integer $folio_id
 * @property integer $ciudad_id
 *
 * The followings are the available model relations:
 * @property Estudios[] $estudioses
 * @property Experiencia[] $experiencias
 * @property Folio $folio
 * @property Ciudad $city
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, telefono, estado, genero, folio_id, ciudad_id', 'required'),
			array('telefono, estado, folio_id, ciudad_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>60),
			array('email', 'length', 'max'=>45),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, telefono, email, estado, genero, folio_id, ciudad_id', 'safe', 'on'=>'search'),
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
			'estudioses' => array(self::HAS_MANY, 'Estudios', 'usuarios_id'),
			'experiencias' => array(self::HAS_MANY, 'Experiencia', 'usuarios_id'),
			'folio' => array(self::BELONGS_TO, 'Folio', 'folio_id'),
			'city' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'estado' => 'Estado',
			'genero' => 'Genero',
			'folio_id' => 'Folio',
			'ciudad_id' => 'Ciudad de Origen',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('folio_id',$this->folio_id);
		$criteria->compare('ciudad_id',$this->ciudad_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}