<?php

/**
 * This is the model class for table "phpbb_privmsgs_to".
 *
 * The followings are the available columns in table 'phpbb_privmsgs_to':
 * @property integer $msg_id
 * @property integer $user_id
 * @property integer $author_id
 * @property integer $pm_deleted
 * @property integer $pm_new
 * @property integer $pm_unread
 * @property integer $pm_replied
 * @property integer $pm_marked
 * @property integer $pm_forwarded
 * @property integer $folder_id
 */
class PhpbbPrivmsgsTo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_privmsgs_to';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('msg_id, user_id, author_id, pm_deleted, pm_new, pm_unread, pm_replied, pm_marked, pm_forwarded, folder_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('msg_id, user_id, author_id, pm_deleted, pm_new, pm_unread, pm_replied, pm_marked, pm_forwarded, folder_id', 'safe', 'on'=>'search'),
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
			'msg_id' => 'Msg',
			'user_id' => 'User',
			'author_id' => 'Author',
			'pm_deleted' => 'Pm Deleted',
			'pm_new' => 'Pm New',
			'pm_unread' => 'Pm Unread',
			'pm_replied' => 'Pm Replied',
			'pm_marked' => 'Pm Marked',
			'pm_forwarded' => 'Pm Forwarded',
			'folder_id' => 'Folder',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('msg_id',$this->msg_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('pm_deleted',$this->pm_deleted);
		$criteria->compare('pm_new',$this->pm_new);
		$criteria->compare('pm_unread',$this->pm_unread);
		$criteria->compare('pm_replied',$this->pm_replied);
		$criteria->compare('pm_marked',$this->pm_marked);
		$criteria->compare('pm_forwarded',$this->pm_forwarded);
		$criteria->compare('folder_id',$this->folder_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPrivmsgsTo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
