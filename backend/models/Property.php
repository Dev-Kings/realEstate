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
            [['property_description'], 'string', 'max' => 255],
            [['property_price'], 'string', 'max' => 100],
            [['picture'], 'string', 'max' => 200],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
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
        ];
    }
}
