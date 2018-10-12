<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $harga
 * @property int $stok
 * @property int $kategori_id
 * @property int $merk_id
 * @property string $gambar
 * @property string $tanggal
 *
 * @property KategoriBarang $kategori
 * @property MerkBarang $merk
 * @property SpekBarang[] $spekBarangs
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'harga', 'stok', 'kategori_id', 'merk_id', 'gambar', 'tanggal'], 'required'],
            [['harga', 'stok', 'kategori_id', 'merk_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama_barang'], 'string', 'max' => 100],
            [['gambar'], 'string', 'max' => 70],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarang::className(), 'targetAttribute' => ['kategori_id' => 'id_kategori']],
            [['merk_id'], 'exist', 'skipOnError' => true, 'targetClass' => MerkBarang::className(), 'targetAttribute' => ['merk_id' => 'id_merk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
            'stok' => 'Stok',
            'kategori_id' => 'Kategori ID',
            'merk_id' => 'Merk ID',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(KategoriBarang::className(), ['id_kategori' => 'kategori_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerk()
    {
        return $this->hasOne(MerkBarang::className(), ['id_merk' => 'merk_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpekBarangs()
    {
        return $this->hasMany(SpekBarang::className(), ['barang_id' => 'id_barang']);
    }
}
