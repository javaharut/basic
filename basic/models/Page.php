<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property string $id
 * @property string $alias
 * @property string $template
 * @property string $lang
 * @property string $title
 * @property string $h1
 * @property string $description
 * @property string $keywords
 * @property string $text
 * @property string $status
 * @property string $created
 * @property string $updated
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'template', 'title', 'description', 'keywords', 'text', 'created', 'updated'], 'required'],
            [['text'], 'string'],
            [['status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['alias', 'title', 'h1', 'description', 'keywords'], 'string', 'max' => 255],
            [['template'], 'string', 'max' => 11],
            [['lang'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'template' => 'Template',
            'lang' => 'Lang',
            'title' => 'Title',
            'h1' => 'H1',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'text' => 'Text',
            'status' => 'Status',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
