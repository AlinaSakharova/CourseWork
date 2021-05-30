<?
class ContactTestForm extends CFormModel {
	public $name;
	public $subject; 
	public $email;
	public $city;
	public $phone;
	public $body;
	public $verifyCode;
	
	
	public function rules(){
		
		return array(
		 array('name,subject,email,phone,city,body','required'),
		 array('email', 'email'),
		 array('name', 'safe'),
		 array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()) 
	);
}

    public function attributeLabels(){
		
		return array(
		 'name' => 'Имя',
		 'email' => 'Email',
		 'phone' => 'Телефон',
		 'city' => 'Город',
		 'subject' => 'Категория',
		 'body' => 'Опишите проблему или задайте вопрос'
		);
	}
}