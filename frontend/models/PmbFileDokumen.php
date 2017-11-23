<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_file_dokumen".
 *
 * @property integer $id_dokumen
 * @property string $nama_dokumen
 * @property string $path
 * @property integer $id_pengumuman
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbPengumuman $idPengumuman
 */
class PmbFileDokumen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_file_dokumen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_dokumen', 'path'], 'required'],
            [['id_pengumuman', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_dokumen', 'path'], 'string', 'max' => 255],
            [['id_pengumuman'], 'exist', 'skipOnError' => true, 'targetClass' => PmbPengumuman::className(), 'targetAttribute' => ['id_pengumuman' => 'id_pengumuman']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dokumen' => 'Id Dokumen',
            'nama_dokumen' => 'Nama Dokumen',
            'path' => 'Path',
            'id_pengumuman' => 'Id Pengumuman',
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
    public function getIdPengumuman()
    {
        return $this->hasOne(PmbPengumuman::className(), ['id_pengumuman' => 'id_pengumuman']);
    }
}
