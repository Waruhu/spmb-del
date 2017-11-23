<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_info_del".
 *
 * @property integer $id_info_del
 * @property string $judul_info
 * @property string $deskripsi_del
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 */
class PmbInfoDel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_info_del';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi_del'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['judul_info'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_info_del' => 'Id Info Del',
            'judul_info' => 'Judul Info',
            'deskripsi_del' => 'Deskripsi Del',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }
}
