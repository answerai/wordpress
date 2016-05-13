<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php $options=get_option('options'); ?>

    <title><?php if ( is_home() ) {bloginfo('name');}    
    elseif ( is_category() ) {single_cat_title(); echo " 丨 "; bloginfo('name');}       
    elseif (is_single() || is_page() ) {single_post_title(); echo " 丨 "; bloginfo('name');}      
    elseif (is_search() ) {echo "搜索结果"; echo " 丨 "; bloginfo('name');}   
    elseif ( is_author() ) {_e('会员');_e(trim(wp_title('',0)));_e('的个人中心 - ');bloginfo('name'); }    
    elseif (is_404() ) {echo '404-页面未找到!';}       
    else {wp_title('',true);} ?> </title>
    <meta name="HandheldFriendly" content="True" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<?php if ($options['favicon']) {
		echo '<link rel="shortcut icon" href="'.$options['favicon'].'">';
	}else{
		echo '<link rel="shortcut icon" href="'.get_bloginfo('template_url').'/images/favicon.ico">';
	}
	?>

    	<?php
    		echo '<link rel="icon" href="'.get_bloginfo('template_url').'/images/animated_favicon.gif">';
    	?>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/font-awesome.min.css">  
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <!-- hermit音乐播放器插件start --> 
    <!--<link rel="stylesheet" id="hermit-css" href="/wp-content/plugins/hermit/assets/css/2.3.2/hermit.css?ver=4.5.2" type="text/css" media="all">
       <script type="text/javascript">
	  /* <![CDATA[ */
	  var hermit = {"url":"\/wp-content\/plugins\/hermit\/assets\/swf\/","ajax_url":"\/wp-admin\/admin-		ajax.php","text_tips":"\u70b9\u51fb\u64ad\u653e\u6216\u6682\u505c","remain_time":"10","debug":"0","version":"2.3.2","album_source":"0"};
	  /* ]]> */
       </script>
       <script type="text/javascript" src="/wp-content/plugins/hermit/assets/js/2.3.2/hermit.js?ver=2.3.2"></script>-->
    <!-- hermit音乐播放器插件end --> 
	
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="<?php bloginfo('template_url')?>/js/html5shiv.min.js"></script>
	  <script src="<?php bloginfo('template_url')?>/js/respond.min.js"></script>
	<![endif]-->
	<meta name="keywords" content="<?php echo $options['keywords']; ?>" />
	<meta name="description" content="<?php echo $options['description']; ?>" />
    
</head>
<body>

<!-- banner -->
<div class="banner" style="background: url(<?php echo $options['banner'];?>);">
	<!-- 菜单按钮 -->
	<div class="menu menuicon hidden-xs" style="display:none;">
		<i class="fa fa-bars"></i>
	</div>
	<!-- header -->
	<div class="header container">
		<!--个人信息-->
		<div class="row">
			<div class="col-md-12" style="margin-top:5px;">
				<div class="personInfo">
					<div class="logo">
					    <?php if ($options['logo']) :?>
						    <a href="<?php bloginfo('url');?>"><img src="<?php echo $options['logo'];?>" alt="logo"></a>
						<?php else :?>
						    <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url')?>/images/logo.jpg" alt="logo"></a>
						<?php endif ;?>
					</div>
					<div class="logoTheme">
						<h1><?php if ($options['headerh1']):?><?php echo $options['headerh1'];?><?php else :?><?php endif;?></h1>
						<h3 style="display:none;"><?php if ($options['headerh3']):?><?php echo $options['headerh3'];?><?php else :?><?php endif;?></h3>
					</div>
				</div>				
			</div>
		</div>
	</div> 
</div>