<?php
/**
 * 房源控制器
 *
 * @author        shuguang <5565907@qq.com>
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS.Controller
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */
class HouseController extends XFrontBase
{
    static $searchData = array(
        'cd5' => array(
            1 => array('min'=>0, 'max'=>30),
            2 => array('min'=>30, 'max'=>50),
            3 => array('min'=>50, 'max'=>100),
            4 => array('min'=>100, 'max'=>150),
            5 => array('min'=>150, 'max'=>300),
            6 => array('min'=>300, 'max'=>''),
        ),
        'cd6' => array(
            1 => array('min'=>0, 'max'=>700),
            2 => array('min'=>700, 'max'=>1100),
            3 => array('min'=>1100, 'max'=>1500),
            4 => array('min'=>1500, 'max'=>2000),
            5 => array('min'=>2000, 'max'=>2500),
			6 => array('min'=>2500, 'max'=>3000),
			7 => array('min'=>3000, 'max'=>3500),
			8 => array('min'=>3500, 'max'=>4000),
			9 => array('min'=>4000, 'max'=>''),
        ),
        'cd7' => array(
            1 => array('min'=>0, 'max'=>1000),
            2 => array('min'=>1000, 'max'=>2000),
            3 => array('min'=>2000, 'max'=>3000),
            4 => array('min'=>3000, 'max'=>4000),
            5 => array('min'=>4000, 'max'=>5000),
            6 => array('min'=>5000, 'max'=>6000),
            7 => array('min'=>6000, 'max'=>''),
        ),
        'cd9' => array(
            1 => array('min'=>0, 'max'=>1970),
            2 => array('min'=>1970, 'max'=>1980),
            3 => array('min'=>1980, 'max'=>1990),
            4 => array('min'=>1990, 'max'=>2000),
            5 => array('min'=>2000, 'max'=>2005),
            6 => array('min'=>2005, 'max'=>2010),
            7 => array('min'=>2010, 'max'=>''),
        ),
    );

