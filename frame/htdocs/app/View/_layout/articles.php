<!DOCTYPE HTML>
<HTML>
    <head>
		<TITLE>13.2</TITLE>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo SERVER;?>style/style.css" type="text/css" />
    </head>
	<body>
		<div class="header">
			<div class="menu_container">
				<nav class="menu">
					<ul>
						<li><?php echo $menu; //MENUHA ?></li>
						<li><a href="#">Page 2</a></li>
						<li><a href="#">Page 3</a></li>
						<li><a href="#">Page 4</a></li>
						<li><a href="#">Page 5</a></li>
						<li><a href="#">Page 6</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="content">
			<div class="left">
				<div class="four_image">
					<div><img src="http://www.cooksa.ru/upload/recipes/images/recipes3630-step6.jpg"/></div>
					<div><img src="http://www.cooksa.ru/upload/recipes/images/recipes3630-step6.jpg"/></div>
					<div><img src="http://www.cooksa.ru/upload/recipes/images/recipes3630-step6.jpg"/></div>
					<div><img src="http://www.cooksa.ru/upload/recipes/images/recipes3630-step6.jpg"/></div>
				</div>
				<div class="left_bottom_block">Здесь будет текст</div>
				<div class="left_bottom_block">Здесь будет текст</div>
			</div>
			<div class="right">
				<div class="right_block"><?php echo $content_for_layout; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer">
			<div class="footer_content">
				<div>низ</div>
			</div>
		</div>
	</body>
</HTML>

