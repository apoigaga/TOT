<?php
 
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ExamTime;

/**
 * This is the model class for table "examTime".
 *
 * @property integer $examTime_id
 * @property string $exam_start
 * @property string $exam_end
 */
class ExamTime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'examTime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exam_start', 'exam_end'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'examTime_id' => 'Exam Time ID',
            'exam_start' => 'Exam Start',
            'exam_end' => 'Exam End',
        ];
    }
}
