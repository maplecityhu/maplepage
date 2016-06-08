<link type="text/css" rel="stylesheet" href="http://www.idangero.us/swiper/dist/css/swiper.min.css" media="all" />
<script src="http://www.idangero.us/swiper/dist/js/swiper.min.js"></script>
<style>
.swiper-pagination-bullet { opacity: 1; background: #fff; }
.swiper-pagination-bullet-active { opacity: 1; background: #ff4103; }
.ui-flipswitch { margin: 0px; float: right;}
</style>
 
<!-- 房源详情页面开始 -->


<!--效果开始-->
<div class="ink_phoBok">
<?php
$db = Yii::app()->db;
$jingdu=$house->latitude;
$weidu=$house->longitude;
$sid=$_GET["sid"];
$slat=$_GET["lat"];
$slng=$_GET["lng"];

$school_url="index.php?r=mhouse/school&lat=".$jingdu."&lng=".$weidu;
$map_url="index.php?r=map/index&lat=".$jingdu."&lng=".$weidu."&zoom=14&maptype=house";


//打开 images 目录
$county = $house->county;
$county = preg_replace('/\s+/', '', $county);
$county = str_replace("&","",$county);
$dir="mlspic/crea/".$county."/Photo".$house->ml_num."/";
$num_files = 0;

if(is_dir($dir)){
	$picfiles = scandir($dir);
	$num_files = count(scandir($dir))-2;
}
if ( $num_files > 0) {
?> 
<div class="swiper-container" style="margin-bottom: 0px;">
	<div class="swiper-wrapper">
	<?php
	for ($x = 2; $x <= $num_files + 1; $x++) {
	  $filePath = $dir.$picfiles[$x];
	  ?>
	<div class="swiper-slide" style="width: 100%;">
	<div style="padding-top: 65%;"></div>
  <img style="width: 100%; height: auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0; background-color: silver;" src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $filePath; ?>">
</div>
	 <?php
	}
?> </div>
<div class="swiper-pagination"></div>
</div>
<script>
var swiper = new Swiper(".swiper-container", {
  pagination: ".swiper-pagination",
  paginationClickable: true,
  autoplay: 3500,
  speed: 1000,
  autoplayDisableOnInteraction: true
});
swiper.startAutoplay();
</script>
</div>
<?php
}
?>
<!--End-->
        

<!--START-->
<div class="ui-grid-a view-navi-bar">
<div class="ui-block-a" data-role="navbar">
	<ul>
<li><a href="#" class="ui-btn-active ui-state-persist">MLS:<?php echo $house->ml_num; ?></a>
</li>
</ul>
</div>
<div class="ui-block-b" data-role="navbar">
	<ul>
		<li><a data-ajax="false" href="<?php echo $map_url; ?>">地图</a></li>
		<li><a data-ajax="false" href="<?php echo $school_url; ?>">学校</a></li>
			<?php 
				if($house->tour_url!=""){
					echo "<li><a data-ajax='false'" ;
					echo "href='",$house->tour_url,"' target='_blank'>视频 </a></li>";
				} ?>
	</ul>
</div><!-- /navbar -->
</div>

<!--End-->

<!--START-->
<div class="fyxqupright_cont ui-body ui-body-a">
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">价格：</div>
                    <div class="fyxq_ptssright">
					<?php 
					if ( $house->s_r == "Sale") {
					$str= number_format($house->lp_dol/10000,0) . "万加币";
						echo $str;
					} 
					else {
						$str = $house->lp_dol . "加元/月";
					echo $str;  
					}
					?>
					<?php if (!empty($exchangeRate)) { ?>&nbsp;<span>(约<i>
					<?php echo number_format($house->lp_dol * floatval($exchangeRate)/10000, 0); ?></i>万人民币）</span><?php } ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">地址：</div>
                    <div class="fyxq_ptssright"><?php echo $house->addr.",&nbsp".$house->municipality; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft"><?php if ($house->investType_id == 1) {
    echo '学区';
} else {
    echo '城市';
} ?>：</div>
                    <div class="fyxq_ptssright"><?php echo $house->mname->municipality_cname."&nbsp&nbsp".$house->city->name; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">户型：</div>
                    <div class="fyxq_ptssright"><img src="new/images/1s.jpg"  />&nbsp;&nbsp;<?php echo $house->br; ?>&nbsp;&nbsp;<img src="new/images/1t.jpg" />&nbsp;&nbsp;<?php echo $house->bath_tot; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">配套：</div>
                    <div class="fyxq_ptssright fyxq_ptpd">
                    
                               <?php 
							   if(strpos($house->a_c, 'Air') !== false || strpos($house->a_c, 'air') !== false){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">空调</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>空调</span>
                               <?php }?>
                    
                    
                               <?php if($house->central_vac=="Y"){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">吸尘</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>吸尘</span>
                               <?php }?>

                               <?php if($house->furnished==1){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">家具</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>家具</span>
                               <?php }?>

                               <?php if($house->elevator=="Y"){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">电梯</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>电梯</span>
                               <?php }?>
                               
                               <?php if($house->bsmt1_out !="None" or $house->bsmt2_out !=""){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">地下室</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>地下室</span>
                               <?php }?>

                               <?php 
							   if(strpos($house->pool, 'pool') !== false){
									?><!--有 --> <span><b></b><font color="#FF3300">泳池</font></span><?php 
								}else{
									?><!--无 --><span><s></s>泳池</span> <?php 
								}?>  
                               
                               <?php if($house->fpl_num == "Y"){?>
                                <!--有 -->            
                                <span><b></b><font color="#FF3300">壁炉</font></span>
                                <?php }else{?>
                                <!--无 -->
                               <span><s></s>壁炉</span>
                               <?php }?> 
                        </div>
                    <div class="cl"></div>
                </div>
                
                <div class="fyxq_rx">服务热线：
                  <img src="new/images/plat.jpg" width="23" height="15" /><a href="tel:400-9900-393"><span>400-870-1029</span></a>
                </div>
                 <div class="cl"></div>
                </div>
<!--End-->

<!--START-->			
<div class="fyxqdown_left_cont ui-bar">

	<ul class="xqlb_list" data-role="listview" >
		<li id="housedivider" data-role="list-divider">
			<span>详情列表</span>
			<span class="dlh_btn">
              
				<select id="yc2m" data-role="flipswitch" data-mini="true">
				  <option value="feet">英尺</option>
				  <option value="meter">米</option>
				</select>
			</span>
		</li>
			<li><span class="xqlb_label">MLS编号：</span><?php echo $house->ml_num; ?></li>
			<li><span class="xqlb_label">交叉路口：</span><?php echo $house->cross_st; ?></li>
			<li><span class="xqlb_label">物业类别：</span><?php echo $house->propertyType->name; ?></li>
			<li><span class="xqlb_label">挂牌时间：</span><?php echo $house->pix_updt; ?></li>
			<li><span class="xqlb_label">房屋层数：</span><?php echo $house->style; ?></li>
			<li><span class="xqlb_label">土地面积：</span><span class="s1"><?php echo $house->land_area; ?></span><span class="c1">平方英尺</span></li>
			<li><span class="xqlb_label">房屋面积：</span><span class="s2"><?php echo $house->sqft; ?></span><span class="c2">平方英尺</span></li>
			<li><span class="xqlb_label">土地描述：</span><span class="s3"></span><span class="c3"><?php echo $house->acres; ?></span></li>
			<li><span class="xqlb_label">房屋数量：</span><?php echo (int)$house->rms+(int)$house->rooms_plus; ?></li>
			<li><span class="xqlb_label">地税/年份：</span><?php echo '$ '.$house->taxes; ?>/<?php echo $house->yr." 年"; ?></li>
			<li><span class="xqlb_label">卧房数量：</span><?php echo (int)$house->br+(int)$house->br_plus; ?></li>
			<li><span class="xqlb_label">物业管理费：</span>无</li>
			<li><span class="xqlb_label">厨房数量：</span><?php echo (int)$house->num_kit+(int)$house->kit_plus; ?></li>
			<li><span class="xqlb_label">建造年份：</span><?php echo $house->yr_built; ?>年</li>
			<li><span class="xqlb_label">卫生间数量：</span><?php echo $house->bath_tot; ?></li>
			<li><span class="xqlb_label">地下室：</span><?php echo $house->bsmt1_out; ?>　<?php echo $house->bsmt2_out; ?></li>
			<li><span class="xqlb_label">车库数量：</span><?php echo $house->gar_spaces; ?></li>
			<li><span class="xqlb_label">暖气：</span><?php echo $house->heating; ?></li>
			<li><span class="xqlb_label">大门朝向：</span>
			<?php 
			if($house->comp_pts=="N"){
			echo "北";
			}
			elseif($house->comp_pts=="S"){
			echo "南";
			}
			elseif($house->comp_pts=="W"){
			echo "西";
			}
			elseif($house->comp_pts=="E"){
			echo "东";
			} ?>
			</li>
			<li><span class="xqlb_label">空调：</span><?php echo $house->a_c; ?></li>
			<li><span class="xqlb_label">邮编：</span><?php echo $house->zip; ?></li>
			<li><span class="xqlb_label">中央吸尘：</span><?php if($house->central_vac=="Y"){echo "是";}else{echo "否";} ?></li>
			<li><span class="xqlb_label">游泳池：</span><?php echo $house->pool; ?></li>
			<li><span class="xqlb_label">出售/出租：</span>
			<?php 
			if($house->s_r=="Sale"){
			echo "出售";
			}
			elseif($house->s_r=="Lease"){
			echo "出租";
			}
			?></li>
			<li><span class="xqlb_label">周边和配套：</span><?php echo $house->prop_feat1_out; ?><?php if($house->prop_feat2_out!=""){echo " , ";}?><?php echo $house->prop_feat2_out; ?><?php if($house->prop_feat3_out!=""){echo " , ";}?><?php echo $house->prop_feat3_out; ?><?php if($house->prop_feat4_out!=""){echo " , ";}?><?php echo $house->prop_feat4_out; ?><?php if($house->prop_feat5_out!=""){echo " , ";}?><?php echo $house->prop_feat5_out; ?><?php if($house->prop_feat6_out!=""){echo " , ";}?><?php echo $house->prop_feat6_out; ?></li>

			<li id="housedivider" data-role="list-divider">房屋布局</li>
		<li>

		<div id="fwbj" class="fwbjtable table-stroke">            
		<!-- <table data-role="table" id="fwbj" class="ui-responsive" data-mode="columntoggle"> -->
		<table  class="ui-responsive">
		<thead><tr>
		<th width="12%" data-priority="1" style="border-bottom: 1px solid #CCCCCC;">楼层</th>
		<th width="12%" data-priority="2" style="border-bottom: 1px solid #CCCCCC;">房间</th>
		<th width="20%" data-priority="3" style="border-bottom: 1px solid #CCCCCC;">长(M)</th>
		<th width="20%" data-priority="4" style="border-bottom: 1px solid #CCCCCC;">宽(M)</th>
		<th width="17%" data-priority="5" style="border-bottom: 1px solid #CCCCCC;">面积(M2)</th>
		<th width="21%" data-priority="6" style="border-bottom: 1px solid #CCCCCC;">说明</th>
		</tr></thead>
		<tbody>
		<?php if($house->level1!="" || $house->rm1_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level1;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm1_len*$house->rm1_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_dc1_out; ?><?php if($house->rm1_dc2_out!=""){echo ",";}?><?php echo $house->rm1_dc2_out; ?><?php if($house->rm1_dc3_out!=""){echo ",";}?><?php echo $house->rm1_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level2!="" || $house->rm2_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level2;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm12_len*$house->rm2_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_dc1_out; ?><?php if($house->rm2_dc2_out!=""){echo ",";}?><?php echo $house->rm2_dc2_out; ?><?php if($house->rm2_dc3_out!=""){echo ",";}?><?php echo $house->rm2_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level3!="" || $house->rm3_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level3;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm3_len*$house->rm3_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_dc1_out; ?><?php if($house->rm3_dc2_out!=""){echo ",";}?><?php echo $house->rm3_dc2_out; ?><?php if($house->rm3_dc3_out!=""){echo ",";}?><?php echo $house->rm3_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level4!="" || $house->rm4_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level4;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm4_len*$house->rm4_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_dc1_out; ?><?php if($house->rm4_dc2_out!=""){echo ",";}?><?php echo $house->rm4_dc2_out; ?><?php if($house->rm4_dc3_out!=""){echo ",";}?><?php echo $house->rm4_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level5!="" || $house->rm5_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level5;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm5_len*$house->rm5_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_dc1_out; ?><?php if($house->rm5_dc2_out!=""){echo ",";}?><?php echo $house->rm5_dc2_out; ?><?php if($house->rm5_dc3_out!=""){echo ",";}?><?php echo $house->rm5_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level6!="" || $house->rm6_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level6;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm6_len*$house->rm6_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_dc1_out; ?><?php if($house->rm6_dc2_out!=""){echo ",";}?><?php echo $house->rm6_dc2_out; ?><?php if($house->rm6_dc3_out!=""){echo ",";}?><?php echo $house->rm6_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level7!=""|| $house->rm7_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level7;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm7_len*$house->rm7_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_dc1_out; ?><?php if($house->rm7_dc2_out!=""){echo ",";}?><?php echo $house->rm7_dc2_out; ?><?php if($house->rm7_dc3_out!=""){echo ",";}?><?php echo $house->rm7_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level8!="" || $house->rm8_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level8;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm8_len*$house->rm8_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_dc1_out; ?><?php if($house->rm8_dc2_out!=""){echo ",";}?><?php echo $house->rm8_dc2_out; ?><?php if($house->rm8_dc3_out!=""){echo ",";}?><?php echo $house->rm8_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level9!="" || $house->rm9_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level9;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm9_len*$house->rm9_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_dc1_out; ?><?php if($house->rm9_dc2_out!=""){echo ",";}?><?php echo $house->rm9_dc2_out; ?><?php if($house->rm9_dc3_out!=""){echo ",";}?><?php echo $house->rm9_dc3_out; ?></td>
		</tr>
		<?php }?>
		<?php if($house->level10!="" || $house->rm10_out!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level10;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm10_len*$house->rm10_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_dc1_out; ?><?php if($house->rm10_dc2_out!=""){echo ",";}?><?php echo $house->rm10_dc2_out; ?><?php if($house->rm10_dc3_out!=""){echo ",";}?><?php echo $house->rm10_dc3_out; ?></td>
		</tr>
		<?php }?>

		<?php if($house->level11!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level11;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm11_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm11_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm11_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm11_len*$house->rm11_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm11_dc1_out; ?><?php if($house->rm11_dc2_out!=""){echo ",";}?><?php echo $house->rm11_dc2_out; ?><?php if($house->rm11_dc3_out!=""){echo ",";}?><?php echo $house->rm11_dc3_out; ?></td>
		</tr>
		<?php }?>


		<?php if($house->level12!=""){?>
		<tr>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level12;?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm12_out; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm12_len; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm12_wth; ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo round($house->rm12_len*$house->rm12_wth,1); ?></td>
		<td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm12_dc1_out; ?><?php if($house->rm12_dc2_out!=""){echo ",";}?><?php echo $house->rm12_dc2_out; ?><?php if($house->rm12_dc3_out!=""){echo ",";}?><?php echo $house->rm12_dc3_out; ?></td>
		</tr>
		<?php }?>
		</tbody></table>
		</div>
	</li>
			<li id="housedivider" data-role="list-divider">房屋描述</li>
                <div class="fwms_cont">
                     <?php echo $house->ad_text; ?><BR/><B>Extras:</B><BR/><?php echo $house->extras; ?>
                                  </div>
	</ul>

	
</div>
<!--End-->

<!-- 房源详情页面结束 -->
<script language="javascript" type="text/javascript">
$(function(){

	var p1 = $(".f1_1").html();
	var p2 = $(".f1_2").html();
	var p3 = $(".f1_3").html();
	var p4 = $(".f2_1").html();
	var p5 = $(".f2_2").html();
	var p6 = $(".f2_3").html();
	function decimal(num,v){
	var vv = Math.pow(10,v);
	return Math.round(num*vv)/vv;
	}
$(".fyxqdown_left_title").on("click",".ss",function(){


	if($(this).hasClass("dlh_active"))
	{
		$(this).removeClass("dlh_active");
		$(".f1_1").text(p1);
		$(".f1_2").text(p2);
		$(".f1_3").text(p3);
		$(".f2_1").text(p4);
		$(".f2_2").text(p5);
		$(".f2_3").text(p6);
		$(".t1").html("长(M)")
		$(".t2").html("宽(M)")
		$(".t3").html("面积(㎡)")
		$(this).text("米 > 英制");
   } 
   else{
		$(".t1").html("长（英尺）")
		$(".t2").html("宽（英尺）")
		$(".t3").html("面积（平方英尺）")
		$(this).text("英制 > 米");
		$(this).addClass("dlh_active");
		
		var h1=decimal(p1/0.3048,2);
		var h2=decimal(p2/0.3048,2);
		var h3=decimal(p3/0.09290304,2);
		var h4=decimal(p4/0.3048,2);
		var h5=decimal(p5/0.3048,2);
		var h6=decimal(p6/0.09290304,2);
		$(".f1_1").text(h1);
		$(".f1_2").text(h2);
		$(".f1_3").text(h3);
		$(".f2_1").text(h4);
		$(".f2_2").text(h5);
		$(".f2_3").text(h6);
  }
})
})
</script> 
               
<script language="javascript" type="text/javascript">
$(function(){

		var a1 = $(".s1").html();
		var a2 = $(".s2").html();
		var a3 = $(".s3").html();
//	$(".dlh_btn").click(function(){
$( document ).on( 'change', '#yc2m', function( e ){	
		function decimal(num,v){
		var vv = Math.pow(10,v);
		return Math.round(num*vv)/vv;
		}

        if($(this).hasClass("dlh_active"))
		{
			$(".s1").text(a1);
			//$(".s2").text(a2);
			//$(".s3").text(a3);
			$(".c1").html("平方英尺")
			//$(".c2").html("平方英尺")
			//$(".c3").html("英尺")
		 //  $(this).text("英尺 > 米");
           $(this).removeClass("dlh_active");
	   } 
	   else{
			var b1=decimal(a1*0.09290304,2);
			var b2=decimal(a2*0.09290304,2);
			var b3=decimal(a3*0.3048,2);
			$(".s1").text(b1);
			//$(".s2").text(b2);
			//$(".s3").text(b3);
			$(".c1").html("平方米")
			//$(".c2").html("平方米")
			//$(".c3").html("米")
		   $(this).addClass("dlh_active");
		//   $(this).text("米 > 英制");
      }
	})
})
$( document ).on( 'change', '#flip', function( e ) {
    alert( 'This alert should only appear throug direct interaction with the flipswitch NOT when the buttons are clicked' );
});
</script>
          