<div class="catalog-up">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__li">
      <a href="/">Главная</a>
    </li>
    <li class="breadcrumbs__li">
    <a href="/products">Продукция</a>
    </li>
    <li class="breadcrumbs__li"><?=$data['Product']['title'] ?></li>
  </ul>
  <h1 class="up-heading up-heading--content">Карточка товара</h1>
</div>
<div class="product">
  <div class="product__img">
    <img alt="<?=$data['Product']['title']?>" src="/img/product/<?=$data['Product']['img']?>">
  </div>
  <div class="product__right">
    <div class="product-des">
      <span class="product-des__heading">
        <?=$data['Product']['title']?>
      </span> 
      <div class="tabs">
        <div class="tabs__item tabs__item--active">
          Описание
        </div>
        <div class="tabs__item">
          Спецификация
        </div>
        <div class="tabs__item">
          Преимущества
        </div>
      </div>
      <div class="info-tabs">
        <div class="tabs-des">
          <?=$data['Product']['body']?>
        </div>
        <div class="tabs-des">
          <?=$data['Product']['specification']?>
        </div>
        <div class="tabs-des">
          <?=$data['Product']['advantages']?>
        </div>
      </div>  
    </div>
  </div>
</div>