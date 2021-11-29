<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lands".
 *
 * @property int $land_id
 * @property string $land_location
 * @property string $land_size
 * @property string $land_price
 * @property int $admin_id
 *
 * @property Admin $land
 */
class Lands extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['land_location', 'land_size', 'land_price'], 'required'],
            [['admin_id'], 'integer'],
            [['land_location'], 'string', 'max' => 500],
            [['land_size'], 'string', 'max' => 32],
            [['land_price'], 'string', 'max' => 1000],
            [['land_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['land_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'land_id' => 'Land ID',
            'land_location' => 'Land Location',
            'land_size' => 'Land Size',
            'land_price' => 'Land Price',
            'admin_id' => 'Admin ID',
        ];
    }

    /**
     * Gets query for [[Land]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLand()
    {
        return $this->hasOne(Admin::className(), ['id' => 'land_id']);
    }
}
