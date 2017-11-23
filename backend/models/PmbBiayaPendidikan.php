<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_biaya_pendidikan".
 *
 * @property integer $id_biaya_pendidikan
 * @property string $deskripsi_biaya
 * @property double $jumlah_biaya
 * @property integer $id_usm
 * @property integer $id_prodi
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbProdi $idProdi
 * @property PmbUsm $idUsm
 * @property PmbRincianBiaya[] $pmbRincianBiayas
 */
class PmbBiayaPendidikan extends \yii\db\ActiveRecord
{
    public $rincian_biaya;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_biaya_pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi_biaya'], 'required'],
            [['deskripsi_biaya', 'rincian_biaya'], 'string'],
            [['jumlah_biaya'], 'number'],
            [['id_usm', 'id_prodi', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => PmbProdi::className(), 'targetAttribute' => ['id_prodi' => 'id_prodi']],
            [['id_usm'], 'exist', 'skipOnError' => true, 'targetClass' => PmbUsm::className(), 'targetAttribute' => ['id_usm' => 'id_usm']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_biaya_pendidikan' => 'Id Biaya Pendidikan',
            'deskripsi_biaya' => 'Deskripsi Biaya',
            'jumlah_biaya' => 'Jumlah Biaya',
            'id_usm' => 'Id Usm',
            'id_prodi' => 'Id Prodi',
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
    public function getIdProdi()
    {
        return $this->hasOne(PmbProdi::className(), ['id_prodi' => 'id_prodi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsm()
    {
        return $this->hasOne(PmbUsm::className(), ['id_usm' => 'id_usm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPmbRincianBiayas()
    {
        return $this->hasMany(PmbRincianBiaya::className(), ['id_biaya_pendidikan' => 'id_biaya_pendidikan']);
    }
}
