<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_pengumuman".
 *
 * @property integer $id_pengumuman
 * @property string $judul_pengumuman
 * @property string $deskripsi_pengumuman
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property GroupFilePengumuman[] $groupFilePengumumen
 * @property PmbFileDokumen[] $pmbFileDokumens
 */
class PmbPengumuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_pengumuman', 'deskripsi_pengumuman'], 'required'],
            [['deskripsi_pengumuman'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['judul_pengumuman'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pengumuman' => 'Id Pengumuman',
            'judul_pengumuman' => 'Judul Pengumuman',
            'deskripsi_pengumuman' => 'Deskripsi Pengumuman',
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
    public function getGroupFilePengumumen()
    {
        return $this->hasMany(GroupFilePengumuman::className(), ['id_pengumuman' => 'id_pengumuman']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPmbFileDokumens()
    {
        return $this->hasMany(PmbFileDokumen::className(), ['id_pengumuman' => 'id_pengumuman']);
    }
}
