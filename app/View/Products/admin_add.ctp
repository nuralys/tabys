<div class="title admin_t">
		<h2>Добавление материала</h2>
	</div>
<?php
echo $this->Form->create('Product', array('type' => 'file'));?>
<div class="input select">
<label for="ProductCategoryId">Категории:</label>
	<select required name="data[Product][category_id]" id="ProductCategoryId">
		<option value="">Выберите категорию</option>
		<?php foreach($categories as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('specification', array('label' => 'Спецификация'));
echo $this->Form->input('advantages', array('label' => 'Преимущества'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('published', array('type'=>'checkbox','hiddenField' => false, 'label'=>'Опубликован'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова', 'placeholder' => 'Ключевые слова '));
echo $this->Form->input('description', array('label' => 'Описание', 'placeholder' => 'Описание '));
echo $this->Form->end('Создать');
?>
</div>