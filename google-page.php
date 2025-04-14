<?php
/*
 * 	Template Name: Marketing
 */
?>
<!DOCTYPE html>
<!--[if lt IE 9]> <html <?php language_attributes(); ?> class="ie8 ie" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>

	<!-- META -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no" />
	<meta name="company" content="ploner-communications.at">
	<meta name="coder" content="ploner-communications.com | Ploner-Communications | Maximilian Wehofer">

	<!-- LINKS -->

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

	<!-- WP HEAD -->

	<?php wp_head(); ?>

</head>

<body id="body" <?php body_class(); ?> data-background="<?php alpha_header_color(); ?>">
<div class="marketing_wrapper">


	<style>
		body {
			font-family: "Lato", sans-serif;
		}
		.slick-slide  {
			cursor:grab;
		}
		#page-content {
			background-color:#fff;
		}
		.mp_container {
			margin:0 auto;
			max-width:1460px;
			padding:0 80px;
			@media (max-width:1200px){
				padding:0 50px;
			}
			@media (max-width:991px){
				padding:0 30px;
			}

		}

		.marketing_header {
			padding: 52px 0 32px;
			@media (max-width:991px){
			padding: 26px 0;
			}

			.mp_container {
				display: flex;
				align-items: center;
				justify-content: space-between;
				max-width:100%;
				.header-logo {
					display:flex;
					width:163px;
					img {
						width:100%;
					}
				}
				.main_menu {
					flex-grow:1;
					padding:0 80px 0 50px;
					overflow:hidden;
					@media (max-width:1200px){
						padding: 0 35px 0 30px;
					}
					@media (max-width:767px){
						position: fixed;
						top: 0;
						left: 0;
						width: 100%;
						height: 100vh;
						background: black;
						z-index: 2;
						display: flex;
						align-items: center;
						justify-content: center;
						transform: translateY(-100%); 
						transition: .3s all ease;
					}
					&.active {
						transform: translateY(0); 
						ul {
							transform: translateY(0px);
							opacity: 1;
						}
					}
					ul {
						list-style-type:none;
						display:flex;
						align-items: center;
						justify-content: center;
						transition:.4s all ease;

						@media (min-width:768px){
							transform: translateY(-40px);
							opacity: 0;
						}
						@media (max-width:767px){
							flex-direction: column;
							margin: 0;
						}
						li {
							margin:0;
							&:nth-child(3){
								flex-grow:1;
							}
							a {
								padding:8px 23px;
								color:#C9B583;
								font-size:14px;
								line-height:20px;
								font-weight:700;
								@media (max-width:1200px){
									padding: 8px 10px;
								}
								@media (max-width:767px){
									font-size: 20px;
									line-height: 40px;
								}
							}
						}

					}
				}
				.menu_btn {
					z-index:2;
					width:20px;
					height:20px;
					position:relative;
					&.active {
						svg {
							&:nth-child(1){
								opacity:0;
							}
							&:nth-child(2){
								opacity:1;
							}
						}
					}
					svg {
						cursor:pointer;
						width: 100%;
						max-width: 100%;
						height:auto;
						transition:.3s all ease;
						&:nth-child(2){
							position:absolute;
							top:0;
							left:0;
							opacity:0;
						}
					}
				}
			}
		}

		.mp_hero {
			position:relative;
			padding-bottom: 46px;
			&::before {
				content:" ";
				position:absolute;
				width:45%;
				height:calc(100% + 400px);
				bottom:0;
				left:0;
				background-color:#141414;
				z-index:-1;
				@media (max-width:991px){
					width:55%;
				}
				@media (max-width:767px){
					width:85%;
				}
			}
			.social-icons {
				display: flex;
				justify-content: center;
				flex-direction: column;
				gap: 19px;
				position: absolute;
				right: 22px;
				top: 50%;
				transform: translateY(-50%);
				@media (max-width:1200px){
					right: 10px;
				}
				@media (max-width:991px){
					display:none;
				}
				a {
					border: 1px solid #C9B583;
					width: 28px;
					height: 28px;
					display: flex;
					align-items: center;
					justify-content: center;
					font-size: 13px;
					border-radius: 50px;
					transition:.5s all ease;
					&:hover {
						background-color:#C9B583;
						color:#fff;
					}
				}
			} 
			.mp_container {
				max-width:100%;
				.slide img {
					width:100%;
				}
				.slider-container  {
					margin:0;
					.slick-dots {
						position: static;
						padding: 0;
						margin: 14px 0 0;
						list-style-type:none;
						display:flex;
						justify-content: center;
						li {
							margin:0 5px;
							width:auto;
							height:auto;
							line-height: 0;
							&.slick-active {
								button {
									background-color:#C9B583;
								}
							}
							button {
								font-size: 0;
								margin: 0;
								padding: 0;
								width: 7px;
								height: 7px;
								border-radius:7px;
								border: 1px solid #C9B583;
								cursor: pointer;
								&::before {
									display:none;
								}
							}
						}
					}
					.slick-track {

						.slide {
							&:nth-child(1){
								h2{
									bottom: 9%;
								}
							}
							&:nth-child(2){
								h2{
									bottom: 22%;
								}
								& + .slide {
									h2 {
										bottom: unset;
										top: 10%;
										max-width: 85%;
									}
								}
							}

							position:relative;
							h2 {
								color: #fff;
								filter: drop-shadow(2px 5px 7px #0000004F);
								font-weight: 700;
								position: absolute;
								font-size: 55px;
								line-height: 60px;
								left: 0;
								bottom: 9%;
								width: 100%;
								margin: 0;
								font-style:italic;
								padding: 0 4%;

								@media (max-width:1200px){
									font-size: 42px;
									line-height: 50px;
								}
								@media (max-width:991px){
									font-size: 34px;
									line-height: 40px;
								}
								@media (max-width:767px){
									font-size: 24px;
									line-height: 30px;
									padding: 0;
									max-width: 100% !important;
									margin: 20px auto 10px;
									text-align: center;
									position: static;
								}
							}
						}
					}
				}

			}
		}

		.company_logos {
			padding:40px 0  0;
			svg {
				margin-top:18px;
				width:100%;
				height:auto;
				max-width:100%;

			}
			.mp_container {
				max-width:100%;
				display:flex;
				align-items:center;
				gap:30px;
				@media (max-width:991px){
					flex-wrap:wrap;
					justify-content: center;
				}
				.logo_item {
					padding:0 10px;
					@media (max-width:991px){
						flex-wrap:wrap;
						width:30%;
					}
					@media (max-width:576px){
					            width: calc(50% - 30px);
					}
					
					img {
					    filter: drop-shadow(0px 0px 0px #c9b583);
					}
				}
			}
		}
	</style>
	<?php
	$menu_svgs1 = '<svg width="64px" height="64px" viewBox="0 0 12.00 12.00" enable-background="new 0 0 12 12" id="Слой_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00012000000000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <rect fill="#C9B583" height="1" width="11" x="0.5" y="5.5"></rect> <rect fill="#C9B583" height="1" width="11" x="0.5" y="2.5"></rect> <rect fill="#C9B583" height="1" width="11" x="0.5" y="8.5"></rect> </g> </g></svg>';
	$menu_svgs2 = '<svg width="64px" height="64px" viewBox="0 0 12 12" enable-background="new 0 0 12 12" id="Слой_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00012000000000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polygon fill="#C9B583" points="12,0.7070313 11.2929688,0 6,5.2929688 0.7070313,0 0,0.7070313 5.2929688,6 0,11.2929688 0.7070313,12 6,6.7070313 11.2929688,12 12,11.2929688 6.7070313,6 "></polygon></g></svg>';
	$arch_bottom= '			<svg class="arch_bottom" xmlns="http://www.w3.org/2000/svg" width="343" height="26" viewBox="0 0 343 26" fill="none"><path d="M4.08888e-05 0C44.2522 16.0868 104.767 26 171.5 26C238.233 26 298.748 16.0868 343 0V26H0L4.08888e-05 0Z" fill="#F8F8F8"/></svg>';
	$arch_top= '			<svg class="arch_top" xmlns="http://www.w3.org/2000/svg" width="343" height="26" viewBox="0 0 343 26" fill="none" style="transform: scale(-1);"><path d="M4.08888e-05 0C44.2522 16.0868 104.767 26 171.5 26C238.233 26 298.748 16.0868 343 0V26H0L4.08888e-05 0Z" fill="#F8F8F8"/></svg>';
	?>
	<section id="page-content">
		<?php $page_title = get_the_title(); ?>
		<header class="marketing_header">
			<div class="mp_container">
				<?php 
				$header_logo = get_field('header_logo');
				if($header_logo): ?>
				<a class="header-logo" href="">
					<img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>">
				</a>
				<?php endif; ?>

				<nav class="main_menu">
					<?php if(have_rows('menu')): ?>
					<ul>
						<?php while(have_rows('menu')): the_row(); 
						$link = get_sub_field('link');
						if($link): ?>
						<li><a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a></li>
						<?php endif; ?>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</nav>
				<div class="menu_btn">
					<?php echo $menu_svgs1;  ?>  
					<?php echo $menu_svgs2; ?> 
				</div>
			</div>
		</header>
		<section class="mp_hero">
			<h1 class="hidden "> <?php echo $page_title  ?></h1>
			<?php if(have_rows('slider')): ?>
			<div class="mp_container">
				<div class="slider-container">
					<?php while(have_rows('slider')): the_row(); 
					$slide = get_sub_field('slide');
					$title = get_sub_field('title');
					if($slide): ?>
					<div class="slide">
						<img src="<?php echo esc_url($slide['url']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>">
						<?php if($title): ?>
						<h2><?php echo esc_html($title); ?></h2>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if (have_rows('social_icons')) : ?>
			<div class="social-icons">
				<?php while (have_rows('social_icons')) : the_row(); 
					$icon = get_sub_field('icon');
					$link = get_sub_field('link');
				?>
					<a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
						<i class="<?php echo esc_attr($icon); ?>"></i>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		</section>
		<section class="company_logos">
			<?php if(have_rows('logo')): ?>
			<div class="mp_container">
				<?php while(have_rows('logo')): the_row(); 
				$image = get_sub_field('image');
				if($image): ?>
				<div class="logo_item">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1472.5" height="62" viewBox="0 0 1472.5 62">
				<defs>
					<filter id="Polygon_1" x="0" y="0" width="1472.5" height="62" filterUnits="userSpaceOnUse">
						<feOffset dx="21" dy="10" input="SourceAlpha"/>
						<feGaussianBlur stdDeviation="6.5" result="blur"/>
						<feFlood flood-opacity="0.051"/>
						<feComposite operator="in" in2="blur"/>
						<feComposite in="SourceGraphic"/>
					</filter>
				</defs>
				<g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Polygon_1)">
					<path id="Polygon_1-2" data-name="Polygon 1" d="M716,0l716,23H0Z" transform="translate(1432 32.5) rotate(-180)" fill="#fff"/>
				</g>
			</svg>
			<?php endif; ?>
		</section>

		<style>
			.packages_section {
				padding:80px 0 100px;
				@media (max-width:991px){
						padding:60px 0;
				}
				h2 {
					font-weight: 900;
					font-size: 56px;
					line-height: 60px;
					margin:0 0 34px;
					color:#C9B583;
					text-align:center;
						@media (max-width:1200px){
									font-size: 42px;
									line-height: 50px;
								}
								@media (max-width:991px){
									font-size: 34px;
									line-height: 40px;
								}
								@media (max-width:767px){
									font-size: 24px;
									line-height: 30px;
									margin: 0 0 20px;
								}
				}
				.packages_description {
					font-weight: 600;
					font-size: 17px;
					line-height: 26px;
					margin: 0 auto;
					color: #000000;
					text-align: center;
					max-width: 850px;
					p {
						margin:0;
					}
				}

				.packages_container {
					margin: 140px 0 110px;
					position:relative;
					@media (max-width:991px){
						margin: 50px 0 0;
					}
					&::before {
						content:" ";
						position:absolute;
						width:100%;
						height:60%;
						top:50%;
						transform:translateY(-50%);
						background-color: #C9B583;
						z-index: -1;
						opacity:16%;
					}

					.mp_container {
						display:flex;
						align-items:center;
						gap:40px;
						max-width: 1348px;
						@media (max-width:991px){
							flex-direction:column;
						}
						.package {
							&.highlight {
								width: calc(40% - 40px);
								box-shadow: 6px 4px 55px #00000029;
								background-color: #fff;
								padding: 4% 6% 7%;
								@media (max-width:991px){
									width: 100%;
									padding: 40px;
									max-width: 400px;
								}
								h3 {
									font-size: 36px;
									color: #141414;
								}
								.prices { 
									box-shadow: 4px 6px 41px #0000002E;
									background-color: #C9B583;
									width: 150px;
									height: 150px;
									.discounted-price {
										color: #fff;
										font-size: 44px;
									}
									.original-price {
										box-shadow: 4px 6px 41px #0000002E;
										color: #C9B583;
										background-color: #fff;
										width: 80px;
										height: 80px;
									}
								}
								.package-detail {
									color: #000000;
									font-size: 18px;
									line-height: 26px;
									padding: 50px 0;
								}
								a {
									max-width: 216px;
									min-height: 50px;
									background-color: #c9b58300;
									color: #C9B583;
									box-shadow: 3px 3px 18px #0000001A;
									border: 2px solid #C9B583;
									border-radius: 38px;
									font-size: 18px;
									font-weight: 800;
								}
							}

							position:relative;
							background-color:#141414;
							border-radius: 4px 80px 4px 4px;
							width:30%;
							padding: 3% 4%;
							display: flex;
							flex-direction: column;
							@media (max-width:991px){
								width: 100%;
								padding: 40px;
								max-width: 400px;
							}
							&::before {
								content: " ";
								position: absolute;
								top: -5px;
								left: -6px;
								width: 0;
								height: 0;
								border-top: 60px solid #C9B583;
								border-right: 60px solid transparent;
							}
							.prices {
								border-radius: 0px 73px 76px 77px;
								display: flex;
								position:relative;
								background-color: #fff;
								padding: 11px;
								width: 116px;
								height: 116px;
								align-self: center;
								align-items: center;
								justify-content: center;
								box-shadow: 2px 0px 38px #C9B58387;
								.discounted-price {
									font-size: 39px;
									font-weight: 800;
									color: #C9B583;
									line-height: 1;
								}
								.original-price {
									box-shadow: 4px 6px 41px #0000002E;
									transform: translate(-41%, -43%);
									color: #ffff;
									font-size: 13px;
									font-weight: 500;
									line-height: 1;
									background-color: #C9B583;
									position: absolute;
									box-shadow: 4px 6px 41px #0000002E;
									border-radius: 41px;
									width: 66px;
									height: 66px;
									display: flex;
									align-items: center;
									justify-content: center;
									top: 0;
									left: 0;
								}
							}
							h3 {
								line-height: 1.3;
								font-size: 23px;
								color: #fff;
								font-weight: 800;
								text-align: center;
								margin: 0 0 43px;
							}
							.package-detail {
								display: flex;
								flex-direction: column;
								gap: 28px;
								color: #fff;
								flex-grow: 1;
								padding: 25px 0 ;
								font-size: 14px;
								line-height: 22px;
								ul {
									margin: 0;
									padding: 0 0 0 32px;
									li {
										margin:0 0 8px; 
									}
								}
								p {
									margin:0;
								}
							}
							a {
								max-width: 195px;
								width: 100%;
								min-height: 43px;
								background-color: #C9B583;
								color: #fff;
								display: flex;
								align-items: center;
								justify-content: center;
								border-radius: 22px;
								font-size: 14px;
								margin: 0 auto;
							}
						}
					}
				}
			}
		</style>
		<section class="packages_section">
			<div class="mp_container">
				<?php 
				$packages_heading = get_field('packages_heading');
				$packages_description = get_field('packages_description');

				if($packages_heading): ?>
				<h2><?php echo esc_html($packages_heading); ?></h2>
				<?php endif; 

				if($packages_description): ?>
				<div class="packages_description">
					<?php echo wp_kses_post($packages_description); ?>
				</div>
			</div>
			<?php endif; 

			if(have_rows('packages')): ?>

			<div class="packages_container">
				<div class="mp_container">
					<?php while(have_rows('packages')): the_row(); 
					$highlight = get_sub_field('highlight_package');
					$title = get_sub_field('title');
					$original_price = get_sub_field('original_price');
					$discounted_price = get_sub_field('discounted_price');
					$detail = get_sub_field('detail');
					$button = get_sub_field('button');
					?>

					<div class="package <?php echo $highlight ? 'highlight' : ''; ?>">
						<?php if($title): ?>
						<h3><?php echo esc_html($title); ?></h3>
						<?php endif; ?>

						<?php if($original_price || $discounted_price): ?>
						<div class="prices">
							<?php if($original_price): ?>
							<span class="original-price"><?php echo esc_html($original_price); ?></span>
							<?php endif; ?>
							<?php if($discounted_price): ?>
							<span class="discounted-price"><?php echo esc_html($discounted_price); ?></span>
							<?php endif; ?>
						</div>
						<?php endif; ?>

						<?php if($detail): ?>
						<div class="package-detail">
							<?php echo wp_kses_post($detail); ?>
						</div>
						<?php endif; ?>

						<?php if($button): ?>
						<a href="<?php echo esc_url($button['url']); ?>" class="package-button" target="<?php echo esc_attr($button['target']); ?>">
							<?php echo esc_html($button['title']); ?>
						</a>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</section>
		<style>
			.project_showcase {
				background-color:#141414;
				box-shadow: inset 0 2px 1px #ffffff , inset 0 -2px 1px #ffffff;
				.arch_top , .arch_bottom {
					width:100%;
					max-width:100%;
					display:flex;
					height:auto;
					path {
						fill:#fff;
					}
				}
				.projects_container {
					display: flex;
					flex-direction: column;
					.project_item {
						img {
							width:100%;
						}
						&:nth-child(n+3) {
							img {
								margin-top: -40%;
								@media (max-width:767px){
										margin-top: 0;
								}
							}
						}
						&:nth-child(even){
							align-self: flex-end;
						}
						&:nth-child(1){
							width:78%;
							@media (max-width:767px){
								width:92%;
								padding: 0 0 10%;
							}
						}
						&:nth-child(2){
							width:47%;
								@media (max-width:767px){
											width:65%;
								}
						}
						&:nth-child(3){
							width: 49%;
							padding: 0 7%;
								@media (max-width:767px){
									width: 70%;
									padding: 0 4% 10%;
								}
						}
						&:nth-child(4){
							width: 37%;
							padding: 0 14% 0 0;
									@media (max-width:767px){
								                width: 50%;
									padding: 0 4% 10%;
								}
						}
						&:nth-child(5){
							width:44%;
								@media (max-width:767px){
									width: 65%;
									padding: 10% 0;
								}
							img {
								margin-bottom: -55px;
								z-index: 2;
								position: relative;
							}
						}
					}
				}
			}

		</style>

		<section class="project_showcase">
			<?php echo $arch_top; ?> 
			<?php if(have_rows('projects')): ?>
			<div class="projects_container">
				<?php while(have_rows('projects')): the_row(); 
				$project_image = get_sub_field('project_image');
				if($project_image): ?>
				<div class="project_item">
					<img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_image['alt']); ?>">
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php echo $arch_bottom; ?> 
		</section>

		<style>
			.reviews {
				padding-bottom:56px;
				h2 {
					box-shadow: 5px 0px 22px #00000026;
					border-radius: 41px;
					background-color: #C9B583;
					font-size: 40px;
					line-height: 1;
					color: #fff;
					font-weight: 900;
					margin: -43px auto 55px;
					max-width: 570px;
					min-height: 82px;
					display: flex;
					align-items: center;
					justify-content: center;
					position: relative;
					@media (max-width:767px){
						font-size: 26px;
						margin: 70px auto 50px;
						padding: 15px 0;
						width: 80%;
						max-width: unset;
						min-height: unset;
					
					}
				}
				.reviews_wrapper {
					max-width: 1180px;
					width: 100%;
					padding: 0 20px;
					margin: 0 auto;
					display:flex;
					align-items:center;
					gap: 70px;
					@media (max-width:991px){
						padding: 0 10px;
						gap: 15px;
					}

					.slick-arrow , .slick-arrow:active {
						position:static;
						min-width: 50px;
						height: 50px;
						background-repeat: no-repeat;
						background-size: 100% 100%;
						border: none;
						background: transparent;
						cursor: pointer;
						font-size: 0;
							&.slick-prev {
								  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23C9B583' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m15 4l-8 8l8 8'/%3E%3C/svg%3E");

							}
							&.slick-next {
	  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23C9B583' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m8 4l8 8l-8 8'/%3E%3C/svg%3E");
							}
							&::before {
								display:none;
							}
						}

						.review_mage {
							display: flex
								;
							align-items: center;
							justify-content: center;
							margin: 0 0 30px;
							img{
								width:126px;
								height:126px;
								border-radius:50%;
							}
						}
						.review_tagline ,
						.review_content {
							font-size: 22px;
							font-weight: 600;
							color: #C9B583;
							font-style: italic;
							line-height: 36px;
							text-align: center;
								@media (max-width:767px){
								font-size: 18px;
								line-height: 26px;
							}
							p {
								margin:0;
							}
						}
						.review_tagline {
							margin:40px 0 0;
						}
					}
				}

		</style>
		<section class="reviews">
			<?php 
			$review_heading = get_field('review_heading');
			if($review_heading): ?>
			<h2><?php echo esc_html($review_heading); ?></h2>
			<?php endif; 

			if(have_rows('reviews')): ?>
			<div class="reviews_wrapper">
				<?php while(have_rows('reviews')): the_row(); 
				$review_image = get_sub_field('review_image');
				$review_content = get_sub_field('review_content');
				$review_tagline = get_sub_field('review_tagline');
				?>

				<div class="review">
					<?php if($review_image): ?>
					<div class="review_mage">
						<img src="<?php echo esc_url($review_image['url']); ?>" alt="<?php echo esc_attr($review_image['alt']); ?>">
					</div>
					<?php endif; ?>

					<?php if($review_content): ?>
					<div class="review_content">
						<?php echo wp_kses_post($review_content); ?>
					</div>
					<?php endif; ?>

					<?php if($review_tagline): ?>
					<div class="review_tagline">
						<?php echo esc_html($review_tagline); ?>
					</div>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</section>

		<style>
			.contact_form {
				background-color:#141414;
				box-shadow: inset 0 2px 1px #ffffff , inset 0 -2px 1px #ffffff;
				.arch_top , .arch_bottom {
					width:100%;
					max-width:100%;
					display:flex;
					height:auto;
					path {
						fill:#fff;
					}
				}
				.mp_container {
					padding-top:40px;
					padding-bottom:120px;
					@media (max-width:767px){
						padding-bottom:60px;
					}
					> h2 {
						font-weight: 700;
						font-size: 55px;
						line-height: 60px;
						color:#C9B583;
						margin:0 0 20px;	
						text-align: center;
							@media (max-width:1200px){
									font-size: 42px;
									line-height: 50px;
								}
								@media (max-width:991px){
									font-size: 34px;
									line-height: 40px;
								}
								@media (max-width:767px){
									font-size: 24px;
									line-height: 30px;
									margin: 0 0 20px;
								}

					}
					.form_description {
						color: #fff;
						font-size: 17px;
						line-height: 31px;
						max-width: 780px;
						margin: 0 auto;
						text-align: center;
						p {
							margin:0;
						}
					}

					.form_shortcode {
						max-width: 800px;
						margin: 90px auto 0;
						background-color: #fff;
						padding: 4% 8% 1%;
						box-shadow: 20px 12px 32px #00000017;
						border-radius: 15px;
						@media (max-width:767px){
							padding: 40px 20px 0;
						}
						
						h3,h2 {
							margin:0 0 40px;
							font-weight: 800;
							font-size: 45px;
							line-height: 50px;
								color:#C9B583;
						text-align: center;
								@media (max-width:1200px){
									font-size: 40px;
									line-height: 48px;
								}
								@media (max-width:991px){
									font-size: 32px;
									line-height: 40px;
								}
								@media (max-width:767px){
									font-size: 22px;
									line-height: 30px;
									margin: 0 0 20px;
								}
						}
						form {
							align-items: center;
							justify-content: center;
							flex-wrap: wrap;
							column-gap: 100px;
							row-gap: 34px;
							display: flex;
							flex-wrap: wrap;
							max-width: 550px;
							margin: 0 auto;
							.field_col {
								p {
									margin:0;
								}
								br {
									display:none;
								}
								
								label {
									width: 100%;
									margin: 0 0 10px;
									font-size: 18px;
									font-weight: 700;
									text-align:center;
									color:#1F282A;
									&.news {
										text-align:left;
									}
								}
								input {
									box-shadow: inset 2px 2px 5px #00000029 !important;
									border-radius: 27px !important;
									border: none;
									background-color: #F8F8F8;
									font-size: 18px;
									outline: none;
									padding: 27px;
									color: #707070;
									@media (max-width:767px){
										font-size: 16px;
										padding: 13px;
										height:auto;
									}
									&::placeholder {
										color: #707070;
										opacity: 27%;
									}
								}
								span.wpcf7-not-valid-tip {
									text-align: center;
									margin: 0 !important;
								}
								
								&.field_radio {
									.wpcf7-radio {
										display: flex;
										justify-content: center;
										gap: 70px;
										@media (max-width:767px){
											gap: 30px;
										}
									}
									.wpcf7-list-item  {
										display:flex;
										align-items: center;
										gap: 10px;
										input {
											width: 22px;
											margin: 0;
											height: 22px;
											box-shadow: none !important;
											accent-color: #c9b583;
											filter: drop-shadow(0px 0px 1px #c9b583);
										}
										.wpcf7-list-item-label  {
											width: 100%;
											font-size: 18px;
											font-weight: 700;
											text-align:center;
											color:#1F282A;
										}
									}
								
								}
								&.col_6 {
								    width: calc(50% - 50px);
    align-self: flex-start;
									@media (max-width:767px){
									 width: 100%;
									}
								}
								&.col_12 {
								width:100%;
								}
							}
							
							.form_submit {
								width: 100%;
								display: flex;
								justify-content: center;
								p {
								margin:0;
									input[type="submit"] {
										background: #C9B583;
										border-radius: 40px !important;
										max-width: 200px;
										width: 100% !important;
										text-transform: uppercase;
										min-height: 60px;
										font-weight: 900;
										font-size: 18px;
										line-height: 1;
										margin-left: 45px;
										@media (max-width:767px){
											max-width: 100%;
											min-height: 46px;
											height: auto;
											padding: 0;
											font-size: 16px;
											margin-left: 0;
										}
									}
								}
							}
							.wpcf7-response-output {
								margin: 0;
							}
						}
					}
				}

			}
		</style>
		<section class="contact_form">
			<?php 
			$form_heading = get_field('form_heading');
			$form_description = get_field('form_description');
			$form_shortcode = get_field('form_shortcode'); ?>
			<?php echo $arch_top; ?> 
			<div class="mp_container">
				<?php if($form_heading): ?>
				<h2><?php echo esc_html($form_heading); ?></h2>
				<?php endif; 

				if($form_description): ?>
				<div class="form_description">
					<?php echo wp_kses_post($form_description); ?>
				</div>
				<?php endif; 

				if($form_shortcode): ?>
				<div class="form_shortcode">
					<?php echo do_shortcode($form_shortcode); ?>
				</div>
				<?php endif; ?>
			</div>		
			<?php echo $arch_bottom; ?> 
		</section>
			
		</section>
	
	<style>
		#site_footer {
			background-color:#fff;
			padding: 80px 30px;
			.social-icons {
				display: flex;
				justify-content: center;
				gap: 7%;
				a {
					border: 1px solid #C9B583;
					width: 50px;
					height: 50px;
					display: flex;
					align-items: center;
					justify-content: center;
					font-size: 23px;
					border-radius: 50px;
						transition:.5s all ease;
					&:hover {
						background-color:#C9B583;
						color:#fff;
					}
				}
			} 
		}
	</style>

	<footer id="site_footer">
		<?php if (have_rows('social_icons')) : ?>
			<div class="social-icons">
				<?php while (have_rows('social_icons')) : the_row(); 
					$icon = get_sub_field('icon');
					$link = get_sub_field('link');
				?>
					<a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
						<i class="<?php echo esc_attr($icon); ?>"></i>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</footer>
</div>




<?php wp_footer(); ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const menuBtn = document.querySelector('.menu_btn');
			const mainNav = document.querySelector('.main_menu');

			menuBtn.addEventListener('click', function() {
				this.classList.toggle('active');
				mainNav.classList.toggle('active');
			 if (window.innerWidth < 767) {
				 if (mainNav.classList.contains('active')) {
					 document.body.style.overflow = 'hidden';
				 } else {
					 document.body.style.overflow = '';
				 }
			 }
			});
		});
		jQuery(document).ready(function() {
			$('.slider-container').slick({
				arrows: false,
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				adaptiveHeight: true
			});
			$('.reviews_wrapper').slick({
				arrows: true,
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				adaptiveHeight: true
			});
		});
	</script>

</body>
</html>


