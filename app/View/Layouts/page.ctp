<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Табыс</title>
		<?php if(isset($meta['keywords'])): ?>
			<meta name="keywords" content="<?=$meta['keywords']?>">
		<?php endif; ?>
		<?php if(isset($meta['description'])): ?>
			<meta name="description" content="<?=$meta['description']?>">
		<?php endif; ?>
		<link href="/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php echo $this->Session->flash('good'); ?>
	    <?php echo $this->Session->flash('bad'); ?>
		<div class="top">
			<?=$this->element('header') ?>
			<div class="inner">				
				<?php echo $this->fetch('content'); ?>
			</div>	
		</div>
	  <div class="benefits">
				<div class="inner">
					<ul class="ben-ul">
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--quality">
						  	<span class="ben-des__heading">Качество</span>
						  	<p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p>	
						  </div>
						</li>
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--qarrancy">
						  	<span class="ben-des__heading">Гарантия</span>
						  	<p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p>	
						  </div>
						</li>
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--delivery">
						  	<span class="ben-des__heading">Доставка</span>
						  	<p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p>	
						  </div>
						</li>
					</ul>
				</div>
		</div>
	  <div class="inner">				  
		  <div class="our-clients">
		  	<span class="up-heading our-clients__heading">
		  		Наши клиенты
		  	</span>
		  	<div class="client-carousel">
		  		<div class="client-carousel__item">
		  			<img alt="Клиент" src="/img/client.png">
		  		</div>
		  		<div class="client-carousel__item">
		  			<img alt="Клиент" src="/img/client.png">
		  		</div>
		  		<div class="client-carousel__item">
		  			<img alt="Клиент" src="/img/client.png">
		  		</div>
		  		<div class="client-carousel__item">
		  			<img alt="Клиент" src="/img/client.png">
		  		</div>
		  	</div>
		  </div>
	  </div>
	<?=$this->element('footer')?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
	</body>
</html>