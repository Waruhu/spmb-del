<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_kerja_sama".
 *
 * @property integer $id_kerja_sama
 * @property string $nama_client
 * @property string $deskripsi
 * @property string $logo
 * @property string $created_at
 * @property string $udpated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 */
class PmbKerjaSama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_kerja_sama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_client', 'logo'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at', 'udpated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['nama_client', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kerja_sama' => 'Id Kerja Sama',
            'nama_client' => 'Nama Client',
            'deskripsi' => 'Deskripsi',
            'logo' => 'Logo',
            'created_at' => 'Created At',
            'udpated_at' => 'Udpated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }
}
