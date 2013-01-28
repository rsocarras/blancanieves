<?php

/**
 * This is the model class for table "tbl_documentos".
 *
 * The followings are the available columns in table 'tbl_documentos':
 * @property string $id
 * @property integer $id_contrato
 * @property string $descripcion
 * @property string $contenido
 * @property string $tamanio
 * @property string $tipo
 * @property string $nombre_archivo
 * @property string $tamanio_unidad
 */
class TblDocumentos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblDocumentos the static model class
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
		return 'tbl_documentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_contrato', 'numerical', 'integerOnly'=>true),
			array('tamanio', 'length', 'max'=>10),
			array('tipo, tamanio_unidad', 'length', 'max'=>50),
			array('nombre_archivo', 'length', 'max'=>55),
			array('descripcion, contenido', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_contrato, descripcion, contenido, tamanio, tipo, nombre_archivo, tamanio_unidad', 'safe', 'on'=>'search'),
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
			'id_contrato' => 'Id Contrato',
			'descripcion' => 'Descripcion',
			'contenido' => 'Contenido',
			'tamanio' => 'Tamanio',
			'tipo' => 'Tipo',
			'nombre_archivo' => 'Nombre Archivo',
			'tamanio_unidad' => 'Tamanio Unidad',
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
		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('tamanio',$this->tamanio,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('nombre_archivo',$this->nombre_archivo,true);
		$criteria->compare('tamanio_unidad',$this->tamanio_unidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}