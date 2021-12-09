<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property int $property_id
 * @property string $property_title
 * @property string $property_description
 * @property string $picture
 * @property in $admin_id
 * 
 * @property Admin $land
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

     public $file;
     
    public static function tableName()
    {
        return 'property';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_title', 'property_description', 'picture'], 'required'],
            [['property_title'], 'string', 'max' => 100],
            [['admin_id'], 'integer'],
            [['property_description'], 'string', 'max' => 255],
            [['property_price'], 'string', 'max' => 100],
            [['picture'], 'string', 'max' => 200],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['property_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'property_id' => 'Property ID',
            'property_title' => 'Property Title',
            'property_description' => 'Property Description',
            'property_price' => 'Property Price',
            'file' => 'Picture',
            'admin_id' => 'Admin ID',
        ];
    }
    /**
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Admin::className(), ['id' => 'property_id']);
    }
}