    /**
     * 房源列表
     */
    public function actionIndex() {
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/house.css');
        $city_id           = Yii::app()->request->getQuery('cd1', 0);
        $district_id       = Yii::app()->request->getQuery('cd2', 0); //used to be Region search. Change it to municipality search
        $investType_id     = Yii::app()->request->getQuery('cd3', 0);
        $propertyType_id   = Yii::app()->request->getQuery('cd4', 0);
        $total_price       = Yii::app()->request->getQuery('cd5', 0);
        $house_area        = Yii::app()->request->getQuery('cd6', 0);
        $land_area         = Yii::app()->request->getQuery('cd7', 0);
        $bedroom_num       = Yii::app()->request->getQuery('cd8', 0);
        $construction_year = Yii::app()->request->getQuery('cd9', 0);
        $prop_featx_out    = Yii::app()->request->getQuery('cd10', 0);
		$prop_featx_out2   = Yii::app()->request->getQuery('cd11', 0);
		$prop_featx_out3   = Yii::app()->request->getQuery('cd12', 0);
		$type 			   = Yii::app()->request->getQuery('type', 'sale');
		$bath_tot   = Yii::app()->request->getQuery('cd13', 0);
		$style   = Yii::app()->request->getQuery('cd14', 0);
		$comp_pts   = Yii::app()->request->getQuery('cd15', 0);
		$gar_spaces   = Yii::app()->request->getQuery('cd16', 0);
		$bsmt1_out   = Yii::app()->request->getQuery('cd17', 0);
		$pool   = Yii::app()->request->getQuery('cd18', 0);
        $time_sort         = Yii::app()->request->getQuery('time_sort', 'DESC');
        $price_sort        = Yii::app()->request->getQuery('price_sort');
        $type        = Yii::app()->request->getQuery('type');
        $diy_word          = null;

        //$city_list = City::model()->findAll(array('order'=>'id ASC'));
        $city_list = City::model()->findAll(array('condition'=>'avail=1','order'=>'id ASC'));
        //$province_list  = Province::model()->findAll(array('condition'=>'avail=1','order'=>'id ASC'));

        if(!empty($city_id)){
            $district_list = District::model()->findAll('city_id=:city_id',array(':city_id'=>$city_id));
        }else{
            $district_list = District::model()->findAll();
        }
        $investType_list = InvestType::model()->findAll();
        $propertyType_list = PropertyType::model()->findAll();

        //按搜索条件查询房源信息
        $criteria = new CDbCriteria();
		
		//Search By Sale or Lease Type
		//$criteria->addCondition('s_r ="Sale"');
		
	    if ( $type == "sale" )  {
			$criteria->addCondition('s_r = "Sale"');
		}
		elseif ( $type == "rent" ){
			$criteria->addCondition('s_r = "Lease"');
		}

		//省份
        //if(!empty($city_id)) $criteria->addCondition('area!=""');
        if(!empty($city_id)) $criteria->addCondition('city_id='.$city_id);
		//地区

	 if(!empty($district_id)){
	
		$criteria->addCondition('t.municipality ="'.$district_id.'"');

	}
		
//挂牌时间

		if(!empty($investType_id)){
		
			if($investType_id==1){
				//数据
				$criteria->addCondition('DATE_SUB(CURDATE(), INTERVAL 1 DAY) <= date(pix_updt)');
			}
			elseif($investType_id==2){
				//查询7数据
				$criteria->addCondition('DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(pix_updt)');
			}
			elseif($investType_id==3){
				//查询1月数据
				$criteria->addCondition('DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= date(pix_updt)');
			}
			elseif($investType_id==4){
				//查询三月数据
				$criteria->addCondition('DATE_SUB(CURDATE(), INTERVAL 90 DAY) <= date(pix_updt)');
			}
		}
		
		
if(!empty($prop_featx_out)){
		
	if($prop_featx_out==1){
    $criteria->addCondition('prop_feat1_out like "%Waterfront%" or prop_feat2_out like "%Waterfront%" or prop_feat3_out like "%Waterfront%" or prop_feat4_out like "%Waterfront%" or prop_feat5_out like "%Waterfront%" or prop_feat6_out like "%Waterfront%" ');
	}
	elseif($prop_featx_out==2){
    $criteria->addCondition('prop_feat1_out like "%Pond%" or prop_feat2_out like "%Pond%" or prop_feat3_out like "%Pond%" or prop_feat4_out like "%Pond%" or prop_feat5_out like "%Pond%" or prop_feat6_out like "%Pond%" ');
	}
	elseif($prop_featx_out==3){
    $criteria->addCondition('prop_feat1_out like "%Stream%" or prop_feat2_out like "%Stream%" or prop_feat3_out like "%Stream%" or prop_feat4_out like "%Stream%" or prop_feat5_out like "%Stream%" or prop_feat6_out like "%Stream%" ');
	}
	elseif($prop_featx_out==4){
    $criteria->addCondition('prop_feat1_out like "%River%" or prop_feat2_out like "%River%" or prop_feat3_out like "%River%" or prop_feat4_out like "%River%" or prop_feat5_out like "%River%" or prop_feat6_out like "%River%" ');
	}
	elseif($prop_featx_out==5){
    $criteria->addCondition('prop_feat1_out like "%Lake%" or prop_feat2_out like "%Lake%" or prop_feat3_out like "%Lake%" or prop_feat4_out like "%Lake%" or prop_feat5_out like "%Lake%" or prop_feat6_out like "%Lake%" ');
	}
	elseif($prop_featx_out==6){
    $criteria->addCondition('prop_feat1_out like "%Marina%" or prop_feat2_out like "%Marina%" or prop_feat3_out like "%Marina%" or prop_feat4_out like "%Marina%" or prop_feat5_out like "%Marina%" or prop_feat6_out like "%Marina%" ');
	}		
}
		
if(!empty($prop_featx_out2)){
		
	if($prop_featx_out2==1){
    $criteria->addCondition('prop_feat1_out like "%Treed%" or prop_feat2_out like "%Treed%" or prop_feat3_out like "%Treed%" or prop_feat4_out like "%Treed%" or prop_feat5_out like "%Treed%" or prop_feat6_out like "%Treed%" ');
	}
	elseif($prop_featx_out2==2){
    $criteria->addCondition('prop_feat1_out like "%Wooded%" or prop_feat2_out like "%Wooded%" or prop_feat3_out like "%Wooded%" or prop_feat4_out like "%Wooded%" or prop_feat5_out like "%Wooded%" or prop_feat6_out like "%Wooded%" ');
	}
	elseif($prop_featx_out2==3){
    $criteria->addCondition('prop_feat1_out like "%Grnbelt%" or prop_feat2_out like "%Grnbelt%" or prop_feat3_out like "%Grnbelt%" or prop_feat4_out like "%Grnbelt%" or prop_feat5_out like "%Grnbelt%" or prop_feat6_out like "%Grnbelt%" ');
	}
	elseif($prop_featx_out2==4){
    $criteria->addCondition('prop_feat1_out like "%Conserv%" or prop_feat2_out like "%Conserv%" or prop_feat3_out like "%Conserv%" or prop_feat4_out like "%Conserv%" or prop_feat5_out like "%Conserv%" or prop_feat6_out like "%Conserv%" ');
	}
	elseif($prop_featx_out2==5){
    $criteria->addCondition('prop_feat1_out like "%Ravine%" or prop_feat2_out like "%Ravine%" or prop_feat3_out like "%Ravine%" or prop_feat4_out like "%Ravine%" or prop_feat5_out like "%Ravine%" or prop_feat6_out like "%Ravine%" ');
	}
	
}		
//
if(!empty($prop_featx_out3)){
		
	if($prop_featx_out3==1){
    $criteria->addCondition('prop_feat1_out like "%School%" or prop_feat2_out like "%School%" or prop_feat3_out like "%School%" or prop_feat4_out like "%School%" or prop_feat5_out like "%School%" or prop_feat6_out like "%School%" ');
	}
	elseif($prop_featx_out3==2){
    $criteria->addCondition('prop_feat1_out like "%Hospital%" or prop_feat2_out like "%Hospital%" or prop_feat3_out like "%Hospital%" or prop_feat4_out like "%Hospital%" or prop_feat5_out like "%Hospital%" or prop_feat6_out like "%Hospital%" ');
	}
	elseif($prop_featx_out3==3){
    $criteria->addCondition('prop_feat1_out like "%Public Transit%" or prop_feat2_out like "%Public Transit%" or prop_feat3_out like "%Public Transit%" or prop_feat4_out like "%Public Transit%" or prop_feat5_out like "%Public Transit%" or prop_feat6_out like "%Public Transit%" ');
	}
	elseif($prop_featx_out3==4){
    $criteria->addCondition('prop_feat1_out like "%Park%" or prop_feat2_out like "%Park%" or prop_feat3_out like "%Park%" or prop_feat4_out like "%Park%" or prop_feat5_out like "%Park%" or prop_feat6_out like "%Park%" ');
	}
	elseif($prop_featx_out3==5){
    $criteria->addCondition('prop_feat1_out like "%Golf%" or prop_feat2_out like "%Golf%" or prop_feat3_out like "%Golf%" or prop_feat4_out like "%Golf%" or prop_feat5_out like "%Golf%" or prop_feat6_out like "%Golf%" ');
	}
	elseif($prop_featx_out3==6){
    $criteria->addCondition('prop_feat1_out like "%Library%" or prop_feat2_out like "%Library%" or prop_feat3_out like "%Library%" or prop_feat4_out like "%Library%" or prop_feat5_out like "%Library%" or prop_feat6_out like "%Library%" ');
	}		
}

//物业类型
        if(!empty($propertyType_id)) {
			$criteria->addCondition('propertyType_id="'.$propertyType_id.'"');
	
		
		}

		if(strpos($total_price, '-') !== false  ){
		
			 
			$price = explode('-', $total_price);
			$minPrice = intval($price[0]) *10000;
			$maxPrice = intval($price[1]) *10000;
			if ($maxPrice != 0 || $minPrice != 0) {
			    if ($maxPrice > $minPrice) {
					$criteria->addCondition('lp_dol <'.$maxPrice);
				}
			
				$criteria->addCondition('lp_dol >='.$minPrice);
			}
		}

	
		//房屋面积
        if(!empty($house_area)){
		 
		    if($house_area==1){
			$criteria->addCondition('house_area<700 and house_area > 1');
			}
		    elseif($house_area==2){
			$criteria->addCondition('house_area>=700 and house_area<1100');
			}
		    elseif($house_area==3){
			$criteria->addCondition('house_area>=1100 and house_area<1500');
			}
		    elseif($house_area==4){
			$criteria->addCondition('house_area>=1500 and house_area<2000');
			}
		    elseif($house_area==5){
			$criteria->addCondition('house_area>=2000 and house_area<2500');
			}
		    elseif($house_area==6){
			$criteria->addCondition('house_area>=2500 and house_area<3000');
			}
		    elseif($house_area==7){
			$criteria->addCondition('house_area>=3000 and house_area<3500');
			}
		    elseif($house_area==8){
			$criteria->addCondition('house_area>=3500 and house_area<4000');
			}
		    elseif($house_area==9){
			$criteria->addCondition('house_area>=4000');
			}
			
        }
		//土地面积
        if(!empty($land_area)){
		
		  if($land_area==1){
		  $criteria->addCondition('land_area<2000 and land_area > 100');
		  }
		  elseif($land_area==2){
		  $criteria->addCondition('land_area>=2000 and land_area<4000');
		  }
		  elseif($land_area==3){
		  $criteria->addCondition('land_area>=4000 and land_area<6000');
		  }
		  elseif($land_area==4){
		  $criteria->addCondition('land_area>=6000 and land_area<12000');
		  }
		  elseif($land_area==5){
		  $criteria->addCondition('land_area>=12000 and land_area<20000');
		  }
		  elseif($land_area==6){
		  $criteria->addCondition('land_area>=20000 and land_area<43560');
		  }
		  elseif($land_area==7){
		  $criteria->addCondition('land_area>=43560');
		  }
		  
		  
        }
        if(!empty($bedroom_num)){
            if($bedroom_num <= 5){
                $criteria->addCondition('br>'.$bedroom_num);
            }else{
                $criteria->addCondition('br>='.$bedroom_num);
            }
        }
        if(!empty($construction_year)){
            if(!empty(self::$searchData['cd9'][$construction_year]['min'])){
                $criteria->addCondition('yr_built>'.self::$searchData['cd9'][$construction_year]['min']);
            }
            if(!empty(self::$searchData['cd9'][$construction_year]['max'])){
                $criteria->addCondition('yr_built<='.self::$searchData['cd9'][$construction_year]['max']);
            }
        }

		
        if(!empty($bath_tot)){
            $criteria->addCondition('bath_tot>"'.$bath_tot.'"');
        }
		
        if(!empty($style)){
		    if($style=="1"){
			 $criteria->addCondition('style="Bungalow" or style="Bungalow-Raised" or style="Raised-Bungalow"');
			}
		    elseif($style=="2"){
			 $criteria->addCondition('style="1 1/2 Storey"');
			}
			elseif($style=="3"){
			 $criteria->addCondition('style="2-Storey"');
			}
			elseif($style=="4"){
			 $criteria->addCondition('style="2 1/2 Storey"');
			}
			elseif($style=="5"){
			 $criteria->addCondition('style="3-Storey"');
			}
        }
        if(!empty($comp_pts)){
		    if($comp_pts=="1"){
			$criteria->addCondition('comp_pts="S"');
			}
		    elseif($comp_pts=="2"){
			$criteria->addCondition('comp_pts="N"');
			}
		    elseif($comp_pts=="3"){
			$criteria->addCondition('comp_pts="E"');
			}
		    elseif($comp_pts=="4"){
			$criteria->addCondition('comp_pts="W"');
			}
        }
        if(!empty($gar_spaces)){
            $criteria->addCondition('gar_spaces >"'.$gar_spaces.'"');
        }
        if(!empty($bsmt1_out)){
            $criteria->addCondition('bsmt1_out="'.$bsmt1_out.'"');
        }
        if(!empty($pool)){
		    if($pool=="1"){
			 //$criteria->addCondition('pool="Abv" or pool="Grnd" or pool="Indoor" or pool="Inground"');
			 $criteria->addCondition('pool like "%pool%"');
			}
           elseif($pool=="2"){
		   $criteria->addCondition('pool="" or pool="None"');
		   }
        }
		
		
		
        #$criteria->order = 'id DESC';
        $criteria->order = 'city_id ASC,lp_dol DESC';
        if(!empty($time_sort)){
            $criteria->order = 'pix_updt '.$time_sort.', city_id ASC,lp_dol DESC';
        }
        if(!empty($price_sort)){
            $criteria->order = 'lp_dol '.$price_sort;
        }
		
	$criteria->with = array('mname','propertyType','city');
        $count = House::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize = 10;
        $pager->applyLimit($criteria);
        $house_list = House::model()->findAll($criteria);
		
		//generate cookie list for previous and next page
		
		foreach ($house_list as $val) {
			//generate ml_num for cookielist
			$ml_list = $ml_list.",".$val->ml_num;
			
		}
		
		$listcookie = "fzd_houselist";
		if(!isset($_COOKIE[$listcookie])){
            setcookie($listcookie, "", time() - 3600);
		   
        }
		setcookie($listcookie, $ml_list, time() + (86400 * 30), "/");
		//end of adding cookie
		
        $collection_list = array();
        if($this->_account['userId']){
            $collect_model = Collect::model()->find('user_id=:user_id', array(':user_id'=>$this->_account['userId']));
            if(!empty($collect_model)){
                $collection_list = explode(',', $collect_model->collection);
            }
        }

        $data = array(
            'cd1'               => $city_id,
            'cd2'               => $district_id,
            'cd3'               => $investType_id,
            'cd4'               => $propertyType_id,
            'cd5'               => $total_price,
            'cd6'               => $house_area,
            'cd7'               => $land_area,
            'cd8'               => $bedroom_num,
            'cd9'               => $construction_year,
            'cd10'              => $prop_featx_out,
            'cd11'              => $prop_featx_out2,
            'cd12'              => $prop_featx_out3,
            'cd13'              => $bath_tot,
            'cd14'              => $style,
            'cd15'              => $comp_pts,
            'cd16'              => $gar_spaces,
            'cd17'              => $bsmt1_out,
            'cd18'              => $pool,
            'time_sort'         => $time_sort,
            'price_sort'        => $price_sort,
            'diy_price'         => json_encode($diy_price),
            'city_list'         => $city_list,
            'district_list'     => $district_list,
            'investType_list'   => $investType_list,
            'propertyType_list' => $propertyType_list,
            'count'             => $count,
            'house_list'        => $house_list,
            'collection_list'   => $collection_list,
            "pages"             => $pager,
            "type"             => $type
        );
        $this->render('index',$data);
    }

