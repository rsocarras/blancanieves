<?php

/**
 * This is the model class for table "tbl_contrato".
 *
 * The followings are the available columns in table 'tbl_contrato':
 * @property string $id
 * @property string $contratoN
 * @property integer $estadoID
 * @property integer $tipoID
 * @property integer $usuarioID
 * @property integer $terceroID
 * @property integer $empresaID
 * @property integer $contratanteID
 * @property string $shipping_address
 * @property string $objeto
 * @property string $start_date
 * @property string $end_date
 * @property string $mod_date
 * @property string $valor
 * @property integer $userID
 * @property string $fecha_c
 * @property string $fecha_m
 * @property integer $user_c
 * @property integer $user_m
 */
class TblContrato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblContrato the static model class
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
		return 'tbl_contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contratoN, tipoID, usuarioID, terceroID, empresaID, fecha_c, fecha_m, user_c, user_m', 'required'),
			//array('contratoN, tipoID, usuarioID,  start_date, end_date,terceroID, empresaID, contratanteID', 'required'),
			//array('estadoID, tipoID, usuarioID, terceroID, empresaID, contratanteID, userID, user_c, user_m', 'numerical', 'integerOnly'=>true),
			array('estadoID, tipoID, usuarioID, terceroID,  userID', 'numerical', 'integerOnly'=>true),
			array('contratoN', 'length', 'max'=>45),
			array('shipping_address', 'length', 'max'=>255),
			array('valor', 'length', 'max'=>10),
			array('objeto, start_date, end_date, mod_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, contratoN, estadoID, tipoID, usuarioID, terceroID, empresaID, contratanteID, shipping_address, objeto, start_date, end_date, mod_date, valor, userID, fecha_c, fecha_m, user_c, user_m', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'contratoN' => 'Contrato N',
			'estadoID' => 'Estado',
			'tipoID' => 'Tipo',
			'usuarioID' => 'Usuario',
			'terceroID' => 'Cliente',
			'empresaID' => 'Empresa',
			'contratanteID' => 'Contratante',
			'shipping_address' => 'Shipping Address',
			'objeto' => 'Objeto',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'mod_date' => 'Mod Date',
			'valor' => 'Valor',
			'userID' => 'User',
			'fecha_c' => 'Fecha C',
			'fecha_m' => 'Fecha M',
			'user_c' => 'User C',
			'user_m' => 'User M',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('contratoN',$this->contratoN,true);
		$criteria->compare('estadoID',$this->estadoID);
		$criteria->compare('tipoID',$this->tipoID);
		$criteria->compare('usuarioID',$this->usuarioID);
		$criteria->compare('terceroID',$this->terceroID);
		$criteria->compare('empresaID',$this->empresaID);
		$criteria->compare('contratanteID',$this->contratanteID);
		$criteria->compare('shipping_address',$this->shipping_address,true);
		$criteria->compare('objeto',$this->objeto,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('mod_date',$this->mod_date,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('userID',$this->userID);
		$criteria->compare('fecha_c',$this->fecha_c,true);
		$criteria->compare('fecha_m',$this->fecha_m,true);
		$criteria->compare('user_c',$this->user_c);
		$criteria->compare('user_m',$this->user_m);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}