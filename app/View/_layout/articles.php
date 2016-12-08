<!DOCTYPE HTML>
<Html>
    <Head>
    <Title>Шифры</Title>
        <Meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>style/G_Style.css" />
    </Head>
<Body>
	<Div class="Logo"><A name="0" class="Bookmark"></A>
		<Img src="Img/logo.png" />
	</Div>
	
	<Div class="Menu Delimiter">
		<Div class="Block_Head">Навигация по сайту</Div>
		<Div class="Block_Body">
			<Ul>
				<?php echo $menu;?>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Навигация по странице</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="#0">В верх</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Оповещения</Div>
		<Div class="Block_Body">
			8(123)123-23-23
		</Div>
	</Div>
	
	<Div class="General">
		<Div class="Block_Head">О сайте.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			Данный сайт поможет вам найти нужную информацию в большом обьеме текста.
		</Div>
		
		<Div class="Block_Head">Парсер<A name="2" class="Bookmark">#2</A></Div>
		<Div class="Block_Body">
			<Form method="post" >
			<P class="P_Null">Url сайта.</P>
			<Input type="text" name="_URL" reqyred class="Type_Text"></Input>
		
			<P class="P_Null">Шаблон поиска</P>
			<select class="Type_Text"  name="_Pattern">
				<option>Выберите шаблон</option>
				<option value="1">Английские слова</option>
				<option value="2">Помер телефона шаблон 8(ХХХ)ХХХ-ХХ-ХХ</option>
				<option value="3">ФИО</option>
				<option value="4">Дата</option>
				<option value="5">Почтовый индекс</option>
				<option value="6">Адрес электронной почты</option>
			</select>
			<Input type="submit" value="кнопка" class="Type_Button" />
		</Div>
		
		<Div class="Block_Head">Результат.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			<?php
				$DB = Dbconnect::instance()->getConnect();
				$user = $DB->select('SELECT * FROM `article`');
				foreach($user as $shit => $do)
				{
					echo '<div class="aeticle">';
					echo ("<h2>$do[title]</h2>");
					echo("<h5>&#1057;&#1086;&#1079;&#1076;&#1072;&#1085;&#1086;: $do[created] | &#1048;&#1079;&#1084;&#1077;&#1085;&#1077;&#1085;&#1086;: $do[update]</h5>");
					echo ("<p>$do[description]</p>");
					echo '<div><br>';
				}
			?>
		</Div>
		
		<Div class="Clear"></Div>
	</Div>
	
</Body>
</Html>