    /**
     * 房源详情
     */
    public function actionView($id){
      	ini_set("log_errors", 1);
        ini_set("error_log", "/tmp/php-error.log");


        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/house.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/flowplayer-3.2.11.min.js');

        $cookies = Yii::app()->request->getCookies();
 
		$criteria = new CDbCriteria();
		$criteria->addCondition('t.id="'.$id.'"');
		$criteria->with = array('mname','propertyType');
		
        //$house = House::model()->find('id=:id',array(':id'=>$id));
		$house = House::model()->find($criteria);
 		//error_log($house->pool);

        $layouts = Layout::model()->findAll('house_id=:house_id',array(':house_id'=>$id));
        $matches = Match::model()->findAll();
		
		//Generate cookie for viewed house
	    if(!empty($cookies['fzd_house'])){
            $house_ids = explode(',', $cookies['fzd_house']->value);
            array_push($house_ids, $house->ml_num);
            $house_ids = array_unique($house_ids);
			$arr = array_slice($house_ids, -10); //chop to last 10 items
            $cookie_str = implode(',', $arr);
			
            $cookie = new CHttpCookie('fzd_house',$cookie_str);
            $cookie->expire = time() + 60 * 60 * 24 * 30;  //有限期30天
            Yii::app()->request->cookies['fzd_house'] = $cookie;
        }else{
            $cookie = new CHttpCookie('fzd_house',$house->ml_num);
            $cookie->expire = time() + 60 * 60 * 24 * 30;  //有限期30天
            Yii::app()->request->cookies['fzd_house'] = $cookie;
        }

        $collection_list = array();
        if($this->_account['userId']){
            $collect_model = Collect::model()->find('user_id=:user_id', array(':user_id'=>$this->_account['userId']));
            if(!empty($collect_model)){
                $collection_list = explode(',', $collect_model->collection);
            }
        }

//附件房源
        $criteria=new CDbCriteria;
        $criteria->select='id,addr,lp_dol,house_image';
        $criteria->condition='zip=:zip AND id<>:id';
        $criteria->params=array(':zip'=>$house->zip, ':id'=>$id);
        $criteria->order='id DESC';
        $nearby_houses=House::model()->findAll($criteria);

//浏览记录
        $cookies = Yii::app()->request->getCookies();
        $house_ids = explode(',', $cookies['addr']->value);
        $criteria=new CDbCriteria;
        $criteria->select='id,addr,lp_dol,house_image';
        $criteria->addInCondition('id', $house_ids);
        $view_history=House::model()->findAll($criteria);

        $exchangeRate = 0;
        $exchangeRateList = ExchangeRate::model()->findAll();
        if(!empty($exchangeRateList)){
            $exchangeRate = $exchangeRateList[0]->rate;
        }

        $data = array(
            'house'           => $house,
            'layouts'         => $layouts,
            'matches'         => $matches,
            'collection_list' => $collection_list,
            'nearby_houses'   => $nearby_houses,
            'view_history'    => $view_history,
            'exchangeRate'    => $exchangeRate
        );
        $this->render('view', $data);
    }

