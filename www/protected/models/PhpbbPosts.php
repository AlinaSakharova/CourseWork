<?php

/**
 * This is the model class for table "phpbb_posts".
 *
 * The followings are the available columns in table 'phpbb_posts':
 * @property integer $post_id
 * @property integer $topic_id
 * @property integer $forum_id
 * @property integer $poster_id
 * @property integer $icon_id
 * @property string $poster_ip
 * @property string $post_time
 * @property integer $post_reported
 * @property integer $enable_bbcode
 * @property integer $enable_smilies
 * @property integer $enable_magic_url
 * @property integer $enable_sig
 * @property string $post_username
 * @property string $post_subject
 * @property string $post_text
 * @property string $post_checksum
 * @property integer $post_attachment
 * @property string $bbcode_bitfield
 * @property string $bbcode_uid
 * @property integer $post_postcount
 * @property string $post_edit_time
 * @property string $post_edit_reason
 * @property integer $post_edit_user
 * @property integer $post_edit_count
 * @property integer $post_edit_locked
 * @property integer $post_visibility
 * @property string $post_delete_time
 * @property string $post_delete_reason
 * @property integer $post_delete_user
 */
class PhpbbPosts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('post_text', 'required'),
			array('topic_id, forum_id, poster_id, icon_id, post_reported, enable_bbcode, enable_smilies, enable_magic_url, enable_sig, post_attachment, post_postcount, post_edit_user, post_edit_count, post_edit_locked, post_visibility, post_delete_user', 'numerical', 'integerOnly'=>true),
			array('poster_ip', 'length', 'max'=>40),
			array('post_time, post_edit_time, post_delete_time', 'length', 'max'=>11),
			array('post_username, post_subject, bbcode_bitfield, post_edit_reason, post_delete_reason', 'length', 'max'=>255),
			array('post_checksum', 'length', 'max'=>32),
			array('bbcode_uid', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('post_id, topic_id, forum_id, poster_id, icon_id, poster_ip, post_time, post_reported, enable_bbcode, enable_smilies, enable_magic_url, enable_sig, post_username, post_subject, post_text, post_checksum, post_attachment, bbcode_bitfield, bbcode_uid, post_postcount, post_edit_time, post_edit_reason, post_edit_user, post_edit_count, post_edit_locked, post_visibility, post_delete_time, post_delete_reason, post_delete_user', 'safe', 'on'=>'search'),
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
			'post_id' => 'Post',
			'topic_id' => 'Topic',
			'forum_id' => 'Forum',
			'poster_id' => 'Poster',
			'icon_id' => 'Icon',
			'poster_ip' => 'Poster Ip',
			'post_time' => 'Post Time',
			'post_reported' => 'Post Reported',
			'enable_bbcode' => 'Enable Bbcode',
			'enable_smilies' => 'Enable Smilies',
			'enable_magic_url' => 'Enable Magic Url',
			'enable_sig' => 'Enable Sig',
			'post_username' => 'Post Username',
			'post_subject' => 'Post Subject',
			'post_text' => 'Post Text',
			'post_checksum' => 'Post Checksum',
			'post_attachment' => 'Post Attachment',
			'bbcode_bitfield' => 'Bbcode Bitfield',
			'bbcode_uid' => 'Bbcode Uid',
			'post_postcount' => 'Post Postcount',
			'post_edit_time' => 'Post Edit Time',
			'post_edit_reason' => 'Post Edit Reason',
			'post_edit_user' => 'Post Edit User',
			'post_edit_count' => 'Post Edit Count',
			'post_edit_locked' => 'Post Edit Locked',
			'post_visibility' => 'Post Visibility',
			'post_delete_time' => 'Post Delete Time',
			'post_delete_reason' => 'Post Delete Reason',
			'post_delete_user' => 'Post Delete User',
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

		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('poster_id',$this->poster_id);
		$criteria->compare('icon_id',$this->icon_id);
		$criteria->compare('poster_ip',$this->poster_ip,true);
		$criteria->compare('post_time',$this->post_time,true);
		$criteria->compare('post_reported',$this->post_reported);
		$criteria->compare('enable_bbcode',$this->enable_bbcode);
		$criteria->compare('enable_smilies',$this->enable_smilies);
		$criteria->compare('enable_magic_url',$this->enable_magic_url);
		$criteria->compare('enable_sig',$this->enable_sig);
		$criteria->compare('post_username',$this->post_username,true);
		$criteria->compare('post_subject',$this->post_subject,true);
		$criteria->compare('post_text',$this->post_text,true);
		$criteria->compare('post_checksum',$this->post_checksum,true);
		$criteria->compare('post_attachment',$this->post_attachment);
		$criteria->compare('bbcode_bitfield',$this->bbcode_bitfield,true);
		$criteria->compare('bbcode_uid',$this->bbcode_uid,true);
		$criteria->compare('post_postcount',$this->post_postcount);
		$criteria->compare('post_edit_time',$this->post_edit_time,true);
		$criteria->compare('post_edit_reason',$this->post_edit_reason,true);
		$criteria->compare('post_edit_user',$this->post_edit_user);
		$criteria->compare('post_edit_count',$this->post_edit_count);
		$criteria->compare('post_edit_locked',$this->post_edit_locked);
		$criteria->compare('post_visibility',$this->post_visibility);
		$criteria->compare('post_delete_time',$this->post_delete_time,true);
		$criteria->compare('post_delete_reason',$this->post_delete_reason,true);
		$criteria->compare('post_delete_user',$this->post_delete_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPosts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
