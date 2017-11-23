<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_masuk_tahun".
 *
 * @property integer $id_tahun
 * @property integer $tahun
 * @property string $deskripsi_tahun
 * @property string $created_at
 * @property string $udpated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbUsm[] $pmbUsms
 */
class PmbMasukTahun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_masuk_tahun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun'], 'required'],
            [['tahun', 'created_by', 'updated_by', 'active'], 'integer'],
            [['deskripsi_tahun'], 'string'],
            [['created_at', 'udpated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tahun' => 'Id Tahun',
            'tahun' => 'Tahun',
            'deskripsi_tahun' => 'Deskripsi Tahun',
            'created_at' => 'Created At',
            'udpated_at' => 'Udpated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPmbUsms()
    {
        return $this->hasMany(PmbUsm::className(), ['id_tahun' => 'id_tahun']);
    }
}