    public function actionCollection(){
        $id = Yii::app()->request->getPost('id');
        if(!empty($this->_account['userId'])){
            $collect_model = Collect::model()->find('user_id=:user_id', array(':user_id'=>$this->_account['userId']));
            if(!empty($collect_model)){
                $collection = $collect_model->collection;
                $collection = explode(',', $collection);
                if(in_array($id, $collection)){
                    echo CJSON::encode(array('status'=>500, 'msg'=>'您已收藏过该房源'));
                }else{
                    array_push($collection, $id);
                    $collection = implode(',', $collection);
                    $collect_model->collection = $collection;
                    if($collect_model->save()){
                        echo CJSON::encode(array('status'=>200, 'msg'=>'收藏成功'));
                    }else{
                        echo CJSON::encode(array('status'=>500, 'msg'=>'收藏失败'));
                    }
                }
            }else{
                $collection = array();
                array_push($collection, $id);
                $collection = implode(',', $collection);
                $collect_model = new Collect();
                $collect_model->user_id = $this->_account['userId'];
                $collect_model->collection = $collection;
                if($collect_model->save()){
                    echo CJSON::encode(array('status'=>200, 'msg'=>'收藏成功'));
                }else{
                    echo CJSON::encode(array('status'=>500, 'msg'=>'收藏失败'));
                }
            }
        }else{
            echo CJSON::encode(array('status'=>404, 'msg'=>'您还未登录，请先登录'));
        }
    }

