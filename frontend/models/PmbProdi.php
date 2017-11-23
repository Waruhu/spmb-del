<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_prodi".
 *
 * @property integer $id_prodi
 * @property string $nama_prodi
 * @property string $deskripsi_prodi
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbBiayaPendidikan[] $pmbBiayaPendidikans
 */
class PmbProdi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_prodi', 'deskripsi_prodi'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['nama_prodi', 'deskripsi_prodi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'nama_prodi' => 'Nama Prodi',
            'deskripsi_prodi' => 'Deskripsi Prodi',
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
    public function getPmbBiayaPendidikans()
    {
        return $this->hasMany(PmbBiayaPendidikan::className(), ['id_prodi' => 'id_prodi']);
    }
}
