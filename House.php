<?php

/**
 * This is the model class for table "{{house}}".
 *
 * The followings are the available columns in table '{{house}}':
 * @property integer $id
 * @property string $name
 * @property string $prepay
 * @property string $total_price
 * @property integer $subject_id
 * @property integer $accessDate
 * @property string $location
 * @property string $introduction
 * @property string $house_image
 * @property string $image_list
 * @property string $video_url
 * @property string $author
 * @property integer $recommend
 * @property integer $city_id
 * @property integer $district_id
 * @property string $community
 * @property integer $investType_id
 * @property integer $propertyType_id
 * @property string $land_area
 * @property string $house_area
 * @property integer $floor_num
 * @property string $house_style
 * @property integer $bedroom_num
 * @property integer $toilet_num
 * @property integer $kitchen_num
 * @property integer $park_num
 * @property string $house_size
 * @property string $door_direction
 * @property integer $construction_year
 * @property string $zipcode
 * @property integer $certificate
 * @property string $lift
 * @property string $carport
 * @property string $embassy
 * @property string $mls_code
 * @property string $facilities
 * @property string $longitude
 * @property string $latitude
 * @property string $match
 * @property integer $is_sell
 * @property string $a_c
 * @property string $central_vac
 * @property integer $gar_spaces
 * @property string $basement
 * @property string $pool
 * @property string $fireplace_stove
 * @property string $taxes
 * @property integer $tax_year
 * @property string $cross_streets
 * @property string $heat
 * @property string $mls_province
 * @property string $mls_area
 * @property string $mls_area_code
 * @property string $mls_municipality
 * @property string $mls_municp_code
 * @property string $yr_built
 * @property string $sqft
 * @property string $area
 * @property string $area_code
 * @property string $bsmt1_out
 * @property string $bsmt2_out
 * @property integer $br
 * @property integer $br_plus
 * @property string $community_c
 * @property string $cross_st
 * @property string $elevator
 * @property string $constr1_out
 * @property string $constr2_out
 * @property string $extras
 * @property string $fpl_num
 * @property string $comp_pts
 * @property string $furnished
 * @property string $fuel
 * @property string $heating
 * @property integer $num_kit
 * @property integer $kit_plus
 * @property string $level1
 * @property string $level10
 * @property string $level11
 * @property string $level12
 * @property string $level2
 * @property string $level3
 * @property string $level4
 * @property string $level5
 * @property string $level6
 * @property string $level7
 * @property string $level8
 * @property string $level9
 * @property integer $lp_dol
 * @property double $depth
 * @property double $front_ft
 * @property string $lotsz_code
 * @property string $ml_num
 * @property string $municipality
 * @property string $municipality_code
 * @property string $pix_updt
 * @property string $zip
 * @property string $prop_feat1_out
 * @property string $prop_feat2_out
 * @property string $prop_feat3_out
 * @property string $prop_feat4_out
 * @property string $prop_feat5_out
 * @property string $prop_feat6_out
 * @property string $county
 * @property string $ad_text
 * @property string $rm1_out
 * @property string $rm1_dc1_out
 * @property string $rm1_dc2_out
 * @property string $rm1_dc3_out
 * @property string $rm1_len
 * @property string $rm1_wth
 * @property string $rm10_out
 * @property string $rm10_dc1_out
 * @property string $rm10_dc2_out
 * @property string $rm10_dc3_out
 * @property string $rm10_wth
 * @property string $rm11_out
 * @property string $rm11_dc1_out
 * @property string $rm11_dc2_out
 * @property string $rm11_dc3_out
 * @property string $rm10_len
 * @property string $rm11_len
 * @property string $rm11_wth
 * @property string $rm12_out
 * @property string $rm12_dc1_out
 * @property string $rm12_dc3_out
 * @property string $rm12_len
 * @property string $rm12_wth
 * @property string $rm2_out
 * @property string $rm2_dc1_out
 * @property string $rm2_dc2_out
 * @property string $rm2_dc3_out
 * @property string $rm2_len
 * @property string $rm2_wth
 * @property string $rm3_out
 * @property string $rm3_dc1_out
 * @property string $rm3_dc2_out
 * @property string $rm3_len
 * @property string $rm3_wth
 * @property string $rm4_out
 * @property string $rm4_dc1_out
 * @property string $rm4_dc2_out
 * @property string $rm4_dc3_out
 * @property string $rm4_len
 * @property string $rm4_wth
 * @property string $rm5_out
 * @property string $rm5_dc1_out
 * @property string $rm5_dc2_out
 * @property string $rm5_dc3_out
 * @property string $rm5_len
 * @property string $rm5_wth
 * @property string $rm6_out
 * @property string $rm6_dc1_out
 * @property string $rm6_dc2_out
 * @property string $rm6_dc3_out
 * @property string $rm6_len
 * @property string $rm6_wth
 * @property string $rm7_out
 * @property string $rm7_dc1_out
 * @property string $rm7_dc2_out
 * @property string $rm7_dc3_out
 * @property string $rm7_len
 * @property string $rm7_wth
 * @property string $rm8_out
 * @property string $rm8_dc1_out
 * @property string $rm8_dc2_out
 * @property string $rm8_dc3_out
 * @property string $rm8_len
 * @property string $rm8_wth
 * @property string $rm9_out
 * @property string $rm9_dc1_out
 * @property string $rm9_dc2_out
 * @property string $rm9_dc3_out
 * @property string $rm9_len
 * @property string $rm9_wth
 * @property integer $rms
 * @property integer $rooms_plus
 * @property string $s_r
 * @property string $style
 * @property integer $yr
 * @property string $type_own1_out
 * @property string $tour_url
 * @property integer $bath_tot
 * @property string $addr
 * @property string $community_code
 * @property string $rm12_dc2_out
 * @property string $rm3_dc3_out
 * @property string $acres
 */
