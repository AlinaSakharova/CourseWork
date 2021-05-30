<?php

/**
 * This is the model class for table "phpbb_forums".
 *
 * The followings are the available columns in table 'phpbb_forums':
 * @property integer $forum_id
 * @property integer $parent_id
 * @property integer $left_id
 * @property integer $right_id
 * @property string $forum_parents
 * @property string $forum_name
 * @property string $forum_desc
 * @property string $forum_desc_bitfield
 * @property string $forum_desc_options
 * @property string $forum_desc_uid
 * @property string $forum_link
 * @property string $forum_password
 * @property integer $forum_style
 * @property string $forum_image
 * @property string $forum_rules
 * @property string $forum_rules_link
 * @property string $forum_rules_bitfield
 * @property string $forum_rules_options
 * @property string $forum_rules_uid
 * @property integer $forum_topics_per_page
 * @property integer $forum_type
 * @property integer $forum_status
 * @property integer $forum_last_post_id
 * @property integer $forum_last_poster_id
 * @property string $forum_last_post_subject
 * @property string $forum_last_post_time
 * @property string $forum_last_poster_name
 * @property string $forum_last_poster_colour
 * @property integer $forum_flags
 * @property integer $display_on_index
 * @property integer $enable_indexing
 * @property integer $enable_icons
 * @property integer $enable_prune
 * @property string $prune_next
 * @property integer $prune_days
 * @property integer $prune_viewed
 * @property integer $prune_freq
 * @property integer $display_subforum_list
 * @property string $forum_options
 * @property integer $enable_shadow_prune
 * @property integer $prune_shadow_days
 * @property integer $prune_shadow_freq
 * @property integer $prune_shadow_next
 * @property integer $forum_posts_approved
 * @property integer $forum_posts_unapproved
 * @property integer $forum_posts_softdeleted
 * @property integer $forum_topics_approved
 * @property integer $forum_topics_unapproved
 * @property integer $forum_topics_softdeleted
 */
