<?php

/**
 * This is the model class for table "tbl_tercero".
 *
 * The followings are the available columns in table 'tbl_tercero':
 * @property string $terceroID
 * @property string $nombre
 * @property integer $estado
 * @property string $direccion
 * @property string $codep
 * @property string $ciudad
 * @property string $departament
 * @property string $pais
 * @property string $telefono
 * @property string $fax
 * @property string $url
 * @property string $email
 * @property integer $user_c
 * @property integer $user_m
 * @property string $date_c
 * @property string $date_m
 */
class TblTercero extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblTercero the static model class
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
		return 'tbl_tercero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estado, direccion, codep, ciudad, pais, date_c', 'required'),
			array('estado, user_c, user_m', 'numerical', 'integerOnly'=>true),
			array('nombre, ciudad, departament, pais, telefono, fax', 'length', 'max'=>45),
			array('direccion', 'length', 'max'=>245),
			array('codep', 'length', 'max'=>10),
			array('url, email', 'length', 'max'=>128),
			array('date_m', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('terceroID, nombre, estado, direccion, codep, ciudad, departament, pais, telefono, fax, url, email, user_c, user_m, date_c, date_m', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'terceroID' => 'Tercero',
			'nombre' => 'Nombre',
			'estado' => 'Estado',
			'direccion' => 'Direccion',
			'codep' => 'Codep',
			'ciudad' => 'Ciudad',
			'departament' => 'Departament',
			'pais' => 'Pais',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'url' => 'Url',
			'email' => 'Email',
			'user_c' => 'User C',
			'user_m' => 'User M',
			'date_c' => 'Date C',
			'date_m' => 'Date M',
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

		$criteria->compare('terceroID',$this->terceroID,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('codep',$this->codep,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('departament',$this->departament,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('user_c',$this->user_c);
		$criteria->compare('user_m',$this->user_m);
		$criteria->compare('date_c',$this->date_c,true);
		$criteria->compare('date_m',$this->date_m,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}