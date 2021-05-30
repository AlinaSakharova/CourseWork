<?php

/**
 * This is the model class for table "phpbb_users".
 *
 * The followings are the available columns in table 'phpbb_users':
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $group_id
 * @property string $user_permissions
 * @property integer $user_perm_from
 * @property string $user_ip
 * @property string $user_regdate
 * @property string $username
 * @property string $username_clean
 * @property string $user_password
 * @property string $user_passchg
 * @property string $user_email
 * @property string $user_email_hash
 * @property string $user_birthday
 * @property string $user_lastvisit
 * @property string $user_lastmark
 * @property string $user_lastpost_time
 * @property string $user_lastpage
 * @property string $user_last_confirm_key
 * @property string $user_last_search
 * @property integer $user_warnings
 * @property string $user_last_warning
 * @property integer $user_login_attempts
 * @property integer $user_inactive_reason
 * @property string $user_inactive_time
 * @property integer $user_posts
 * @property string $user_lang
 * @property string $user_timezone
 * @property string $user_dateformat
 * @property integer $user_style
 * @property integer $user_rank
 * @property string $user_colour
 * @property integer $user_new_privmsg
 * @property integer $user_unread_privmsg
 * @property string $user_last_privmsg
 * @property integer $user_message_rules
 * @property integer $user_full_folder
 * @property string $user_emailtime
 * @property integer $user_topic_show_days
 * @property string $user_topic_sortby_type
 * @property string $user_topic_sortby_dir
 * @property integer $user_post_show_days
 * @property string $user_post_sortby_type
 * @property string $user_post_sortby_dir
 * @property integer $user_notify
 * @property integer $user_notify_pm
 * @property integer $user_notify_type
 * @property integer $user_allow_pm
 * @property integer $user_allow_viewonline
 * @property integer $user_allow_viewemail
 * @property integer $user_allow_massemail
 * @property string $user_options
 * @property string $user_avatar
 * @property string $user_avatar_type
 * @property integer $user_avatar_width
 * @property integer $user_avatar_height
 * @property string $user_sig
 * @property string $user_sig_bbcode_uid
 * @property string $user_sig_bbcode_bitfield
 * @property string $user_jabber
 * @property string $user_actkey
 * @property string $user_newpasswd
 * @property string $user_form_salt
 * @property integer $user_new
 * @property integer $user_reminded
 * @property string $user_reminded_time
 */
class PhpbbUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_permissions, user_sig', 'required'),
			array('user_type, group_id, user_perm_from, user_warnings, user_login_attempts, user_inactive_reason, user_posts, user_style, user_rank, user_new_privmsg, user_unread_privmsg, user_message_rules, user_full_folder, user_topic_show_days, user_post_show_days, user_notify, user_notify_pm, user_notify_type, user_allow_pm, user_allow_viewonline, user_allow_viewemail, user_allow_massemail, user_avatar_width, user_avatar_height, user_new, user_reminded', 'numerical', 'integerOnly'=>true),
			array('user_ip', 'length', 'max'=>40),
			array('user_regdate, user_passchg, user_lastvisit, user_lastmark, user_lastpost_time, user_last_search, user_last_warning, user_inactive_time, user_last_privmsg, user_emailtime, user_options, user_reminded_time', 'length', 'max'=>11),
			array('username, username_clean, user_password, user_avatar, user_avatar_type, user_sig_bbcode_bitfield, user_jabber, user_newpasswd', 'length', 'max'=>255),
			array('user_email, user_timezone', 'length', 'max'=>100),
			array('user_email_hash', 'length', 'max'=>20),
			array('user_birthday, user_last_confirm_key', 'length', 'max'=>10),
			array('user_lastpage', 'length', 'max'=>200),
			array('user_lang', 'length', 'max'=>30),
			array('user_dateformat', 'length', 'max'=>64),
			array('user_colour', 'length', 'max'=>6),
			array('user_topic_sortby_type, user_topic_sortby_dir, user_post_sortby_type, user_post_sortby_dir', 'length', 'max'=>1),
			array('user_sig_bbcode_uid', 'length', 'max'=>8),
			array('user_actkey, user_form_salt', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_type, group_id, user_permissions, user_perm_from, user_ip, user_regdate, username, username_clean, user_password, user_passchg, user_email, user_email_hash, user_birthday, user_lastvisit, user_lastmark, user_lastpost_time, user_lastpage, user_last_confirm_key, user_last_search, user_warnings, user_last_warning, user_login_attempts, user_inactive_reason, user_inactive_time, user_posts, user_lang, user_timezone, user_dateformat, user_style, user_rank, user_colour, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_message_rules, user_full_folder, user_emailtime, user_topic_show_days, user_topic_sortby_type, user_topic_sortby_dir, user_post_show_days, user_post_sortby_type, user_post_sortby_dir, user_notify, user_notify_pm, user_notify_type, user_allow_pm, user_allow_viewonline, user_allow_viewemail, user_allow_massemail, user_options, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height, user_sig, user_sig_bbcode_uid, user_sig_bbcode_bitfield, user_jabber, user_actkey, user_newpasswd, user_form_salt, user_new, user_reminded, user_reminded_time', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_type' => 'User Type',
			'group_id' => 'Group',
			'user_permissions' => 'User Permissions',
			'user_perm_from' => 'User Perm From',
			'user_ip' => 'User Ip',
			'user_regdate' => 'User Regdate',
			'username' => 'Username',
			'username_clean' => 'Username Clean',
			'user_password' => 'User Password',
			'user_passchg' => 'User Passchg',
			'user_email' => 'User Email',
			'user_email_hash' => 'User Email Hash',
			'user_birthday' => 'User Birthday',
			'user_lastvisit' => 'User Lastvisit',
			'user_lastmark' => 'User Lastmark',
			'user_lastpost_time' => 'User Lastpost Time',
			'user_lastpage' => 'User Lastpage',
			'user_last_confirm_key' => 'User Last Confirm Key',
			'user_last_search' => 'User Last Search',
			'user_warnings' => 'User Warnings',
			'user_last_warning' => 'User Last Warning',
			'user_login_attempts' => 'User Login Attempts',
			'user_inactive_reason' => 'User Inactive Reason',
			'user_inactive_time' => 'User Inactive Time',
			'user_posts' => 'User Posts',
			'user_lang' => 'User Lang',
			'user_timezone' => 'User Timezone',
			'user_dateformat' => 'User Dateformat',
			'user_style' => 'User Style',
			'user_rank' => 'User Rank',
			'user_colour' => 'User Colour',
			'user_new_privmsg' => 'User New Privmsg',
			'user_unread_privmsg' => 'User Unread Privmsg',
			'user_last_privmsg' => 'User Last Privmsg',
			'user_message_rules' => 'User Message Rules',
			'user_full_folder' => 'User Full Folder',
			'user_emailtime' => 'User Emailtime',
			'user_topic_show_days' => 'User Topic Show Days',
			'user_topic_sortby_type' => 'User Topic Sortby Type',
			'user_topic_sortby_dir' => 'User Topic Sortby Dir',
			'user_post_show_days' => 'User Post Show Days',
			'user_post_sortby_type' => 'User Post Sortby Type',
			'user_post_sortby_dir' => 'User Post Sortby Dir',
			'user_notify' => 'User Notify',
			'user_notify_pm' => 'User Notify Pm',
			'user_notify_type' => 'User Notify Type',
			'user_allow_pm' => 'User Allow Pm',
			'user_allow_viewonline' => 'User Allow Viewonline',
			'user_allow_viewemail' => 'User Allow Viewemail',
			'user_allow_massemail' => 'User Allow Massemail',
			'user_options' => 'User Options',
			'user_avatar' => 'User Avatar',
			'user_avatar_type' => 'User Avatar Type',
			'user_avatar_width' => 'User Avatar Width',
			'user_avatar_height' => 'User Avatar Height',
			'user_sig' => 'User Sig',
			'user_sig_bbcode_uid' => 'User Sig Bbcode Uid',
			'user_sig_bbcode_bitfield' => 'User Sig Bbcode Bitfield',
			'user_jabber' => 'User Jabber',
			'user_actkey' => 'User Actkey',
			'user_newpasswd' => 'User Newpasswd',
			'user_form_salt' => 'User Form Salt',
			'user_new' => 'User New',
			'user_reminded' => 'User Reminded',
			'user_reminded_time' => 'User Reminded Time',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_type',$this->user_type);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('user_permissions',$this->user_permissions,true);
		$criteria->compare('user_perm_from',$this->user_perm_from);
		$criteria->compare('user_ip',$this->user_ip,true);
		$criteria->compare('user_regdate',$this->user_regdate,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('username_clean',$this->username_clean,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_passchg',$this->user_passchg,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_email_hash',$this->user_email_hash,true);
		$criteria->compare('user_birthday',$this->user_birthday,true);
		$criteria->compare('user_lastvisit',$this->user_lastvisit,true);
		$criteria->compare('user_lastmark',$this->user_lastmark,true);
		$criteria->compare('user_lastpost_time',$this->user_lastpost_time,true);
		$criteria->compare('user_lastpage',$this->user_lastpage,true);
		$criteria->compare('user_last_confirm_key',$this->user_last_confirm_key,true);
		$criteria->compare('user_last_search',$this->user_last_search,true);
		$criteria->compare('user_warnings',$this->user_warnings);
		$criteria->compare('user_last_warning',$this->user_last_warning,true);
		$criteria->compare('user_login_attempts',$this->user_login_attempts);
		$criteria->compare('user_inactive_reason',$this->user_inactive_reason);
		$criteria->compare('user_inactive_time',$this->user_inactive_time,true);
		$criteria->compare('user_posts',$this->user_posts);
		$criteria->compare('user_lang',$this->user_lang,true);
		$criteria->compare('user_timezone',$this->user_timezone,true);
		$criteria->compare('user_dateformat',$this->user_dateformat,true);
		$criteria->compare('user_style',$this->user_style);
		$criteria->compare('user_rank',$this->user_rank);
		$criteria->compare('user_colour',$this->user_colour,true);
		$criteria->compare('user_new_privmsg',$this->user_new_privmsg);
		$criteria->compare('user_unread_privmsg',$this->user_unread_privmsg);
		$criteria->compare('user_last_privmsg',$this->user_last_privmsg,true);
		$criteria->compare('user_message_rules',$this->user_message_rules);
		$criteria->compare('user_full_folder',$this->user_full_folder);
		$criteria->compare('user_emailtime',$this->user_emailtime,true);
		$criteria->compare('user_topic_show_days',$this->user_topic_show_days);
		$criteria->compare('user_topic_sortby_type',$this->user_topic_sortby_type,true);
		$criteria->compare('user_topic_sortby_dir',$this->user_topic_sortby_dir,true);
		$criteria->compare('user_post_show_days',$this->user_post_show_days);
		$criteria->compare('user_post_sortby_type',$this->user_post_sortby_type,true);
		$criteria->compare('user_post_sortby_dir',$this->user_post_sortby_dir,true);
		$criteria->compare('user_notify',$this->user_notify);
		$criteria->compare('user_notify_pm',$this->user_notify_pm);
		$criteria->compare('user_notify_type',$this->user_notify_type);
		$criteria->compare('user_allow_pm',$this->user_allow_pm);
		$criteria->compare('user_allow_viewonline',$this->user_allow_viewonline);
		$criteria->compare('user_allow_viewemail',$this->user_allow_viewemail);
		$criteria->compare('user_allow_massemail',$this->user_allow_massemail);
		$criteria->compare('user_options',$this->user_options,true);
		$criteria->compare('user_avatar',$this->user_avatar,true);
		$criteria->compare('user_avatar_type',$this->user_avatar_type,true);
		$criteria->compare('user_avatar_width',$this->user_avatar_width);
		$criteria->compare('user_avatar_height',$this->user_avatar_height);
		$criteria->compare('user_sig',$this->user_sig,true);
		$criteria->compare('user_sig_bbcode_uid',$this->user_sig_bbcode_uid,true);
		$criteria->compare('user_sig_bbcode_bitfield',$this->user_sig_bbcode_bitfield,true);
		$criteria->compare('user_jabber',$this->user_jabber,true);
		$criteria->compare('user_actkey',$this->user_actkey,true);
		$criteria->compare('user_newpasswd',$this->user_newpasswd,true);
		$criteria->compare('user_form_salt',$this->user_form_salt,true);
		$criteria->compare('user_new',$this->user_new);
		$criteria->compare('user_reminded',$this->user_reminded);
		$criteria->compare('user_reminded_time',$this->user_reminded_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
