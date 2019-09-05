<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $money 金额
 * @property int $type_id 类型
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['money'], 'number'],
            [['type_id'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'money' => '金额',
            'type_id' => '类型',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
        ];
    }

    public function getType()
    {
        return Type::find()->where(['id' => $this->type_id])->one();
    }
}
