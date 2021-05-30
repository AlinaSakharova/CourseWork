<?php

/**
 * This is the model class for table "phpbb_migrations".
 *
 * The followings are the available columns in table 'phpbb_migrations':
 * @property string $migration_name
 * @property string $migration_depends_on
 * @property integer $migration_schema_done
 * @property integer $migration_data_done
 * @property string $migration_data_state
 * @property string $migration_start_time
 * @property string $migration_end_time
 */
class PhpbbMigrations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_migrations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('migration_depends_on, migration_data_state', 'required'),
			array('migration_schema_done, migration_data_done', 'numerical', 'integerOnly'=>true),
			array('migration_name', 'length', 'max'=>255),
			array('migration_start_time, migration_end_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('migration_name, migration_depends_on, migration_schema_done, migration_data_done, migration_data_state, migration_start_time, migration_end_time', 'safe', 'on'=>'search'),
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
			'migration_name' => 'Migration Name',
			'migration_depends_on' => 'Migration Depends On',
			'migration_schema_done' => 'Migration Schema Done',
			'migration_data_done' => 'Migration Data Done',
			'migration_data_state' => 'Migration Data State',
			'migration_start_time' => 'Migration Start Time',
			'migration_end_time' => 'Migration End Time',
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

		$criteria->compare('migration_name',$this->migration_name,true);
		$criteria->compare('migration_depends_on',$this->migration_depends_on,true);
		$criteria->compare('migration_schema_done',$this->migration_schema_done);
		$criteria->compare('migration_data_done',$this->migration_data_done);
		$criteria->compare('migration_data_state',$this->migration_data_state,true);
		$criteria->compare('migration_start_time',$this->migration_start_time,true);
		$criteria->compare('migration_end_time',$this->migration_end_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbMigrations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
