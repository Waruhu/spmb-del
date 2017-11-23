<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_usm".
 *
 * @property integer $id_usm
 * @property string $usm
 * @property string $deskripsi
 * @property integer $id_tahun
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbPendaftaran[] $pmbPendaftarans
 * @property PmbRincianBiaya[] $pmbRincianBiayas
 * @property PmbSyaratUsm[] $pmbSyaratUsms
 * @property PmbMasukTahun $idTahun
 */
class PmbUsm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_usm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usm', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['id_tahun', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['usm'], 'string', 'max' => 255],
            [['id_tahun'], 'exist', 'skipOnError' => true, 'targetClass' => PmbMasukTahun::className(), 'targetAttribute' => ['id_tahun' => 'id_tahun']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usm' => 'Id Usm',
            'usm' => 'Usm',
            'deskripsi' => 'Deskripsi',
            'id_tahun' => 'Id Tahun',
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
    public function getPmbPendaftarans()
    {
        return $this->hasMany(PmbPendaftaran::className(), ['id_usm' => 'id_usm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPmbRincianBiayas()
    {
        return $this->hasMany(PmbRincianBiaya::className(), ['id_usm' => 'id_usm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPmbSyaratUsms()
    {
        return $this->hasMany(PmbSyaratUsm::className(), ['id_usm' => 'id_usm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTahun()
    {
        return $this->hasOne(PmbMasukTahun::className(), ['id_tahun' => 'id_tahun']);
    }
}
