<?php
	$lang = get_lang();
	$temp = array();
	for($x=0; $x<count($producttype); $x++){
		$temp[$producttype[$x]['en']['name']] = $producttype[$x][$lang];
	}
	$producttype = $temp;
	$temp = array();
	for($x=0; $x<count($product); $x++){
		$temp[$product[$x]['en']['name']] = $product[$x][$lang];
	}
	$product = $temp;
	$language = $language[$lang];
    $price = $price[$lang];
    $jsLan = $jsLan[$lang];
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo $language['title'] ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
<script>
var product = <?php echo json_encode($product) ?>;
var producttype = <?php echo json_encode($producttype) ?>;
var jsLan = <?php echo json_encode($jsLan) ?>;
</script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery.SuperSlide.js"></script>
		<script src="js/swipe.js"></script>
		<script src="js/index.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper" class="wrapper" name="header-wrapper">
				<div id="header">
					<div class="headlogo"><img src="images/logo.png" /></div>
					<!-- Logo -->
						<div id="logo">
							<h1><a href="javascript:;"><?php echo $language['title'] ?><span>&#174;</span></a></h1>
							<p><?php echo $language['subtitle'] ?></p>
						</div>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#header-wrapper"><?php echo $language['menu1'] ?></a></li>
								<li><a href="#intro-wrapper"><?php echo $language['menu2'] ?></a></li>
								<li><a href="#product-wrapper"><?php echo $language['menu3'] ?></a></li>
                <li><a href="#car-wrapper"><?php echo $language['menu4'] ?></a></li>
								<li><a href="#price-wrapper"><?php echo $language['menu7'] ?></a></li>
								<li><a href="#footer-wrapper"><?php echo $language['menu5'] ?></a></li>
								<li><a href="#contactus"><?php echo $language['menu6'] ?></a></li>
							</ul>
						</nav>
                        <a class="wLang" href="javascript:;" data-lang="<?php if($lang=='zh'){echo 'en';} else {echo 'zh';} ?>"><?php if($lang=='zh'){echo 'en';} else {echo '中文';} ?></a>
				</div>
			</div>
		
		<!-- Intro -->
			<div id="intro-wrapper" class="wrapper style1" name="intro-wrapper">
				<div class="title"><?php echo $language['section1'] ?></div>
				<section id="intro" class="container self-wrapper">
					<div class="s6">
						<img class="pcdis" src="images/About_us.jpg" alt="" />
                        <img class="mobiledis" src="images/About_us_mb.jpg" />
					</div>
					<div class="s6">
						<!-- <h1><?php echo $language['section1_title'] ?></h1> -->
						<p class="content"><?php echo $language['section1_des'] ?></p>
            <ul class="ul-slider">
              <li>
                <a href="javascript:;"><?php echo $language['intro_title1'] ?></a>
                <p class="up"><?php echo $language['intro_des1'] ?></p>
              </li>
              <li>
                <a href="javascript:;"><?php echo $language['intro_title2'] ?></a>
                <p class="up"><?php echo $language['intro_des2'] ?></p>
              </li>
              <li>
                <a href="javascript:;"><?php echo $language['intro_title3'] ?></a>
                <p class="up"><?php echo $language['intro_des3'] ?></p>
              </li>
            </ul>
					</div>
				</section>
			</div>

		<!-- Highlights -->
			<div class="wrapper style3" id="product-wrapper" name="product-wrapper">
				<div class="title"><?php echo $language['section2'] ?></div>
				<div id="highlights" class="container">
					<div class="row 150%">
						<?php foreach($producttype as $x=>$x_val){ ?>
							<div class="4u">
								<section class="highlight">
									<a href="javascript:;" class="image featured self-info <?php if($device['mobile']){echo 'mobile';} ?>" data-typename="<?php echo $x ?>">
										<img src="<?php echo $x_val['image'] ?>" />
										<p class="pic-info"><?php echo $x_val['name'] ?></p>
									</a>
								</section>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="wrapper style2" id="car-wrapper" name="car-wrapper">
				<div class="title"><?php echo $language['section3'] ?></div>
				<div id="highlights" class="container">
<div class="foucebox cf carType1">
  <div class="bd">
    <div class="showDiv"> <a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_1.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_2.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_3.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_4.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_5.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_6.jpg"></a>
    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_1.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_2.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_3.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_4.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_5.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_6.jpg"></a></li>
    </ul>
  </div>
</div>
<div class="foucebox cf carType2" style="display:none;">
  <div class="bd">
    <div class="showDiv"> <a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_1.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_2.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_3.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_4.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_5.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_6.jpg"></a>
    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_1.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_2.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_3.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_4.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_5.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_6.jpg"></a></li>
    </ul>
  </div>
</div>
<div class="foucebox cf carType3" style="display:none;">
  <div class="bd">
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_1.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_2.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_3.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_4.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_5.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_6.jpg"></a>
    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_1.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_2.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_3.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_4.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_5.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_6.jpg"></a></li>
    </ul>
  </div>
</div>
<div class="foucebox cf carType4" style="display:none;">
  <div class="bd">
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_1.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_2.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_3.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_4.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_5.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_6.jpg"></a>
    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_1.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_2.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_3.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_4.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_5.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_6.jpg"></a></li>
    </ul>
  </div>
</div>
<div class="foucebox cf carType5" style="display:none;">
  <div class="bd">
    <div class="showDiv"> <a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_1.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_2.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_3.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_4.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_5.jpg"></a>
    </div>
    <div class="showDiv"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_6.jpg"></a>
    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_1.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_2.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_3.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_4.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_5.jpg"></a></li>
      <li><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_6.jpg"></a></li>
    </ul>
  </div>
</div>
<div class="swipe">
	<div class='swipe-wrap'>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_1.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_2.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_3.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_4.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_5.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Audi A6L/Audi_A6L_6.jpg"></a></div>
	</div>
</div>
<div class="swipe" style="display:none;">
	<div class='swipe-wrap'>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_1.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_2.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_3.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_4.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_5.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Benz E-Class/Mercedes-Benz-E-Class_6.jpg"></a></div>
	</div>
</div>
<div class="swipe" style="display:none;">
	<div class='swipe-wrap'>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_1.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_2.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_3.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_4.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_5.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick GL8Firstland/Buick_GL8_6.jpg"></a></div>
	</div>
</div>
<div class="swipe" style="display:none;">
	<div class='swipe-wrap'>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_1.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_2.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_3.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_4.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_5.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Buick LaCrosse/Buick_LaCrosse_6.jpg"></a></div>
	</div>
</div>
<div class="swipe" style="display:none;">
	<div class='swipe-wrap'>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_1.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_2.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_3.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_4.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_5.jpg"></a></div>
		<div><a href="javascript:;"><img src="images/Passat/Volkswagen_Passat_6.jpg"></a></div>
	</div>
</div>
					<div class="car-bottom cf">
						<a href="javascript:;" data-tab="cartype1" class="cur"><?php echo $language['car1'] ?></a>
						<a href="javascript:;" data-tab="cartype2"><?php echo $language['car2'] ?></a>
						<a href="javascript:;" data-tab="cartype3"><?php echo $language['car3'] ?></a>
						<a href="javascript:;" data-tab="cartype4"><?php echo $language['car4'] ?></a>
						<a href="javascript:;" data-tab="cartype5"><?php echo $language['car5'] ?></a>
					</div>
				</div>
			</div>

			<div class="wrapper style3" id="price-wrapper" name="price-wrapper">
				<div class="title"><?php echo $language['section4'] ?></div>
				<div id="highlights" class="container">
                    <table class="mobiledis">
                        <tr>
                            <td><?php echo $price['title1'] ?></td>
                            <td><?php echo $price['car1'] ?></td>
                            <td><?php echo $price['car2'] ?></td>
                            <td><?php echo $price['car3'] ?></td>
                        </tr>
                        <tr class="even">
                            <td><?php echo $price['title2'] ?></td>
                            <td>5</td>
                            <td>7</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td><?php echo $price['title3'] ?><br>(4H/50KM）</td>
                            <td>￥475.00</td>
                            <td>￥375.00</td>
                            <td>￥325.00</td>
                        </tr>
                        <tr class="even">
                            <td><?php echo $price['title4'] ?><br>(8H/100KM）</td>
                            <td>￥950.00</td>
                            <td>￥750.00</td>
                            <td>￥650.00</td>
                        </tr>
                        <tr>
                            <td><?php echo $price['title5'] ?><br>(RMB/KM)</td>
                            <td>￥4.00</td>
                            <td>￥4.00</td>
                            <td>￥4.00</td>
                        </tr>
                        <tr class="even">
                            <td><?php echo $price['title6'] ?><br>(RMB/H)</td>
                            <td>￥50.00</td>
                            <td>￥50.00</td>
                            <td>￥50.00</td>
                        </tr>
                        <tr>
                            <td><?php echo $price['title7'] ?><br><?php echo $price['title9'] ?></td>
                            <td>￥450/500</td>
                            <td>￥400/450</td>
                            <td>￥350/400</td>
                        </tr>
                        <tr class="even">
                            <td><?php echo $price['title8'] ?><br><?php echo $price['title10'] ?></td>
                            <td>￥350/400</td>
                            <td>￥300/350</td>
                            <td>￥250/300</td>
                        </tr>
                    </table>
					<table class="pcdis">
						<tr class="head">
							<td rowspan="2"><?php echo $price['title1'] ?></td>
							<td rowspan="2"><?php echo $price['title2'] ?></td>
							<td><?php echo $price['title3'] ?></td>
							<td><?php echo $price['title4'] ?></td>
							<td><?php echo $price['title5'] ?></td>
							<td><?php echo $price['title6'] ?></td>
							<td><?php echo $price['title7'] ?></td>
							<td><?php echo $price['title8'] ?></td>
						</tr>
						<tr class="head">
							<td>(4H/50KM）</td>
							<td>(8H/100KM）</td>
							<td>(RMB/KM)</td>
							<td>(RMB/H)</td>
							<td><?php echo $price['title9'] ?></td>
							<td><?php echo $price['title10'] ?></td>
						</tr>
						<tr>
							<td><?php echo $price['car1'] ?></td>
							<td>5</td>
							<td>￥475.00</td>
							<td>￥950.00</td>
							<td>￥4.00</td>
							<td>￥50.00</td>
							<td>￥450/500</td>
							<td>￥350/400</td>
						</tr>
						<tr  class="even">
							<td><?php echo $price['car2'] ?></td>
							<td>7</td>
							<td>￥375.00</td>
							<td>￥750.00</td>
							<td>￥4.00</td>
							<td>￥50.00</td>
							<td>￥400/450</td>
							<td>￥300/350</td>
						</tr>
						<tr>
							<td><?php echo $price['car3'] ?></td>
							<td>5</td>
							<td>￥325.00</td>
							<td>￥650.00</td>
							<td>￥4.00</td>
							<td>￥50.00</td>
							<td>￥350/400</td>
							<td>￥250/300</td>
						</tr><!-- 
						<tr style="background:#B30101"><td colspan="8">EXPLAIN</td></tr>
						<tr class="explan even">
							<td colspan="8"><?php echo $price['explain1'] ?></td>
						</tr>
						<tr class="explan">
							<td colspan="8"><?php echo $price['explain2'] ?></td>
						</tr>
						<tr class="explan even">
							<td colspan="8"><?php echo $price['explain3'] ?></td>
						</tr>
						<tr class="explan">
							<td colspan="8"><?php echo $price['explain4'] ?></td>
						</tr>
						<tr class="explan even">
							<td colspan="8"><?php echo $price['explain5'] ?></td>
						</tr>
						<tr class="explan">
							<td colspan="8"><?php echo $price['explain6'] ?></td>
						</tr> -->
					</table>
				</div>
			</div>

		<!-- Footer -->
			<div id="client-wrapper" class="wrapper style2" name="footer-wrapper">
				<div class="title"><?php echo $language['section5'] ?></div>
				<div class="container">
					<div class="row 150% logot">
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/1_anz.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/2_GM.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/3_Disney.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/4_Adidas.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/5_Zhengda.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/6_apple.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/7_kodak.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/8_Carlson.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/9_HSBC.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/10_GSK.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/11_HP.jpg" alt="" /></a>
							</section>
						</div>
						<div class="3u">
							<section class="highlight">
								<a href="javascript:;" class="image featured"><img src="images/12_IBM.jpg" alt="" /></a>
							</section>
						</div>
					</div>
				</div>
			</div>
    <!-- Footer -->
      <div id="footer-wrapper" class="wrapper" name="footer-wrapper">
        <div class="title"><?php echo $language['section6'] ?></div>
        <div id="footer" class="container">
          <div class="row 150%" name="contactus" id="contactus">
            <div class="6u">

              <!-- Contact Form -->
                <section>
                  <form method="post" action="#">
                    <div class="row 50%">
                      <div class="6u">
                        <input type="text" name="name" id="contact-name" placeholder="<?php echo $language['input_name'] ?>" />
                      </div>
                      <div class="6u">
                        <input type="text" name="email" id="contact-phone" placeholder="<?php echo $language['input_phone'] ?>" />
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <input type="text" name="name" id="contact-email" placeholder="<?php echo $language['input_mail'] ?>" />
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <textarea name="message" id="contact-message" placeholder="<?php echo $language['input_message'] ?>" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="12u">
                        <ul class="actions">
                          
                          <li><input type="text" id="contact-code" class="style1 area-input" placeholder="<?php echo $language['input_code'] ?>" /></li>
                          <li><img src="code_num.php" class="area-img" /></li>
                          <li>
                            <div class="area-submit">
                              <input type="submit" value="<?php echo $language['input_send'] ?>" class="style1" />
                              <img src="images/loading.gif" />
                            </div></li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </section>

            </div>
            <div class="6u">
            
              <!-- Contact -->
                <section class="feature-list small">
                  <div class="row">
                    <div class="6u">
                      <section>
                        <h3 class="icon fa-home"><?php echo $language['address'] ?></h3>
                        <p><a href="http://j.map.baidu.com/0Upmr"><?php echo $language['address_n'] ?></a>
                        </p>
                      </section>
                    </div>
                    <div class="6u">
                      <section>
                        <h3 class="icon fa-envelope"><?php echo $language['email'] ?></h3>
                        <p>
                          service-sh@cityostrich.cn
                        </p>
                      </section>
                    </div>
                  </div>
                  <div class="row">
                    <div class="6u">
                      <section>
                        <h3 class="icon fa-comment"><?php echo $language['tel'] ?></h3>
                        <p>
                          (+86) 21-51098771<br>(+86) 21-51098773
                        </p>
                      </section>
                    </div>
                    <div class="6u">
                      <section>
                        <h3 class="icon fa-phone"><?php echo $language['cell'] ?></h3>
                        <p>
                          (+86) 13764515288
                        </p>
                      </section>
                    </div>
                  </div>
                </section>
            </div>
          </div>
        </div>
      </div>
	</body>
</html>