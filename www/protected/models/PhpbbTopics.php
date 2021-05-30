<?php

/**
 * This is the model class for table "phpbb_topics".
 *
 * The followings are the available columns in table 'phpbb_topics':
 * @property integer $topic_id
 * @property integer $forum_id
 * @property integer $icon_id
 * @property integer $topic_attachment
 * @property integer $topic_reported
 * @property string $topic_title
 * @property integer $topic_poster
 * @property string $topic_time
 * @property string $topic_time_limit
 * @property integer $topic_views
 * @property integer $topic_status
 * @property integer $topic_type
 * @property integer $topic_first_post_id
 * @property string $topic_first_poster_name
 * @property string $topic_first_poster_colour
 * @property integer $topic_last_post_id
 * @property integer $topic_last_poster_id
 * @property string $topic_last_poster_name
 * @property string $topic_last_poster_colour
 * @property string $topic_last_post_subject
 * @property string $topic_last_post_time
 * @property string $topic_last_view_time
 * @property integer $topic_moved_id
 * @property integer $topic_bumped
 * @property integer $topic_bumper
 * @property string $poll_title
 * @property string $poll_start
 * @property string $poll_length
 * @property integer $poll_max_options
 * @property string $poll_last_vote
 * @property integer $poll_vote_change
 * @property integer $topic_visibility
 * @property string $topic_delete_time
 * @property string $topic_delete_reason
 * @property integer $topic_delete_user
 * @property integer $topic_posts_approved
 * @property integer $topic_posts_unapproved
 * @property integer $topic_posts_softdeleted
 */
