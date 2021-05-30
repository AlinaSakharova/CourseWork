<?php

/**
 * This is the model class for table "phpbb_attachments".
 *
 * The followings are the available columns in table 'phpbb_attachments':
 * @property integer $attach_id
 * @property integer $post_msg_id
 * @property integer $topic_id
 * @property integer $in_message
 * @property integer $poster_id
 * @property integer $is_orphan
 * @property string $physical_filename
 * @property string $real_filename
 * @property integer $download_count
 * @property string $attach_comment
 * @property string $extension
 * @property string $mimetype
 * @property string $filesize
 * @property string $filetime
 * @property integer $thumbnail
 */
class PhpbbAttachments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_attachments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attach_comment', 'required'),
			array('post_msg_id, topic_id, in_message, poster_id, is_orphan, download_count, thumbnail', 'numerical', 'integerOnly'=>true),
			array('physical_filename, real_filename', 'length', 'max'=>255),
			array('extension, mimetype', 'length', 'max'=>100),
			array('filesize', 'length', 'max'=>20),
			array('filetime', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attach_id, post_msg_id, topic_id, in_message, poster_id, is_orphan, physical_filename, real_filename, download_count, attach_comment, extension, mimetype, filesize, filetime, thumbnail', 'safe', 'on'=>'search'),
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
			'attach_id' => 'Attach',
			'post_msg_id' => 'Post Msg',
			'topic_id' => 'Topic',
			'in_message' => 'In Message',
			'poster_id' => 'Poster',
			'is_orphan' => 'Is Orphan',
			'physical_filename' => 'Physical Filename',
			'real_filename' => 'Real Filename',
			'download_count' => 'Download Count',
			'attach_comment' => 'Attach Comment',
			'extension' => 'Extension',
			'mimetype' => 'Mimetype',
			'filesize' => 'Filesize',
			'filetime' => 'Filetime',
			'thumbnail' => 'Thumbnail',
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

		$criteria->compare('attach_id',$this->attach_id);
		$criteria->compare('post_msg_id',$this->post_msg_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('in_message',$this->in_message);
		$criteria->compare('poster_id',$this->poster_id);
		$criteria->compare('is_orphan',$this->is_orphan);
		$criteria->compare('physical_filename',$this->physical_filename,true);
		$criteria->compare('real_filename',$this->real_filename,true);
		$criteria->compare('download_count',$this->download_count);
		$criteria->compare('attach_comment',$this->attach_comment,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('mimetype',$this->mimetype,true);
		$criteria->compare('filesize',$this->filesize,true);
		$criteria->compare('filetime',$this->filetime,true);
		$criteria->compare('thumbnail',$this->thumbnail);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbAttachments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
