<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_video".
 *
 * @property string $video_id
 * @property string $txt_title
 * @property string|null $txt_video_name
 * @property string|null $txt_description
 * @property string|null $txt_tags
 * @property int|null $ysn_thumbnil
 * @property int|null $int_status_type
 * @property int|null $dat_created_at
 * @property int|null $dat_updated_at
 * @property int|null $int_created_by
 *
 * @property User $intCreatedBy
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['video_id', 'txt_title'], 'required'],
            [['txt_description'], 'string'],
            [['ysn_thumbnil', 'int_status_type', 'dat_created_at', 'dat_updated_at', 'int_created_by'], 'integer'],
            [['video_id'], 'string', 'max' => 16],
            [['txt_title', 'txt_video_name', 'txt_tags'], 'string', 'max' => 512],
            [['video_id'], 'unique'],
            [['int_created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['int_created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'video_id' => 'Video ID',
            'txt_title' => 'Txt Title',
            'txt_video_name' => 'Txt Video Name',
            'txt_description' => 'Txt Description',
            'txt_tags' => 'Txt Tags',
            'ysn_thumbnil' => 'Ysn Thumbnil',
            'int_status_type' => 'Int Status Type',
            'dat_created_at' => 'Dat Created At',
            'dat_updated_at' => 'Dat Updated At',
            'int_created_by' => 'Int Created By',
        ];
    }

    /**
     * Gets query for [[IntCreatedBy]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getIntCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'int_created_by']);
    }

    /**
     * {@inheritdoc}
     * @return VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VideoQuery(get_called_class());
    }
}
