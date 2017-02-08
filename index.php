<?php
$baiduurl="http://www.baidu.com/s?wd=%E6%8E%92%E5%88%97%E4%B8%89&rsv_spt=1&rsv_iqid=0xecadb38000026361&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=9&rsv_sug1=9&rsv_sug7=101";
$return=file_get_contents($baiduurl);
$regex4="/<div class=\"c-border c-gap-bottom-small\".*?>.*?<\/div>/ism";  


$regex5="/<span class=\"c-icon c-icon-ball-red op_caipiao_ball_red c-gap-right-small\".*?>.*?<\/span>/ism";  

?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Orange lottery judge</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">
	.mycircle { 
		width: 50px;
		height: 50px;
		background-color: transparent;
		border: 3px rgba(255,0,0,0.8) solid; 
		-webkit-border-radius: 100%; 
		font-family: "微软雅黑";
		font-size: xx-large;
		font-weight: bold; 
		display:table-cell;/*让元素以表格的单元素格形式渲染*/
		vertical-align: middle;/*使用元素的垂直对齐*/
	} 
    </style>
  </head>
  <body>
  <div class="container">
	    <div class="panel panel-default col-md-6 col-md-offset-3">
		    <div class="text-center panel-heading">
			    <h3 class="panel-title">
			    <?php
			    	if(preg_match_all($regex4, $return, $matches)){  
					   echo $matches[0][0];
					}else{  
					   echo '查询失败！';
					}
				?>
				</h3>
		    </div>
		    <div class="panel-body col-md-12" align="center">
		    	<div class="col-md-3"></div>
				<div class="col-md-2 col-xs-4">
				    <div id="firstnum" class="mycircle text-center">
				    	<?php if(preg_match_all($regex5, $return, $matches2)){  
				   			echo $matches2[0][0];  }?>
				    </div>
				</div>
				<div class="col-md-2 col-xs-4">
				    <div id="secondnum" class="mycircle text-center">
				    	<?php if(preg_match_all($regex5, $return, $matches2)){  
				   			echo $matches2[0][1];  }?>
				    </div>
				</div>
				<div class="col-md-2 col-xs-4">
				    <div id="thirdnum" class="mycircle text-center">
				    	<?php if(preg_match_all($regex5, $return, $matches2)){  
				   			echo $matches2[0][2];  }?>
				    </div>
				</div>
		  	</div>
	    </div>

	    <div class="test">
		  <h1 id="result"></h1>
		</div>
   </div>

<script type="text/javascript">
	function lottery_judge(){
		$('.test').append("<h1>yes</h1>");
		alert("???");
	}
	lottery_judge();
	alert("sad");
	function myFunction(){ 
    alert("你好，我是一个警告框！"); 
} myFunction();
</script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>





<?php
// $url = 'https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&ch=3&tn=98010089_dg&wd=排列三&oq=排列三&rsv_pq=f524f5180000e358&rsv_t=232dqg+on+47zqM5GfMF8y8qN02EnJhVqjlF5KN4L6/4BEf28hIUrHW4sVWZ3SFG58A&rqlang=cn&rsv_enter=0';  //这儿填页面地址
// $info=file_get_contents($url);
// preg_match('|<title>(.*?)<\/title>|i',$info,$m);
// echo $m[0];
?>

<?php
// $url = 'http://www.baidu.com/s?wd=%E6%8E%92%E5%88%97%E4%B8%89&rsv_spt=1&rsv_iqid=0xecadb38000026361&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=9&rsv_sug1=9&rsv_sug7=101';  //这儿填页面地址
// $info=file_get_contents($url);
// preg_match('|<body>(.*?)<\/body>|i',$info,$match);
// echo $match[1];
// print_r($match); 
//echo $info;
?>

<!-- <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> -->

<!-- <script type="text/javascript">
$(document).ready(function(){
  alert("Text: " + $(".c-gap-top .c-gap-right-small").text());
});
</script> -->

<?php
    // function getWebTag($tag_id,$url=false,$tag='div',$data=false){
    //     if($url !== false){
    //         $data = file_get_contents( $url );
    //     }
    //     $charset_pos = stripos($data,'charset');
    //     if($charset_pos) {
    //         if(stripos($data,'charset=utf-8',$charset_pos)) {
    //             $data = iconv('utf-8','utf-8',$data);
    //         }else if(stripos($data,'charset=gb2312',$charset_pos)) {
    //             $data = iconv('gb2312','utf-8',$data);
    //         }else if(stripos($data,'charset=gbk',$charset_pos)) {
    //             $data = iconv('gbk','utf-8',$data);
    //         }
    //     }
        
    //     preg_match_all('/<'.$tag.'/i',$data,$pre_matches,PREG_OFFSET_CAPTURE);    //获取所有div前缀
    //     preg_match_all('/<\/'.$tag.'/i',$data,$suf_matches,PREG_OFFSET_CAPTURE); //获取所有div后缀
    //     $hit = strpos($data,$tag_id);
    //     if($hit == -1) return false;    //未命中
    //     $divs = array();    //合并所有div
    //     foreach($pre_matches[0] as $index=>$pre_div){
    //         $divs[(int)$pre_div[1]] = 'p';
    //         $divs[(int)$suf_matches[0][$index][1]] = 's';    
    //     }
        
    //     //对div进行排序
    //     $sort = array_keys($divs);
    //     asort($sort);
        
    //     $count = count($pre_matches[0]);
    //     foreach($pre_matches[0] as $index=>$pre_div){
    //         //<div $hit <div+1    时div被命中
    //         if(($pre_matches[0][$index][1] < $hit) && ($hit < $pre_matches[0][$index+1][1])){
    //             $deeper = 0;
    //             //弹出被命中div前的div
    //             while(array_shift($sort) != $pre_matches[0][$index][1] && ($count--)) continue;
    //             //对剩余div进行匹配，若下一个为前缀，则向下一层，$deeper加1，
    //             //否则后退一层，$deeper减1，$deeper为0则命中匹配，计算div长度
    //             foreach($sort as $key){
    //                 if($divs[$key] == 'p') $deeper++;
    //                 else if($deeper == 0) {
    //                     $length = $key-$pre_matches[0][$index][1];
    //                     break;
    //                 }else {
    //                     $deeper--;
    //                 }
    //             }
    //             $hitDivString = substr($data,$pre_matches[0][$index][1],$length).'</'.$tag.'>';
    //             break;
    //         }
    //     }
    //     return $hitDivString;
    // }

    // echo getWebTag('class="c-icon c-icon-ball-red op_caipiao_ball_red c-gap-right-small"','http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&ch=3&tn=98010089_dg&wd=排列三&oq=排列三&rsv_pq=f524f5180000e358&rsv_t=232dqg+on+47zqM5GfMF8y8qN02EnJhVqjlF5KN4L6/4BEf28hIUrHW4sVWZ3SFG58A&rqlang=cn&rsv_enter=0');

//End_php
?>

