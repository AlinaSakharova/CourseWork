<?php

/**
 * This is the model class for table "phpbb_styles".
 *
 * The followings are the available columns in table 'phpbb_styles':
 * @property integer $style_id
 * @property string $style_name
 * @property string $style_copyright
 * @property integer $style_active
 * @property string $style_path
 * @property string $bbcode_bitfield
 * @property string $style_parent_id
 * @property string $style_parent_tree
 */
class PhpbbStyles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_styles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('style_parent_tree', 'required'),
			array('style_active', 'numerical', 'integerOnly'=>true),
			array('style_name, style_copyright, bbcode_bitfield', 'length', 'max'=>255),
			array('style_path', 'length', 'max'=>100),
			array('style_parent_id', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('style_id, style_name, style_copyright, style_active, style_path, bbcode_bitfield, style_parent_id, style_parent_tree', 'safe', 'on'=>'search'),
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
			'style_id' => 'Style',
			'style_name' => 'Style Name',
			'style_copyright' => 'Style Copyright',
			'style_active' => 'Style Active',
			'style_path' => 'Style Path',
			'bbcode_bitfield' => 'Bbcode Bitfield',
			'style_parent_id' => 'Style Parent',
			'style_parent_tree' => 'Style Parent Tree',
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

		$criteria->compare('style_id',$this->style_id);
		$criteria->compare('style_name',$this->style_name,true);
		$criteria->compare('style_copyright',$this->style_copyright,true);
		$criteria->compare('style_active',$this->style_active);
		$criteria->compare('style_path',$this->style_path,true);
		$criteria->compare('bbcode_bitfield',$this->bbcode_bitfield,true);
		$criteria->compare('style_parent_id',$this->style_parent_id,true);
		$criteria->compare('style_parent_tree',$this->style_parent_tree,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbStyles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
