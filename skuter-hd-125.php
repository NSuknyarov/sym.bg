<?php include 'templates/header.php'; ?>
<h2>HD 125 EVO</h2>
<div class="container">
<div class="row-fluid">
	<div class="span3 pagination-centered">
	<img class="img-polaroid" src="resources/images/hd-125/sym-hd-125-1.jpg" alt="скутер SYM HD 125 EVO"/>
	</div>
	<div class="span9">
		<h4 class="text-blue">Скутер от висока класа</h4>
			<p>
			</p>
			<p class="text-blue" style="font-size:x-large;"> Цена: 4790лв.</p>
		</div>
	</div>
	<div class="row-fluid">
	<div class="span7">
	<h4 align="center">Галерия</h4>
		<div id="links">
		<ul class="thumbnails pagination-centered">
			<a href="resources/images/hd-125/sym-hd-125-1.jpg" title="SYM HD 125 EVO">
			<img src="resources/images/hd-125/sym-hd-125-1.jpg" class="img-polaroid" alt="SYM HD 125 EVO image1" style="width: 100px; height: 100px;">
			</a>
			<a href="resources/images/hd-125/sym-hd-125-2.jpg" title="SYM HD 125 EVO">
			<img src="resources/images/hd-125/sym-hd-125-2.jpg" class="img-polaroid" alt="SYM HD 125 EVO image2" style="width: 100px; height: 100px;">
			</a>
			<a href="resources/images/hd-125/sym-hd-125-3.jpg" title="SYM HD 125 EVO">
			<img src="resources/images/hd-125/sym-hd-125-3.jpg" class="img-polaroid" alt="SYM HD 125 EVO image3" style="width: 100px; height: 100px;">
			</a>
		</ul>
		</div>
	</div>
	<div class="span5">
    		<h4>Технически данни</h4>
			<table class="table table-condensed">
				<tbody>
					<tr>
						<td width="40%" valign="top" height="18" class="text_bold">ТИП ДВИГАТЕЛ</td>
						<td width="60%" valign="top" class="text">Едноцилиндров, 4-тактов, 4-клапана, керамична наслойка на цилиндъра</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">РАБОТЕН ОБЕМ</td>
						<td width="70%" valign="top" class="text">124.5 cm&sup3;</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ОХЛАЖДАНЕ</td>
						<td width="70%" valign="top" class="text">Водно</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">ГОРИВНА СИСТЕМА</td>
						<td valign="top" class="text">Карбуратор</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">ТРАНСМИСИЯ</td>
						<td valign="top" class="text">Вариатор</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ПРЕДНО ОКАЧВАНЕ</td>
						<td width="70%" valign="top" class="text">Телескопична вилка</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ЗАДНО ОКАЧВАНЕ</td>
						<td width="70%" valign="top" class="text">Люлеещо се рамо</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ПРЕДНА СПИРАЧКА</td>
						<td width="70%" valign="top" class="text">Дискова &oslash;226 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ЗАДНА СПИРАЧКА</td>
						<td width="70%" valign="top" class="text">Дискова &oslash;220 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ПРЕДНА ГУМА</td>
						<td width="70%" valign="top" class="text">100 / 80 - 16</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">ЗАДНА ГУМА</td>
						<td width="70%" valign="top" class="text">120 / 80 - 16</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">РАЗМЕРИ ДхШхВ(mm)</td>
						<td width="70%" valign="top" class="text">2070х760х1240</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">МЕЖДУОСИЕ</td>
						<td valign="top" class="text">1380 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">НЕТО ТЕГЛО</td>
						<td valign="top" class="text">145 kg</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">РЕЗЕРВОАР ЗА ГОРИВО</td>
						<td valign="top" class="text">7.8 l</td>
					</tr>
				</tbody>
			</table>
	</div>
	<script>
	document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link},
        links = this.getElementsByTagName('a');
    if (blueimp.Gallery(links, options)) {
        return false;
    }
	};
	</script>
</div>
</div>

<?php include 'templates/footer.php'; ?>
