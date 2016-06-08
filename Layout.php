<?php
/**
 * "{{layout}}" 数据表模型类.
 *
 * @author        ShengHui
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS.Model
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */
class Layout extends XBaseModel
{

    /**
     * @return string 相关的数据库表的名称
     */
    public function tableName()
    {
        return '{{layout}}';
    }

    /**
     * @return array 对模型的属性验证规则.
     */
    public function rules()
    {
        return array(
            array('floor, room, length, width, area, describe, house_id', 'required'),
            array('house_id', 'numerical', 'integerOnly'=>true),
            array('floor, room', 'length', 'max'=>50),
            array('describe', 'length', 'max'=>255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, floor, room, length, width, area, describe, house_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array 关联规则.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'house'=>array(self::BELONGS_TO, 'House', 'house_id', 'select'=>'id,name'),
        );
    }

    /**
     * @return array 自定义属性标签 (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'       => 'ID',
            'floor'    => '楼层',
            'room'     => '房间',
            'length'   => '长',
            'width'    => '宽',
            'area'     => '面积',
            'describe' => '说明',
            'house_id' => '内容',
        );
    }


    /**
     * 返回指定的AR类的静态模型.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Page the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