    public function actionCompare(){
        //$this->layout = ' ';
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/layout.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/compare.css');
        $data = Yii::app()->request->getQuery('id');
        $ids = explode(',',$data);
        $criteria = new CDbCriteria;
        $criteria->addInCondition('id', $ids);
        $house_list = House::model()->findAll($criteria);
        $link_list = Link::model()->findAll();
        $matches = Match::model()->findAll();
        $this->render('compare', array(
            'house_list'=>$house_list,
            'link_list' => $link_list,
            'matches'=>$matches
        ));
    }

	public function actionGetCityList(){
		$db = Yii::app()->db;
		//$result = array();
		$term = trim($_GET['term']);
		$city_id = trim($_GET['cd1']);
		$chinese = preg_match("/\p{Han}+/u", $term);
		//
		
		//Generate Count by municipality
		if ( $city_id == '0' ) {
			
			if ($chinese) { //if province = 0 and chinese search
			
				$sql = "
				SELECT m.municipality citye,m.municipality_cname cityc,m.province provincee,c.name provincec 
				FROM h_mname m, h_city c 
				WHERE  m.province = c.englishname 
				AND  m.municipality_cname like '".$term."%' 
				AND  m.count > 10 order by count desc limit 10;
				";			
			
			} else { //if province = 0  and english search
			
				$sql = "
				SELECT m.municipality citye,m.municipality_cname cityc,m.province provincee,c.name provincec 
				FROM h_mname m, h_city c 
				WHERE  m.province = c.englishname 
				AND  municipality like '".$term."%' 
				AND  m.count > 10 order by count desc limit 10;
				";
			}
			
		} else{  //if province is NOT 0
			
			if ($chinese) { //if province = 0 and chinese search			
			
				$sql = "
				SELECT m.municipality citye,m.municipality_cname cityc,m.province provincee,c.name provincec 
				FROM h_mname m, h_city c 
				WHERE m.province = c.englishname 
				AND  c.id=".$city_id." 
				AND m.municipality_cname like '".$term."%'  
				AND  m.count > 10 order by count desc limit 10;
				";		
			} else {
				
				$sql = "
				SELECT m.municipality citye,m.municipality_cname cityc,m.province provincee,c.name provincec 
				FROM h_mname m, h_city c 
				WHERE m.province = c.englishname 
				AND  c.id=".$city_id." 
				AND m.municipality like '".$term."%' 
				AND  m.count > 10 order by count desc limit 10;
				";		
			}
			
		
		
		}
			
		$resultsql = $db->createCommand($sql)->query();
		
		foreach($resultsql as $row){

			$result['id'] = $row["citye"]; 
			if ( $chinese ) {
			  	
				$result['value'] = $row["cityc"].", ".$row["provincec"]; 
				$results[] = $result;
				
			} else {
				$result['value'] = $row["citye"].", ". $row["provincee"]; 
				$results[] = $result;
			}
	
	
		}
		

		 echo json_encode($results);
    
	//Function END  
    }

}