class House extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{house}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acres', 'required'),
			array('subject_id, accessDate, recommend, city_id, district_id, investType_id, propertyType_id, floor_num, bedroom_num, toilet_num, kitchen_num, park_num, construction_year, certificate, is_sell, gar_spaces, tax_year, br, br_plus, num_kit, kit_plus, lp_dol, rms, rooms_plus, yr, bath_tot', 'numerical', 'integerOnly'=>true),
			array('depth, front_ft', 'numerical'),
			array('name, location, house_image, video_url, cross_streets, heat, mls_province, mls_area, mls_area_code, mls_municipality, mls_municp_code, yr_built, sqft, area, area_code, bsmt1_out, bsmt2_out', 'length', 'max'=>255),
			array('prepay, total_price, land_area, house_area, latitude, taxes', 'length', 'max'=>8),
			array('author, community', 'length', 'max'=>50),
			array('house_style, house_size, door_direction, zipcode, lift, carport, embassy, mls_code, facilities, match, a_c, central_vac, basement, pool, fireplace_stove, community_c, cross_st, elevator, constr1_out, constr2_out, fpl_num, comp_pts, fuel, heating, level1, level10, level11, level12, level2, level3, level4, level5, level6, level7, level8, level9, ml_num, municipality, municipality_code, zip, prop_feat1_out, prop_feat2_out, prop_feat3_out, prop_feat4_out, prop_feat5_out, prop_feat6_out, county, ad_text, rm1_out, rm1_dc1_out, rm1_dc2_out, rm1_dc3_out, rm2_out, rm2_dc1_out, rm2_dc2_out, rm2_dc3_out, rm3_out, rm4_out, rm4_dc1_out, rm4_dc2_out, rm4_dc3_out, rm5_out, rm5_dc1_out, rm5_dc2_out, rm5_dc3_out, rm6_out, rm6_dc1_out, rm6_dc2_out, rm6_dc3_out, rm7_out, rm7_dc1_out, rm7_dc2_out, rm7_dc3_out, rm8_out, rm8_dc1_out, rm8_dc2_out, rm8_dc3_out, rm9_out, rm9_dc1_out, rm9_dc2_out, rm9_dc3_out, s_r, style, type_own1_out, tour_url, addr, community_code, rm12_dc2_out, rm3_dc3_out', 'length', 'max'=>100),
			array('longitude, furnished', 'length', 'max'=>10),
			array('lotsz_code', 'length', 'max'=>11),
			array('rm1_len, rm1_wth, rm10_wth, rm10_len, rm11_len, rm11_wth, rm12_len, rm12_wth, rm2_len, rm2_wth, rm3_len, rm3_wth, rm4_len, rm4_wth, rm5_len, rm5_wth, rm6_len, rm6_wth, rm7_len, rm7_wth, rm8_len, rm8_wth, rm9_len, rm9_wth', 'length', 'max'=>5),
			array('rm10_out, rm10_dc1_out, rm10_dc2_out, rm10_dc3_out, rm11_out, rm11_dc1_out, rm11_dc2_out, rm11_dc3_out, rm12_out, rm12_dc1_out, rm12_dc3_out', 'length', 'max'=>500),
			array('rm3_dc1_out, rm3_dc2_out', 'length', 'max'=>150),
			array('acres', 'length', 'max'=>80),
			array('introduction, image_list, extras, pix_updt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, prepay, total_price, subject_id, accessDate, location, introduction, house_image, image_list, video_url, author, recommend, city_id, district_id, community, investType_id, propertyType_id, land_area, house_area, floor_num, house_style, bedroom_num, toilet_num, kitchen_num, park_num, house_size, door_direction, construction_year, zipcode, certificate, lift, carport, embassy, mls_code, facilities, longitude, latitude, match, is_sell, a_c, central_vac, gar_spaces, basement, pool, fireplace_stove, taxes, tax_year, cross_streets, heat, mls_province, mls_area, mls_area_code, mls_municipality, mls_municp_code, yr_built, sqft, area, area_code, bsmt1_out, bsmt2_out, br, br_plus, community_c, cross_st, elevator, constr1_out, constr2_out, extras, fpl_num, comp_pts, furnished, fuel, heating, num_kit, kit_plus, level1, level10, level11, level12, level2, level3, level4, level5, level6, level7, level8, level9, lp_dol, depth, front_ft, lotsz_code, ml_num, municipality, municipality_code, pix_updt, zip, prop_feat1_out, prop_feat2_out, prop_feat3_out, prop_feat4_out, prop_feat5_out, prop_feat6_out, county, ad_text, rm1_out, rm1_dc1_out, rm1_dc2_out, rm1_dc3_out, rm1_len, rm1_wth, rm10_out, rm10_dc1_out, rm10_dc2_out, rm10_dc3_out, rm10_wth, rm11_out, rm11_dc1_out, rm11_dc2_out, rm11_dc3_out, rm10_len, rm11_len, rm11_wth, rm12_out, rm12_dc1_out, rm12_dc3_out, rm12_len, rm12_wth, rm2_out, rm2_dc1_out, rm2_dc2_out, rm2_dc3_out, rm2_len, rm2_wth, rm3_out, rm3_dc1_out, rm3_dc2_out, rm3_len, rm3_wth, rm4_out, rm4_dc1_out, rm4_dc2_out, rm4_dc3_out, rm4_len, rm4_wth, rm5_out, rm5_dc1_out, rm5_dc2_out, rm5_dc3_out, rm5_len, rm5_wth, rm6_out, rm6_dc1_out, rm6_dc2_out, rm6_dc3_out, rm6_len, rm6_wth, rm7_out, rm7_dc1_out, rm7_dc2_out, rm7_dc3_out, rm7_len, rm7_wth, rm8_out, rm8_dc1_out, rm8_dc2_out, rm8_dc3_out, rm8_len, rm8_wth, rm9_out, rm9_dc1_out, rm9_dc2_out, rm9_dc3_out, rm9_len, rm9_wth, rms, rooms_plus, s_r, style, yr, type_own1_out, tour_url, bath_tot, addr, community_code, rm12_dc2_out, rm3_dc3_out, acres', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                        'mname'=>array(self::BELONGS_TO, 'Mname', 'municipality'),
                        'city'=>array(self::BELONGS_TO, 'City', 'city_id'),
                        'district'=>array(self::BELONGS_TO, 'District', 'district_id'),
                        'subject'=>array(self::BELONGS_TO, 'Subject', 'subject_id'),
                        'investType'=>array(self::BELONGS_TO, 'InvestType', 'investType_id'),
                        'propertyType'=>array(self::BELONGS_TO, 'PropertyType', 'propertyType_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '名称',
			'prepay' => '首付',
			'total_price' => '总价',
			'subject_id' => '所属项目',
			'accessDate' => '挂牌时间',
			'location' => '地址',
			'introduction' => '描述',
			'house_image' => '房源图片',
			'image_list' => '组图',
			'video_url' => '房源视频路径',
			'author' => '作者',
			'recommend' => '是否推荐',
			'city_id' => '城市',
			'district_id' => '地区',
			'community' => '社区',
			'investType_id' => '投资类型',
			'propertyType_id' => '物业类型',
			'land_area' => '土地面积',
			'house_area' => '房屋面积',
			'floor_num' => '房屋层数',
			'house_style' => '房屋层数',
			'bedroom_num' => '卧室数量',
			'toilet_num' => '卫生间数量',
			'kitchen_num' => '厨房数量',
			'park_num' => '停车位数量',
			'house_size' => '房屋规格',
			'door_direction' => '大门朝向',
			'construction_year' => '建造年份',
			'zipcode' => '邮编',
			'certificate' => '认证房源',
			'lift' => '电梯',
			'carport' => '车库',
			'embassy' => '会客厅',
			'mls_code' => 'MLS编号',
			'facilities' => '附近设施',
			'longitude' => '经度',
			'latitude' => '纬度',
			'match' => '配套设施',
			'is_sell' => '是否售卖',
			'a_c' => '是否中央空调',
			'central_vac' => '是否中央吸尘',
			'gar_spaces' => '是否配套家具',
			'basement' => '是否地下室',
			'pool' => '是否游泳池',
			'fireplace_stove' => '是否壁炉',
			'taxes' => '地税',
			'tax_year' => '地税年度',
			'cross_streets' => '交叉路口',
			'heat' => '暖气',
			'mls_province' => 'mls省份',
			'mls_area' => 'mls地区',
			'mls_area_code' => 'mls地区code',
			'mls_municipality' => 'mls城市',
			'mls_municp_code' => 'mls城市code',
			'yr_built' => 'Yr Built',
			'sqft' => 'Sqft',
			'area' => 'Area',
			'area_code' => 'Area Code',
			'bsmt1_out' => 'Bsmt1 Out',
			'bsmt2_out' => 'Bsmt2 Out',
			'br' => 'Br',
			'br_plus' => 'Br Plus',
			'community_c' => 'Community C',
			'cross_st' => 'Cross St',
			'elevator' => 'Elevator',
			'constr1_out' => 'Constr1 Out',
			'constr2_out' => 'Constr2 Out',
			'extras' => 'Extras',
			'fpl_num' => 'Fpl Num',
			'comp_pts' => 'Comp Pts',
			'furnished' => 'Furnished',
			'fuel' => 'Fuel',
			'heating' => 'Heating',
			'num_kit' => 'Num Kit',
			'kit_plus' => 'Kit Plus',
			'level1' => 'Level1',
			'level10' => 'Level10',
			'level11' => 'Level11',
			'level12' => 'Level12',
			'level2' => 'Level2',
			'level3' => 'Level3',
			'level4' => 'Level4',
			'level5' => 'Level5',
			'level6' => 'Level6',
			'level7' => 'Level7',
			'level8' => 'Level8',
			'level9' => 'Level9',
			'lp_dol' => 'Lp Dol',
			'depth' => 'Depth',
			'front_ft' => 'Front Ft',
			'lotsz_code' => 'Lotsz Code',
			'ml_num' => 'Ml Num',
			'municipality' => 'Municipality',
			'municipality_code' => 'Municipality Code',
			'pix_updt' => 'Pix Updt',
			'zip' => 'Zip',
			'prop_feat1_out' => 'Prop Feat1 Out',
			'prop_feat2_out' => 'Prop Feat2 Out',
			'prop_feat3_out' => 'Prop Feat3 Out',
			'prop_feat4_out' => 'Prop Feat4 Out',
			'prop_feat5_out' => 'Prop Feat5 Out',
			'prop_feat6_out' => 'Prop Feat6 Out',
			'county' => 'County',
			'ad_text' => 'Ad Text',
			'rm1_out' => 'Rm1 Out',
			'rm1_dc1_out' => 'Rm1 Dc1 Out',
			'rm1_dc2_out' => 'Rm1 Dc2 Out',
			'rm1_dc3_out' => 'Rm1 Dc3 Out',
			'rm1_len' => 'Rm1 Len',
			'rm1_wth' => 'Rm1 Wth',
			'rm10_out' => 'Rm10 Out',
			'rm10_dc1_out' => 'Rm10 Dc1 Out',
			'rm10_dc2_out' => 'Rm10 Dc2 Out',
			'rm10_dc3_out' => 'Rm10 Dc3 Out',
			'rm10_wth' => 'Rm10 Wth',
			'rm11_out' => 'Rm11 Out',
			'rm11_dc1_out' => 'Rm11 Dc1 Out',
			'rm11_dc2_out' => 'Rm11 Dc2 Out',
			'rm11_dc3_out' => 'Rm11 Dc3 Out',
			'rm10_len' => 'Rm10 Len',
			'rm11_len' => 'Rm11 Len',
			'rm11_wth' => 'Rm11 Wth',
			'rm12_out' => 'Rm12 Out',
			'rm12_dc1_out' => 'Rm12 Dc1 Out',
			'rm12_dc3_out' => 'Rm12 Dc3 Out',
			'rm12_len' => 'Rm12 Len',
			'rm12_wth' => 'Rm12 Wth',
			'rm2_out' => 'Rm2 Out',
			'rm2_dc1_out' => 'Rm2 Dc1 Out',
			'rm2_dc2_out' => 'Rm2 Dc2 Out',
			'rm2_dc3_out' => 'Rm2 Dc3 Out',
			'rm2_len' => 'Rm2 Len',
			'rm2_wth' => 'Rm2 Wth',
			'rm3_out' => 'Rm3 Out',
			'rm3_dc1_out' => 'Rm3 Dc1 Out',
			'rm3_dc2_out' => 'Rm3 Dc2 Out',
			'rm3_len' => 'Rm3 Len',
			'rm3_wth' => 'Rm3 Wth',
			'rm4_out' => 'Rm4 Out',
			'rm4_dc1_out' => 'Rm4 Dc1 Out',
			'rm4_dc2_out' => 'Rm4 Dc2 Out',
			'rm4_dc3_out' => 'Rm4 Dc3 Out',
			'rm4_len' => 'Rm4 Len',
			'rm4_wth' => 'Rm4 Wth',
			'rm5_out' => 'Rm5 Out',
			'rm5_dc1_out' => 'Rm5 Dc1 Out',
			'rm5_dc2_out' => 'Rm5 Dc2 Out',
			'rm5_dc3_out' => 'Rm5 Dc3 Out',
			'rm5_len' => 'Rm5 Len',
			'rm5_wth' => 'Rm5 Wth',
			'rm6_out' => 'Rm6 Out',
			'rm6_dc1_out' => 'Rm6 Dc1 Out',
			'rm6_dc2_out' => 'Rm6 Dc2 Out',
			'rm6_dc3_out' => 'Rm6 Dc3 Out',
			'rm6_len' => 'Rm6 Len',
			'rm6_wth' => 'Rm6 Wth',
			'rm7_out' => 'Rm7 Out',
			'rm7_dc1_out' => 'Rm7 Dc1 Out',
			'rm7_dc2_out' => 'Rm7 Dc2 Out',
			'rm7_dc3_out' => 'Rm7 Dc3 Out',
			'rm7_len' => 'Rm7 Len',
			'rm7_wth' => 'Rm7 Wth',
			'rm8_out' => 'Rm8 Out',
			'rm8_dc1_out' => 'Rm8 Dc1 Out',
			'rm8_dc2_out' => 'Rm8 Dc2 Out',
			'rm8_dc3_out' => 'Rm8 Dc3 Out',
			'rm8_len' => 'Rm8 Len',
			'rm8_wth' => 'Rm8 Wth',
			'rm9_out' => 'Rm9 Out',
			'rm9_dc1_out' => 'Rm9 Dc1 Out',
			'rm9_dc2_out' => 'Rm9 Dc2 Out',
			'rm9_dc3_out' => 'Rm9 Dc3 Out',
			'rm9_len' => 'Rm9 Len',
			'rm9_wth' => 'Rm9 Wth',
			'rms' => 'Rms',
			'rooms_plus' => 'Rooms Plus',
			's_r' => 'S R',
			'style' => 'Style',
			'yr' => 'Yr',
			'type_own1_out' => 'Type Own1 Out',
			'tour_url' => 'Tour Url',
			'bath_tot' => 'Bath Tot',
			'addr' => 'Addr',
			'community_code' => 'Community Code',
			'rm12_dc2_out' => 'Rm12 Dc2 Out',
			'rm3_dc3_out' => 'Rm3 Dc3 Out',
			'acres' => 'Acres',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('prepay',$this->prepay,true);
		$criteria->compare('total_price',$this->total_price,true);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('accessDate',$this->accessDate);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('introduction',$this->introduction,true);
		$criteria->compare('house_image',$this->house_image,true);
		$criteria->compare('image_list',$this->image_list,true);
		$criteria->compare('video_url',$this->video_url,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('recommend',$this->recommend);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('community',$this->community,true);
		$criteria->compare('investType_id',$this->investType_id);
		$criteria->compare('propertyType_id',$this->propertyType_id);
		$criteria->compare('land_area',$this->land_area,true);
		$criteria->compare('house_area',$this->house_area,true);
		$criteria->compare('floor_num',$this->floor_num);
		$criteria->compare('house_style',$this->house_style,true);
		$criteria->compare('bedroom_num',$this->bedroom_num);
		$criteria->compare('toilet_num',$this->toilet_num);
		$criteria->compare('kitchen_num',$this->kitchen_num);
		$criteria->compare('park_num',$this->park_num);
		$criteria->compare('house_size',$this->house_size,true);
		$criteria->compare('door_direction',$this->door_direction,true);
		$criteria->compare('construction_year',$this->construction_year);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('certificate',$this->certificate);
		$criteria->compare('lift',$this->lift,true);
		$criteria->compare('carport',$this->carport,true);
		$criteria->compare('embassy',$this->embassy,true);
		$criteria->compare('mls_code',$this->mls_code,true);
		$criteria->compare('facilities',$this->facilities,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('match',$this->match,true);
		$criteria->compare('is_sell',$this->is_sell);
		$criteria->compare('a_c',$this->a_c,true);
		$criteria->compare('central_vac',$this->central_vac,true);
		$criteria->compare('gar_spaces',$this->gar_spaces);
		$criteria->compare('basement',$this->basement,true);
		$criteria->compare('pool',$this->pool,true);
		$criteria->compare('fireplace_stove',$this->fireplace_stove,true);
		$criteria->compare('taxes',$this->taxes,true);
		$criteria->compare('tax_year',$this->tax_year);
		$criteria->compare('cross_streets',$this->cross_streets,true);
		$criteria->compare('heat',$this->heat,true);
		$criteria->compare('mls_province',$this->mls_province,true);
		$criteria->compare('mls_area',$this->mls_area,true);
		$criteria->compare('mls_area_code',$this->mls_area_code,true);
		$criteria->compare('mls_municipality',$this->mls_municipality,true);
		$criteria->compare('mls_municp_code',$this->mls_municp_code,true);
		$criteria->compare('yr_built',$this->yr_built,true);
		$criteria->compare('sqft',$this->sqft,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('area_code',$this->area_code,true);
		$criteria->compare('bsmt1_out',$this->bsmt1_out,true);
		$criteria->compare('bsmt2_out',$this->bsmt2_out,true);
		$criteria->compare('br',$this->br);
		$criteria->compare('br_plus',$this->br_plus);
		$criteria->compare('community_c',$this->community_c,true);
		$criteria->compare('cross_st',$this->cross_st,true);
		$criteria->compare('elevator',$this->elevator,true);
		$criteria->compare('constr1_out',$this->constr1_out,true);
		$criteria->compare('constr2_out',$this->constr2_out,true);
		$criteria->compare('extras',$this->extras,true);
		$criteria->compare('fpl_num',$this->fpl_num,true);
		$criteria->compare('comp_pts',$this->comp_pts,true);
		$criteria->compare('furnished',$this->furnished,true);
		$criteria->compare('fuel',$this->fuel,true);
		$criteria->compare('heating',$this->heating,true);
		$criteria->compare('num_kit',$this->num_kit);
		$criteria->compare('kit_plus',$this->kit_plus);
		$criteria->compare('level1',$this->level1,true);
		$criteria->compare('level10',$this->level10,true);
		$criteria->compare('level11',$this->level11,true);
		$criteria->compare('level12',$this->level12,true);
		$criteria->compare('level2',$this->level2,true);
		$criteria->compare('level3',$this->level3,true);
		$criteria->compare('level4',$this->level4,true);
		$criteria->compare('level5',$this->level5,true);
		$criteria->compare('level6',$this->level6,true);
		$criteria->compare('level7',$this->level7,true);
		$criteria->compare('level8',$this->level8,true);
		$criteria->compare('level9',$this->level9,true);
		$criteria->compare('lp_dol',$this->lp_dol);
		$criteria->compare('depth',$this->depth);
		$criteria->compare('front_ft',$this->front_ft);
		$criteria->compare('lotsz_code',$this->lotsz_code,true);
		$criteria->compare('ml_num',$this->ml_num,true);
		$criteria->compare('municipality',$this->municipality,true);
		$criteria->compare('municipality_code',$this->municipality_code,true);
		$criteria->compare('pix_updt',$this->pix_updt,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('prop_feat1_out',$this->prop_feat1_out,true);
		$criteria->compare('prop_feat2_out',$this->prop_feat2_out,true);
		$criteria->compare('prop_feat3_out',$this->prop_feat3_out,true);
		$criteria->compare('prop_feat4_out',$this->prop_feat4_out,true);
		$criteria->compare('prop_feat5_out',$this->prop_feat5_out,true);
		$criteria->compare('prop_feat6_out',$this->prop_feat6_out,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('ad_text',$this->ad_text,true);
		$criteria->compare('rm1_out',$this->rm1_out,true);
		$criteria->compare('rm1_dc1_out',$this->rm1_dc1_out,true);
		$criteria->compare('rm1_dc2_out',$this->rm1_dc2_out,true);
		$criteria->compare('rm1_dc3_out',$this->rm1_dc3_out,true);
		$criteria->compare('rm1_len',$this->rm1_len,true);
		$criteria->compare('rm1_wth',$this->rm1_wth,true);
		$criteria->compare('rm10_out',$this->rm10_out,true);
		$criteria->compare('rm10_dc1_out',$this->rm10_dc1_out,true);
		$criteria->compare('rm10_dc2_out',$this->rm10_dc2_out,true);
		$criteria->compare('rm10_dc3_out',$this->rm10_dc3_out,true);
		$criteria->compare('rm10_wth',$this->rm10_wth,true);
		$criteria->compare('rm11_out',$this->rm11_out,true);
		$criteria->compare('rm11_dc1_out',$this->rm11_dc1_out,true);
		$criteria->compare('rm11_dc2_out',$this->rm11_dc2_out,true);
		$criteria->compare('rm11_dc3_out',$this->rm11_dc3_out,true);
		$criteria->compare('rm10_len',$this->rm10_len,true);
		$criteria->compare('rm11_len',$this->rm11_len,true);
		$criteria->compare('rm11_wth',$this->rm11_wth,true);
		$criteria->compare('rm12_out',$this->rm12_out,true);
		$criteria->compare('rm12_dc1_out',$this->rm12_dc1_out,true);
		$criteria->compare('rm12_dc3_out',$this->rm12_dc3_out,true);
		$criteria->compare('rm12_len',$this->rm12_len,true);
		$criteria->compare('rm12_wth',$this->rm12_wth,true);
		$criteria->compare('rm2_out',$this->rm2_out,true);
		$criteria->compare('rm2_dc1_out',$this->rm2_dc1_out,true);
		$criteria->compare('rm2_dc2_out',$this->rm2_dc2_out,true);
		$criteria->compare('rm2_dc3_out',$this->rm2_dc3_out,true);
		$criteria->compare('rm2_len',$this->rm2_len,true);
		$criteria->compare('rm2_wth',$this->rm2_wth,true);
		$criteria->compare('rm3_out',$this->rm3_out,true);
		$criteria->compare('rm3_dc1_out',$this->rm3_dc1_out,true);
		$criteria->compare('rm3_dc2_out',$this->rm3_dc2_out,true);
		$criteria->compare('rm3_len',$this->rm3_len,true);
		$criteria->compare('rm3_wth',$this->rm3_wth,true);
		$criteria->compare('rm4_out',$this->rm4_out,true);
		$criteria->compare('rm4_dc1_out',$this->rm4_dc1_out,true);
		$criteria->compare('rm4_dc2_out',$this->rm4_dc2_out,true);
		$criteria->compare('rm4_dc3_out',$this->rm4_dc3_out,true);
		$criteria->compare('rm4_len',$this->rm4_len,true);
		$criteria->compare('rm4_wth',$this->rm4_wth,true);
		$criteria->compare('rm5_out',$this->rm5_out,true);
		$criteria->compare('rm5_dc1_out',$this->rm5_dc1_out,true);
		$criteria->compare('rm5_dc2_out',$this->rm5_dc2_out,true);
		$criteria->compare('rm5_dc3_out',$this->rm5_dc3_out,true);
		$criteria->compare('rm5_len',$this->rm5_len,true);
		$criteria->compare('rm5_wth',$this->rm5_wth,true);
		$criteria->compare('rm6_out',$this->rm6_out,true);
		$criteria->compare('rm6_dc1_out',$this->rm6_dc1_out,true);
		$criteria->compare('rm6_dc2_out',$this->rm6_dc2_out,true);
		$criteria->compare('rm6_dc3_out',$this->rm6_dc3_out,true);
		$criteria->compare('rm6_len',$this->rm6_len,true);
		$criteria->compare('rm6_wth',$this->rm6_wth,true);
		$criteria->compare('rm7_out',$this->rm7_out,true);
		$criteria->compare('rm7_dc1_out',$this->rm7_dc1_out,true);
		$criteria->compare('rm7_dc2_out',$this->rm7_dc2_out,true);
		$criteria->compare('rm7_dc3_out',$this->rm7_dc3_out,true);
		$criteria->compare('rm7_len',$this->rm7_len,true);
		$criteria->compare('rm7_wth',$this->rm7_wth,true);
		$criteria->compare('rm8_out',$this->rm8_out,true);
		$criteria->compare('rm8_dc1_out',$this->rm8_dc1_out,true);
		$criteria->compare('rm8_dc2_out',$this->rm8_dc2_out,true);
		$criteria->compare('rm8_dc3_out',$this->rm8_dc3_out,true);
		$criteria->compare('rm8_len',$this->rm8_len,true);
		$criteria->compare('rm8_wth',$this->rm8_wth,true);
		$criteria->compare('rm9_out',$this->rm9_out,true);
		$criteria->compare('rm9_dc1_out',$this->rm9_dc1_out,true);
		$criteria->compare('rm9_dc2_out',$this->rm9_dc2_out,true);
		$criteria->compare('rm9_dc3_out',$this->rm9_dc3_out,true);
		$criteria->compare('rm9_len',$this->rm9_len,true);
		$criteria->compare('rm9_wth',$this->rm9_wth,true);
		$criteria->compare('rms',$this->rms);
		$criteria->compare('rooms_plus',$this->rooms_plus);
		$criteria->compare('s_r',$this->s_r,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('yr',$this->yr);
		$criteria->compare('type_own1_out',$this->type_own1_out,true);
		$criteria->compare('tour_url',$this->tour_url,true);
		$criteria->compare('bath_tot',$this->bath_tot);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('community_code',$this->community_code,true);
		$criteria->compare('rm12_dc2_out',$this->rm12_dc2_out,true);
		$criteria->compare('rm3_dc3_out',$this->rm3_dc3_out,true);
		$criteria->compare('acres',$this->acres,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return House the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
