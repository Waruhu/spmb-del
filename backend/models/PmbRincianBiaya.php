<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_rincian_biaya".
 *
 * @property integer $id_rincian_biaya
 * @property integer $id_biaya_pendidikan
 * @property string $rincian_biaya
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbBiayaPendidikan $idBiayaPendidikan
 */
class PmbRincianBiaya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_rincian_biaya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_biaya_pendidikan', 'created_by', 'updated_by', 'active'], 'integer'],
            [['rincian_biaya'], 'required'],
            [['rincian_biaya'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_biaya_pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => PmbBiayaPendidikan::className(), 'targetAttribute' => ['id_biaya_pendidikan' => 'id_biaya_pendidikan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rincian_biaya' => 'Id Rincian Biaya',
            'id_biaya_pendidikan' => 'Id Biaya Pendidikan',
            'rincian_biaya' => 'Rincian Biaya',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBiayaPendidikan()
    {
        return $this->hasOne(PmbBiayaPendidikan::className(), ['id_biaya_pendidikan' => 'id_biaya_pendidikan']);
    }
}
