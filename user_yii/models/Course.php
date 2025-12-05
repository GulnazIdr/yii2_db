<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $image
 * @property int $price
 * @property int $category_id
 *
 * @property Category $category
 */
class Course extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'extensions' => 'png ,jpg, jpeg, webp', 'skipOnEmpty' => true],
            [['description', 'image'], 'default', 'value' => null],
            [['title', 'price', 'category_id'], 'required'],
            [['description'], 'string'],
            [['price', 'category_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function uploadImage(){
        if($this->imageFile){
            $path = 'uploads/courses/' . time() . '_' . $this->imageFile->basename . '.'
            . $this->imageFile->extension;

            if($this->imageFile->saveAs($path)){
                $this->image=$path;
                return true;
            }
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'price' => 'Price',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

}
