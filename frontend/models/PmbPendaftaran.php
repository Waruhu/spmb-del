<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_pendaftaran".
 *
 * @property integer $id_pendaftaran
 * @property string $jadwal_awal
 * @property string $jadwal_akhir
 * @property double $biaya_daftar
 * @property string $tgl_pengumuman
 * @property string $tgl_ujian
 * @property string $tgl_mendaftar_ulang_awal
 * @property string $tgl_mendaftar_ulang_akhir
 * @property integer $id_usm
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbUsm $idUsm
 */
class PmbPendaftaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_pendaftaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwal_awal', 'jadwal_akhir', 'biaya_daftar'], 'required'],
            [['jadwal_awal', 'jadwal_akhir', 'tgl_pengumuman', 'tgl_ujian', 'tgl_mendaftar_ulang_awal', 'tgl_mendaftar_ulang_akhir', 'created_at', 'updated_at'], 'safe'],
            [['biaya_daftar'], 'number'],
            [['id_usm', 'created_by', 'updated_by', 'active'], 'integer'],
            [['id_usm'], 'exist', 'skipOnError' => true, 'targetClass' => PmbUsm::className(), 'targetAttribute' => ['id_usm' => 'id_usm']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pendaftaran' => 'Id Pendaftaran',
            'jadwal_awal' => 'Jadwal Awal',
            'jadwal_akhir' => 'Jadwal Akhir',
            'biaya_daftar' => 'Biaya Daftar',
            'tgl_pengumuman' => 'Tgl Pengumuman',
            'tgl_ujian' => 'Tgl Ujian',
            'tgl_mendaftar_ulang_awal' => 'Tgl Mendaftar Ulang Awal',
            'tgl_mendaftar_ulang_akhir' => 'Tgl Mendaftar Ulang Akhir',
            'id_usm' => 'Id Usm',
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
    public function getIdUsm()
    {
        return $this->hasOne(PmbUsm::className(), ['id_usm' => 'id_usm']);
    }
}
