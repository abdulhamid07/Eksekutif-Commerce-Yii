<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "merk_barang".
 *
 * @property int $id_merk
 * @property string $nama_merk
 *
 * @property Barang[] $barangs
 */
class MerkBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'merk_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_merk'], 'required'],
            [['nama_merk'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_merk' => 'Id Merk',
            'nama_merk' => 'Nama Merk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['merk_id' => 'id_merk']);
    }
}
