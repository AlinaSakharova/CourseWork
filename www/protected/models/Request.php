<?php

/**
 * This is the model class for table "request".
 *
 * The followings are the available columns in table 'request':
 * @property integer $IDrequest
 * @property string $name
 * @property integer $id_category
 * @property string $body
 * @property string $city
 * @property string $email
 * @property string $phone
**/
class Request extends CActiveRecord
{
	
	public $verifyCode;

	public function tableName()
	{
		return 'db_request';
	}

	public function rules()
	{
		return array(
			array('name, id_category, body, email, phone, city', 'required'),
			array('id_category', 'numerical', 'integerOnly'=>true),
			array('name, subject', 'length', 'max'=>50),
			array('phone', 'match', 'pattern'=>'/^(8)(\d{3})(\d{3})(\d{2})(\d{2})/', 'message' => 'Номер телефона должен начинаться с "8", состоять из 11 цифр, введен без пробелов'),
			array('email', 'length', 'max'=>20),
			array('email', 'email'),
			array('phone', 'length', 'max'=>11),
			array('body', 'length', 'max'=>2000),
			array('id, name, id_category, body, city, email, phone', 'safe', 'on'=>'search'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()) 
		);
	}

	public function relations()
	{
		return array(
			'idCategory' => array(self::BELONGS_TO, 'CategoryReq', 'id_category'),
			'userRequests' => array(self::HAS_MANY, 'UserRequest', 'id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'id_category' => 'Категория',
			'verifyCode' => 'Код',
			'name' => 'Как к вам обращаться',
			'email' => 'E-mail',
			'phone' => 'Телефон',
			'city' => 'Город',
			'body' => 'Опишите проблему или задайте вопрос'
		);
	}


	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
