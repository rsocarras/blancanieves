<?php

/**
 * This is the model class for table "tbl_countries".
 *
 * The followings are the available columns in table 'tbl_countries':
 * @property integer $id
 * @property string $country
 * @property string $iso2
 * @property string $iso3
 * @property string $noc
 */
class Countries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Countries the static model class
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
		return 'tbl_countries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country', 'length', 'max'=>50),
			array('iso2', 'length', 'max'=>2),
			array('iso3, noc', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, country, iso2, iso3, noc', 'safe', 'on'=>'search'),
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
			'country' => 'Country',
			'iso2' => 'Iso2',
			'iso3' => 'Iso3',
			'noc' => 'Noc',
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
		$criteria->compare('country',$this->country,true);
		$criteria->compare('iso2',$this->iso2,true);
		$criteria->compare('iso3',$this->iso3,true);
		$criteria->compare('noc',$this->noc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}