<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_kerja_sama".
 *
 * @property integer $id_kerja_sama
 * @property string $nama_client
 * @property string $deskripsi
 * @property string $logo
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
            [['deskripsi'], 'string'],
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
        ];
    }
}
