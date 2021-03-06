<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "r_member_salon_facility".
 *
 * @property integer $id
 * @property integer $member_id
 * @property integer $salon_membertype_id
 * @property integer $salon_id
 * @property integer $facility_id
 * @property integer $salon_facility_id
 * @property integer $member_schedule_id
 * @property integer $reserve_type
 * @property integer $status
 * @property integer $use_flg
 * @property string $start_datetime
 * @property string $end_datetime
 * @property string $description
 * @property string $reg_datetime
 * @property string $upd_datetime
 * @property string $memo
 */
class RMemberSalonFacility extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'r_member_salon_facility';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'salon_id', 'facility_id', 'salon_facility_id', 'member_schedule_id', 'reserve_type'], 'required'],
            [['member_id', 'salon_membertype_id', 'salon_id', 'facility_id', 'salon_facility_id', 'member_schedule_id', 'reserve_type', 'status', 'use_flg'], 'integer'],
            [['start_datetime', 'end_datetime', 'reg_datetime', 'upd_datetime'], 'safe'],
            [['description', 'memo'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'salon_membertype_id' => 'Salon Membertype ID',
            'salon_id' => 'Salon ID',
            'facility_id' => 'Facility ID',
            'salon_facility_id' => 'Salon Facility ID',
            'member_schedule_id' => 'Member Schedule ID',
            'reserve_type' => 'Reserve Type',
            'status' => 'Status',
            'use_flg' => 'Use Flg',
            'start_datetime' => 'Start Datetime',
            'end_datetime' => 'End Datetime',
            'description' => 'Description',
            'reg_datetime' => 'Reg Datetime',
            'upd_datetime' => 'Upd Datetime',
            'memo' => 'Memo',
        ];
    }
}
