<div class="catalog-up">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__li">
            <a href="/">Главная</a>
        </li>
        <li class="breadcrumbs__li">Продукция</li>
    </ul>
    <h1 class="up-heading up-heading--content">Продукция</h1>
</div>  
<div class="catalog">
    <ul class="left-category">
        <li class="left-category__item">
            <a class="category-option category-option--cab" href="/category/dushevye-kabiny">Душевые кабины</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--forbath" href="/category/mebel-dlya-vannoy-komnaty">Мебель для ванной комнаты</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--sanfoyas" href="/category/sanfayans">Санфаянс</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--kafel" href="/category/kafel">Кафель</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--smes" href="/cats/smesiteli">Сместители</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--bath" href="/category/vanny">Ванны</a>
        </li>
        <li class="left-category__item">
            <a class="category-option  category-option--sushka" href="/category/polotencesushiteli">Полотенцесушители</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--akses" href="/cats/aksessuary">Аксессуары</a>
        </li>
    </ul>
    <div class="catalog__view">
        <ul class="catalog-list">
            <?php foreach($child_cats as $item): ?>
                <li class="catalog-list__item">
                    <div class="product-mini">
                        <img class="product-mini__img" src="/img/category/<?=$item['Category']['img']?>">
                        <div class="mini-info">
                            <span class="mini-info__heading"><?=$item['Category']['title']?></span>
                           
                            
                            <a class="more mini-info__more" href="/category/<?=$item['Category']['alias']?>">Узнать подробнее о товаре</a>
                        </div>  
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
        <!-- <div class="pagination-part">
            <ul class="pagination">
                <li class="pagination__li pagination__li--active">
                    <a href="#">1</a>
                </li>
                <li class="pagination__li">
                    <a href="#">2</a>
                </li>
                <li class="pagination__li">
                    <a href="#">3</a>
                </li>
                <li class="pagination__li">
                    <a href="#">4</a>
                </li>
                <li class="pagination__li">
                    <a href="#">5</a>
                </li>
                <li class="pagination__li">
                    <a href="#">6</a>
                </li>
                <li class="pagination__li">
                    <a href="#">7</a>
                </li>
                <li class="pagination__li">
                    <a href="#">8</a>
                </li>
            </ul>
        </div> -->  
    </div>
</div>