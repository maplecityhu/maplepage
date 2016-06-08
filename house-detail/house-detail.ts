import {Page, NavController, NavParams,Platform} from 'ionic-angular';
import {OnInit,Component} from '@angular/core';;
//import {Geolocation} from 'ionic-native';
import {SocialSharing} from 'ionic-native';
import {MapleRestData} from '../../providers/maple-rest-data/maple-rest-data';
import {SchoolSearchPage} from './pages/school-search/school-search';

/*
  Generated class for the HouseDetailPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/house-detail/house-detail.html',
})
export class HouseDetailPage implements OnInit {
  private nav;
  private parms: Object;
  private section: string = "summary";
  private isAndroid: boolean = false;
  private house = {
			id: '',  // => 'ID',
			name: '', // => '名称',
			prepay: '', // => '首付',
			total_price: '', // => '总价',
			subject_id: '', // => '所属项目',
			accessDate: '', // => '挂牌时间',
			location: '', // => '地址',
			introduction: '', // => '描述',
			house_image: '', // => '房源图片',
			image_list: '', // => '组图',
			video_url: '', // => '房源视频路径',
			author: '', // => '作者',
			recommend: '', // => '是否推荐',
			city_id: '', // => '城市',
			district_id: '', // => '地区',
			community: '', // => '社区',
			investType_id: '', // => '投资类型',
			propertyType_id: '', // => '物业类型',
			land_area: '', // => '土地面积',
			house_area: '', // => '房屋面积',
			floor_num: '', // => '房屋层数',
			house_style: '', // => '房屋层数',
			bedroom_num: '', // => '卧室数量',
			toilet_num: '', // => '卫生间数量',
			kitchen_num: '', // => '厨房数量',
			park_num: '', // => '停车位数量',
			house_size: '', // => '房屋规格',
			door_direction: '', // => '大门朝向',
			construction_year: '', // => '建造年份',
			zipcode: '', // => '邮编',
			certificate: '', // => '认证房源',
			lift: '', // => '电梯',
			carport: '', // => '车库',
			embassy: '', // => '会客厅',
			mls_code: '', // => 'MLS编号',
			facilities: '', // => '附近设施',
			longitude: '', // => '经度',
			latitude: '', // => '纬度',
			match: '', // => '配套设施',
			is_sell: '', // => '是否售卖',
			a_c: '', // => '是否中央空调',
			central_vac: '', // => '是否中央吸尘',
			gar_spaces: '', // => '是否配套家具',
			basement: '', // => '是否地下室',
			pool: '', // => '是否游泳池',
			fireplace_stove: '', // => '是否壁炉',
			taxes: '', // => '地税',
			tax_year: '', // => '地税年度',
			cross_streets: '', // => '交叉路口',
			heat: '', // => '暖气',
			mls_province: '', // => 'mls省份',
			mls_area: '', // => 'mls地区',
			mls_area_code: '', // => 'mls地区code',
			mls_municipality: '', // => 'mls城市',
			mls_municp_code: '', // => 'mls城市code',
			yr_built: '', // => 'Yr Built',
			sqft: '', // => 'Sqft',
			area: '', // => 'Area',
			area_code: '', // => 'Area Code',
			bsmt1_out: '', // => 'Bsmt1 Out',
			bsmt2_out: '', // => 'Bsmt2 Out',
			br: '', // => 'Br',
			br_plus: '', // => 'Br Plus',
			community_c: '', // => 'Community C',
			cross_st: '', // => 'Cross St',
			elevator: '', // => 'Elevator',
			constr1_out: '', // => 'Constr1 Out',
			constr2_out: '', // => 'Constr2 Out',
			extras: '', // => 'Extras',
			fpl_num: '', // => 'Fpl Num',
			comp_pts: '', // => 'Comp Pts',
			furnished: '', // => 'Furnished',
			fuel: '', // => 'Fuel',
			heating: '', // => 'Heating',
			num_kit: '', // => 'Num Kit',
			kit_plus: '', // => 'Kit Plus',
			level1: '', // => 'Level1',
			level10: '', // => 'Level10',
			level11: '', // => 'Level11',
			level12: '', // => 'Level12',
			level2: '', // => 'Level2',
			level3: '', // => 'Level3',
			level4: '', // => 'Level4',
			level5: '', // => 'Level5',
			level6: '', // => 'Level6',
			level7: '', // => 'Level7',
			level8: '', // => 'Level8',
			level9: '', // => 'Level9',
			lp_dol: '', // => 'Lp Dol',
			depth: '', // => 'Depth',
			front_ft: '', // => 'Front Ft',
			lotsz_code: '', // => 'Lotsz Code',
			ml_num: '', // => 'Ml Num',
			municipality: '', // => 'Municipality',
			municipality_code: '', // => 'Municipality Code',
			pix_updt: '', // => 'Pix Updt',
			zip: '', // => 'Zip',
			prop_feat1_out: '', // => 'Prop Feat1 Out',
			prop_feat2_out: '', // => 'Prop Feat2 Out',
			prop_feat3_out: '', // => 'Prop Feat3 Out',
			prop_feat4_out: '', // => 'Prop Feat4 Out',
			prop_feat5_out: '', // => 'Prop Feat5 Out',
			prop_feat6_out: '', // => 'Prop Feat6 Out',
			county: '', // => 'County',
			ad_text: '', // => 'Ad Text',
			rm1_out: '', // => 'Rm1 Out',
			rm1_dc1_out: '', // => 'Rm1 Dc1 Out',
			rm1_dc2_out: '', // => 'Rm1 Dc2 Out',
			rm1_dc3_out: '', // => 'Rm1 Dc3 Out',
			rm1_len: '', // => 'Rm1 Len',
			rm1_wth: '', // => 'Rm1 Wth',
			rm10_out: '', // => 'Rm10 Out',
			rm10_dc1_out: '', // => 'Rm10 Dc1 Out',
			rm10_dc2_out: '', // => 'Rm10 Dc2 Out',
			rm10_dc3_out: '', // => 'Rm10 Dc3 Out',
			rm10_wth: '', // => 'Rm10 Wth',
			rm11_out: '', // => 'Rm11 Out',
			rm11_dc1_out: '', // => 'Rm11 Dc1 Out',
			rm11_dc2_out: '', // => 'Rm11 Dc2 Out',
			rm11_dc3_out: '', // => 'Rm11 Dc3 Out',
			rm10_len: '', // => 'Rm10 Len',
			rm11_len: '', // => 'Rm11 Len',
			rm11_wth: '', // => 'Rm11 Wth',
			rm12_out: '', // => 'Rm12 Out',
			rm12_dc1_out: '', // => 'Rm12 Dc1 Out',
			rm12_dc3_out: '', // => 'Rm12 Dc3 Out',
			rm12_len: '', // => 'Rm12 Len',
			rm12_wth: '', // => 'Rm12 Wth',
			rm2_out: '', // => 'Rm2 Out',
			rm2_dc1_out: '', // => 'Rm2 Dc1 Out',
			rm2_dc2_out: '', // => 'Rm2 Dc2 Out',
			rm2_dc3_out: '', // => 'Rm2 Dc3 Out',
			rm2_len: '', // => 'Rm2 Len',
			rm2_wth: '', // => 'Rm2 Wth',
			rm3_out: '', // => 'Rm3 Out',
			rm3_dc1_out: '', // => 'Rm3 Dc1 Out',
			rm3_dc2_out: '', // => 'Rm3 Dc2 Out',
			rm3_len: '', // => 'Rm3 Len',
			rm3_wth: '', // => 'Rm3 Wth',
			rm4_out: '', // => 'Rm4 Out',
			rm4_dc1_out: '', // => 'Rm4 Dc1 Out',
			rm4_dc2_out: '', // => 'Rm4 Dc2 Out',
			rm4_dc3_out: '', // => 'Rm4 Dc3 Out',
			rm4_len: '', // => 'Rm4 Len',
			rm4_wth: '', // => 'Rm4 Wth',
			rm5_out: '', // => 'Rm5 Out',
			rm5_dc1_out: '', // => 'Rm5 Dc1 Out',
			rm5_dc2_out: '', // => 'Rm5 Dc2 Out',
			rm5_dc3_out: '', // => 'Rm5 Dc3 Out',
			rm5_len: '', // => 'Rm5 Len',
			rm5_wth: '', // => 'Rm5 Wth',
			rm6_out: '', // => 'Rm6 Out',
			rm6_dc1_out: '', // => 'Rm6 Dc1 Out',
			rm6_dc2_out: '', // => 'Rm6 Dc2 Out',
			rm6_dc3_out: '', // => 'Rm6 Dc3 Out',
			rm6_len: '', // => 'Rm6 Len',
			rm6_wth: '', // => 'Rm6 Wth',
			rm7_out: '', // => 'Rm7 Out',
			rm7_dc1_out: '', // => 'Rm7 Dc1 Out',
			rm7_dc2_out: '', // => 'Rm7 Dc2 Out',
			rm7_dc3_out: '', // => 'Rm7 Dc3 Out',
			rm7_len: '', // => 'Rm7 Len',
			rm7_wth: '', // => 'Rm7 Wth',
			rm8_out: '', // => 'Rm8 Out',
			rm8_dc1_out: '', // => 'Rm8 Dc1 Out',
			rm8_dc2_out: '', // => 'Rm8 Dc2 Out',
			rm8_dc3_out: '', // => 'Rm8 Dc3 Out',
			rm8_len: '', // => 'Rm8 Len',
			rm8_wth: '', // => 'Rm8 Wth',
			rm9_out: '', // => 'Rm9 Out',
			rm9_dc1_out: '', // => 'Rm9 Dc1 Out',
			rm9_dc2_out: '', // => 'Rm9 Dc2 Out',
			rm9_dc3_out: '', // => 'Rm9 Dc3 Out',
			rm9_len: '', // => 'Rm9 Len',
			rm9_wth: '', // => 'Rm9 Wth',
			rms: '', // => 'Rms',
			rooms_plus: '', // => 'Rooms Plus',
			s_r: '', // => 'S R',
			style: '', // => 'Style',
			yr: '', // => 'Yr',
			type_own1_out: '', // => 'Type Own1 Out',
			tour_url: '', // => 'Tour Url',
			bath_tot: '', // => 'Bath Tot',
			addr: '', // => 'Addr',
			community_code: '', // => 'Community Code',
			rm12_dc2_out: '', // => 'Rm12 Dc2 Out',
			rm3_dc3_out: '', // => 'Rm3 Dc3 Out',
			acres: '', // => 'Acres',
      };


  static get parameters() {
    return [[NavController], [NavParams], [MapleRestData]];
  }

  constructor(nav, private navParams: NavParams, private mapleRestData: MapleRestData,private platform: Platform) {
    this.nav = nav;
    this.parms = { 'id': navParams.data };
     //this.isAndroid = platform.is('android');

  }
  swiperOptions = {
    loop: true,
    //pager: true,
    speed: 4000,
    autoplay: 300
  };

  static COMP_PTS = {"N":"北","S":"南","W":"西","E":"东"};
  static S_R = {"Sale":"出售","Lease":"出租"};

  ngOnInit() {
    this.getResult('index.php?r=ngget/getHouseDetail');
  }

  getResult(url) {
    this.mapleRestData.load(url, this.parms).subscribe(
      data => { this.house = data; console.log(this.house)}
    )
  }
  
  converto2a(val) {
     return Array.from(val);
    //return imgsmall;
  }

  smallImg(img) {
    return img.replace('uploads', this.project.replaceurl);
  }
  
  getPriceTxt() {
    let priceTxt;
    
    if ( this.house.s_r == "Sale")
      priceTxt= number_format(this.house.lp_dol/10000,0) + "万加币";
    else
      priceTxt = this.house.lp_dol + "加元/月";

    return priceTxt;
  }

  getPropertyTxt() {
      let propertyTxt = this.house.prop_feat1_out;
      
      if ( this.house.prop_feat2_out!="")
        propertyTxt = propertyTxt + " , " + this.house.prop_feat2_out;
      if ( this.house.prop_feat3_out!="")
        propertyTxt = propertyTxt + " , " + this.house.prop_feat3_out;
      if ( this.house.prop_feat4_out!="")
        propertyTxt = propertyTxt + " , " + this.house.prop_feat4_out;
      if ( this.house.prop_feat5_out!="")
        propertyTxt = propertyTxt + " , " + this.house.prop_feat5_out;
      if ( this.house.prop_feat6_out!="")
        propertyTxt = propertyTxt + " , " + this.house.prop_feat6_out;
      
      return propertyTxt;
   }

  getRoomDesc(dc1, dc2, dc3) {
      let roomDesc = dc1;
      
      if ( dc2 != "")
        roomDesc = roomDesc + " , " + dc2;
      if ( dc3 != "")
        roomDesc = roomDesc + " , " + dc3;
     
      return roomDesc;
   }

  gotoSchool() {
    this.nav.push(SchoolSearchPage);
  }

  gotoVideo() {
    window.open(this.house.video_url);
  }


   share(message, subject, file, link) {
       // this.platform.ready().then(() => {
            //window.plugins.socialsharing.share(message, subject, file, link);
            SocialSharing.share(message, subject, file, link);
           
       // });
    }
 
    shareViaTwitter(message, image, link) {
        // this.platform.ready().then(() => {
        //     if(window.plugins.socialsharing) {
        //         window.plugins.socialsharing.canShareVia("twitter", message, null, image, link, function(result) {
        //             window.plugins.socialsharing.shareViaTwitter(message, image, link);
        //         }, function(error) {
        //             console.error(error);
        //         });
        //     }
        // });
    }



}