class PhpbbForums extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_forums';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forum_parents, forum_desc, forum_rules', 'required'),
			array('parent_id, left_id, right_id, forum_style, forum_topics_per_page, forum_type, forum_status, forum_last_post_id, forum_last_poster_id, forum_flags, display_on_index, enable_indexing, enable_icons, enable_prune, prune_days, prune_viewed, prune_freq, display_subforum_list, enable_shadow_prune, prune_shadow_days, prune_shadow_freq, prune_shadow_next, forum_posts_approved, forum_posts_unapproved, forum_posts_softdeleted, forum_topics_approved, forum_topics_unapproved, forum_topics_softdeleted', 'numerical', 'integerOnly'=>true),
			array('forum_name, forum_desc_bitfield, forum_link, forum_password, forum_image, forum_rules_link, forum_rules_bitfield, forum_last_post_subject, forum_last_poster_name', 'length', 'max'=>255),
			array('forum_desc_options, forum_rules_options, forum_last_post_time, prune_next', 'length', 'max'=>11),
			array('forum_desc_uid, forum_rules_uid', 'length', 'max'=>8),
			array('forum_last_poster_colour', 'length', 'max'=>6),
			array('forum_options', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('forum_id, parent_id, left_id, right_id, forum_parents, forum_name, forum_desc, forum_desc_bitfield, forum_desc_options, forum_desc_uid, forum_link, forum_password, forum_style, forum_image, forum_rules, forum_rules_link, forum_rules_bitfield, forum_rules_options, forum_rules_uid, forum_topics_per_page, forum_type, forum_status, forum_last_post_id, forum_last_poster_id, forum_last_post_subject, forum_last_post_time, forum_last_poster_name, forum_last_poster_colour, forum_flags, display_on_index, enable_indexing, enable_icons, enable_prune, prune_next, prune_days, prune_viewed, prune_freq, display_subforum_list, forum_options, enable_shadow_prune, prune_shadow_days, prune_shadow_freq, prune_shadow_next, forum_posts_approved, forum_posts_unapproved, forum_posts_softdeleted, forum_topics_approved, forum_topics_unapproved, forum_topics_softdeleted', 'safe', 'on'=>'search'),
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
			'forum_id' => 'Forum',
			'parent_id' => 'Parent',
			'left_id' => 'Left',
			'right_id' => 'Right',
			'forum_parents' => 'Forum Parents',
			'forum_name' => 'Forum Name',
			'forum_desc' => 'Forum Desc',
			'forum_desc_bitfield' => 'Forum Desc Bitfield',
			'forum_desc_options' => 'Forum Desc Options',
			'forum_desc_uid' => 'Forum Desc Uid',
			'forum_link' => 'Forum Link',
			'forum_password' => 'Forum Password',
			'forum_style' => 'Forum Style',
			'forum_image' => 'Forum Image',
			'forum_rules' => 'Forum Rules',
			'forum_rules_link' => 'Forum Rules Link',
			'forum_rules_bitfield' => 'Forum Rules Bitfield',
			'forum_rules_options' => 'Forum Rules Options',
			'forum_rules_uid' => 'Forum Rules Uid',
			'forum_topics_per_page' => 'Forum Topics Per Page',
			'forum_type' => 'Forum Type',
			'forum_status' => 'Forum Status',
			'forum_last_post_id' => 'Forum Last Post',
			'forum_last_poster_id' => 'Forum Last Poster',
			'forum_last_post_subject' => 'Forum Last Post Subject',
			'forum_last_post_time' => 'Forum Last Post Time',
			'forum_last_poster_name' => 'Forum Last Poster Name',
			'forum_last_poster_colour' => 'Forum Last Poster Colour',
			'forum_flags' => 'Forum Flags',
			'display_on_index' => 'Display On Index',
			'enable_indexing' => 'Enable Indexing',
			'enable_icons' => 'Enable Icons',
			'enable_prune' => 'Enable Prune',
			'prune_next' => 'Prune Next',
			'prune_days' => 'Prune Days',
			'prune_viewed' => 'Prune Viewed',
			'prune_freq' => 'Prune Freq',
			'display_subforum_list' => 'Display Subforum List',
			'forum_options' => 'Forum Options',
			'enable_shadow_prune' => 'Enable Shadow Prune',
			'prune_shadow_days' => 'Prune Shadow Days',
			'prune_shadow_freq' => 'Prune Shadow Freq',
			'prune_shadow_next' => 'Prune Shadow Next',
			'forum_posts_approved' => 'Forum Posts Approved',
			'forum_posts_unapproved' => 'Forum Posts Unapproved',
			'forum_posts_softdeleted' => 'Forum Posts Softdeleted',
			'forum_topics_approved' => 'Forum Topics Approved',
			'forum_topics_unapproved' => 'Forum Topics Unapproved',
			'forum_topics_softdeleted' => 'Forum Topics Softdeleted',
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

		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('left_id',$this->left_id);
		$criteria->compare('right_id',$this->right_id);
		$criteria->compare('forum_parents',$this->forum_parents,true);
		$criteria->compare('forum_name',$this->forum_name,true);
		$criteria->compare('forum_desc',$this->forum_desc,true);
		$criteria->compare('forum_desc_bitfield',$this->forum_desc_bitfield,true);
		$criteria->compare('forum_desc_options',$this->forum_desc_options,true);
		$criteria->compare('forum_desc_uid',$this->forum_desc_uid,true);
		$criteria->compare('forum_link',$this->forum_link,true);
		$criteria->compare('forum_password',$this->forum_password,true);
		$criteria->compare('forum_style',$this->forum_style);
		$criteria->compare('forum_image',$this->forum_image,true);
		$criteria->compare('forum_rules',$this->forum_rules,true);
		$criteria->compare('forum_rules_link',$this->forum_rules_link,true);
		$criteria->compare('forum_rules_bitfield',$this->forum_rules_bitfield,true);
		$criteria->compare('forum_rules_options',$this->forum_rules_options,true);
		$criteria->compare('forum_rules_uid',$this->forum_rules_uid,true);
		$criteria->compare('forum_topics_per_page',$this->forum_topics_per_page);
		$criteria->compare('forum_type',$this->forum_type);
		$criteria->compare('forum_status',$this->forum_status);
		$criteria->compare('forum_last_post_id',$this->forum_last_post_id);
		$criteria->compare('forum_last_poster_id',$this->forum_last_poster_id);
		$criteria->compare('forum_last_post_subject',$this->forum_last_post_subject,true);
		$criteria->compare('forum_last_post_time',$this->forum_last_post_time,true);
		$criteria->compare('forum_last_poster_name',$this->forum_last_poster_name,true);
		$criteria->compare('forum_last_poster_colour',$this->forum_last_poster_colour,true);
		$criteria->compare('forum_flags',$this->forum_flags);
		$criteria->compare('display_on_index',$this->display_on_index);
		$criteria->compare('enable_indexing',$this->enable_indexing);
		$criteria->compare('enable_icons',$this->enable_icons);
		$criteria->compare('enable_prune',$this->enable_prune);
		$criteria->compare('prune_next',$this->prune_next,true);
		$criteria->compare('prune_days',$this->prune_days);
		$criteria->compare('prune_viewed',$this->prune_viewed);
		$criteria->compare('prune_freq',$this->prune_freq);
		$criteria->compare('display_subforum_list',$this->display_subforum_list);
		$criteria->compare('forum_options',$this->forum_options,true);
		$criteria->compare('enable_shadow_prune',$this->enable_shadow_prune);
		$criteria->compare('prune_shadow_days',$this->prune_shadow_days);
		$criteria->compare('prune_shadow_freq',$this->prune_shadow_freq);
		$criteria->compare('prune_shadow_next',$this->prune_shadow_next);
		$criteria->compare('forum_posts_approved',$this->forum_posts_approved);
		$criteria->compare('forum_posts_unapproved',$this->forum_posts_unapproved);
		$criteria->compare('forum_posts_softdeleted',$this->forum_posts_softdeleted);
		$criteria->compare('forum_topics_approved',$this->forum_topics_approved);
		$criteria->compare('forum_topics_unapproved',$this->forum_topics_unapproved);
		$criteria->compare('forum_topics_softdeleted',$this->forum_topics_softdeleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbForums the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