class PhpbbTopics extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_topics';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forum_id, icon_id, topic_attachment, topic_reported, topic_poster, topic_views, topic_status, topic_type, topic_first_post_id, topic_last_post_id, topic_last_poster_id, topic_moved_id, topic_bumped, topic_bumper, poll_max_options, poll_vote_change, topic_visibility, topic_delete_user, topic_posts_approved, topic_posts_unapproved, topic_posts_softdeleted', 'numerical', 'integerOnly'=>true),
			array('topic_title, topic_first_poster_name, topic_last_poster_name, topic_last_post_subject, poll_title, topic_delete_reason', 'length', 'max'=>255),
			array('topic_time, topic_time_limit, topic_last_post_time, topic_last_view_time, poll_start, poll_length, poll_last_vote, topic_delete_time', 'length', 'max'=>11),
			array('topic_first_poster_colour, topic_last_poster_colour', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('topic_id, forum_id, icon_id, topic_attachment, topic_reported, topic_title, topic_poster, topic_time, topic_time_limit, topic_views, topic_status, topic_type, topic_first_post_id, topic_first_poster_name, topic_first_poster_colour, topic_last_post_id, topic_last_poster_id, topic_last_poster_name, topic_last_poster_colour, topic_last_post_subject, topic_last_post_time, topic_last_view_time, topic_moved_id, topic_bumped, topic_bumper, poll_title, poll_start, poll_length, poll_max_options, poll_last_vote, poll_vote_change, topic_visibility, topic_delete_time, topic_delete_reason, topic_delete_user, topic_posts_approved, topic_posts_unapproved, topic_posts_softdeleted', 'safe', 'on'=>'search'),
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
			'topic_id' => 'Topic',
			'forum_id' => 'Forum',
			'icon_id' => 'Icon',
			'topic_attachment' => 'Topic Attachment',
			'topic_reported' => 'Topic Reported',
			'topic_title' => 'Topic Title',
			'topic_poster' => 'Topic Poster',
			'topic_time' => 'Topic Time',
			'topic_time_limit' => 'Topic Time Limit',
			'topic_views' => 'Topic Views',
			'topic_status' => 'Topic Status',
			'topic_type' => 'Topic Type',
			'topic_first_post_id' => 'Topic First Post',
			'topic_first_poster_name' => 'Topic First Poster Name',
			'topic_first_poster_colour' => 'Topic First Poster Colour',
			'topic_last_post_id' => 'Topic Last Post',
			'topic_last_poster_id' => 'Topic Last Poster',
			'topic_last_poster_name' => 'Topic Last Poster Name',
			'topic_last_poster_colour' => 'Topic Last Poster Colour',
			'topic_last_post_subject' => 'Topic Last Post Subject',
			'topic_last_post_time' => 'Topic Last Post Time',
			'topic_last_view_time' => 'Topic Last View Time',
			'topic_moved_id' => 'Topic Moved',
			'topic_bumped' => 'Topic Bumped',
			'topic_bumper' => 'Topic Bumper',
			'poll_title' => 'Poll Title',
			'poll_start' => 'Poll Start',
			'poll_length' => 'Poll Length',
			'poll_max_options' => 'Poll Max Options',
			'poll_last_vote' => 'Poll Last Vote',
			'poll_vote_change' => 'Poll Vote Change',
			'topic_visibility' => 'Topic Visibility',
			'topic_delete_time' => 'Topic Delete Time',
			'topic_delete_reason' => 'Topic Delete Reason',
			'topic_delete_user' => 'Topic Delete User',
			'topic_posts_approved' => 'Topic Posts Approved',
			'topic_posts_unapproved' => 'Topic Posts Unapproved',
			'topic_posts_softdeleted' => 'Topic Posts Softdeleted',
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

		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('icon_id',$this->icon_id);
		$criteria->compare('topic_attachment',$this->topic_attachment);
		$criteria->compare('topic_reported',$this->topic_reported);
		$criteria->compare('topic_title',$this->topic_title,true);
		$criteria->compare('topic_poster',$this->topic_poster);
		$criteria->compare('topic_time',$this->topic_time,true);
		$criteria->compare('topic_time_limit',$this->topic_time_limit,true);
		$criteria->compare('topic_views',$this->topic_views);
		$criteria->compare('topic_status',$this->topic_status);
		$criteria->compare('topic_type',$this->topic_type);
		$criteria->compare('topic_first_post_id',$this->topic_first_post_id);
		$criteria->compare('topic_first_poster_name',$this->topic_first_poster_name,true);
		$criteria->compare('topic_first_poster_colour',$this->topic_first_poster_colour,true);
		$criteria->compare('topic_last_post_id',$this->topic_last_post_id);
		$criteria->compare('topic_last_poster_id',$this->topic_last_poster_id);
		$criteria->compare('topic_last_poster_name',$this->topic_last_poster_name,true);
		$criteria->compare('topic_last_poster_colour',$this->topic_last_poster_colour,true);
		$criteria->compare('topic_last_post_subject',$this->topic_last_post_subject,true);
		$criteria->compare('topic_last_post_time',$this->topic_last_post_time,true);
		$criteria->compare('topic_last_view_time',$this->topic_last_view_time,true);
		$criteria->compare('topic_moved_id',$this->topic_moved_id);
		$criteria->compare('topic_bumped',$this->topic_bumped);
		$criteria->compare('topic_bumper',$this->topic_bumper);
		$criteria->compare('poll_title',$this->poll_title,true);
		$criteria->compare('poll_start',$this->poll_start,true);
		$criteria->compare('poll_length',$this->poll_length,true);
		$criteria->compare('poll_max_options',$this->poll_max_options);
		$criteria->compare('poll_last_vote',$this->poll_last_vote,true);
		$criteria->compare('poll_vote_change',$this->poll_vote_change);
		$criteria->compare('topic_visibility',$this->topic_visibility);
		$criteria->compare('topic_delete_time',$this->topic_delete_time,true);
		$criteria->compare('topic_delete_reason',$this->topic_delete_reason,true);
		$criteria->compare('topic_delete_user',$this->topic_delete_user);
		$criteria->compare('topic_posts_approved',$this->topic_posts_approved);
		$criteria->compare('topic_posts_unapproved',$this->topic_posts_unapproved);
		$criteria->compare('topic_posts_softdeleted',$this->topic_posts_softdeleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbTopics the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
