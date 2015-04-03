<?php include 'templates/header.php'; ?>
<h2>Orbit II 50</h2>
<div class="container">
<div class="row-fluid">
	<div class="span4 pagination-centered">
	<img class="img-polaroid" src="../resources/images/orbit2/sym-orbit-1.jpg" alt="scooter SYM Orbit II 50"/>
	</div>
	<div class="span8">
		<h4 class="text-blue">Stylish Scooter with Attractive Price</h4>
			<p>
				Descending from Orbit, Orbit II continues to cater to the younger generation for its stylish light sporty spirits at 
				an affordable price. Orbit II comes with extremely simple yet neat and cool body design and is enriched with stylish 
				graphics and colors. Orbit II fitly embodies the image of youth and vitality! Let’s just take Orbit II to follow a 
				brand-new orbit of the universe!
			</p>
		<!-- <a class="btn btn-large btn-primary btn-custom" href="http://www.velona-bg.com/catalog/product_info.php?currency=BG&manufacturers_id=66&products_id=505&language=BG" target="_blank">Цена</a>
		-->
		</div>
	</div>
	<div class="row-fluid">
	<div class="span6">
	<h4 align="center">Gallery</h4>
		<div id="links">
		<ul class="thumbnails pagination-centered">
			<a href="../resources/images/orbit2/sym-orbit-1.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-1.jpg" class="img-polaroid" alt="SYM Orbit II 50 image1" style="width: 110px; height: 110px;">
			</a>
			<a href="../resources/images/orbit2/sym-orbit-2.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-2.jpg" class="img-polaroid" alt="SYM Orbit II 50 image2" style="width: 110px; height: 110px;">
			</a>
			<a href="../resources/images/orbit2/sym-orbit-3.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-3.jpg" class="img-polaroid" alt="SYM Orbit II 50 image3" style="width: 110px; height: 110px;">
			</a>
			<a href="../resources/images/orbit2/sym-orbit-6.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-6.jpg" class="img-polaroid" alt="SYM Orbit II 50 image4" style="width: 110px; height: 110px;">
			</a>
			<a href="../resources/images/orbit2/sym-orbit-4.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-4.jpg" class="img-polaroid" alt="SYM Orbit II 50 image5" style="width: 80px; height: 110px;">
			</a>
			<a href="../resources/images/orbit2/sym-orbit-5.jpg" title="SYM Orbit II 50">
			<img src="../resources/images/orbit2/sym-orbit-5.jpg" class="img-polaroid" alt="SYM Orbit II 50 image6" style="width: 80px; height: 110px;">
			</a>
		</ul>
		</div>
	</div>
	<div class="span6">
    		<h4>Technical Specifications</h4>
			<table class="table table-condensed">
				<tbody>
					<tr>
						<td width="40%" valign="top" height="18" class="text_bold">ENGINE TYPE</td>
						<td width="60%" valign="top" class="text">1 Cylinder, 4-Stroke</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">DISPLACEMENT</td>
						<td width="70%" valign="top" class="text">49,4 cm&sup3;</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">COOLING SYSTEM</td>
						<td width="70%" valign="top" class="text">Air</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">FUEL SYSTEM</td>
						<td valign="top" class="text">Carburetor</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">TRANSMISSION</td>
						<td valign="top" class="text">CVT</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">FRONT SUSPENSION</td>
						<td width="70%" valign="top" class="text">Telescopic Fork</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">REAR SUSPENSION</td>
						<td width="70%" valign="top" class="text">Unit Swing</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">FRONT BRAKE</td>
						<td width="70%" valign="top" class="text">Disk &oslash;190 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">REAR BRAKE</td>
						<td width="70%" valign="top" class="text">Drum &oslash;110 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td width="30%" valign="top" height="18" class="text_bold">DIMENSSIONS LхWхH(mm)</td>
						<td width="70%" valign="top" class="text">1905x690x1125</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">WHEELBASE</td>
						<td valign="top" class="text">1310 mm</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">DRY WEIGHT</td>
						<td valign="top" class="text">99 kg</td>
					</tr>
					<tr class="scheda_tnt">
						<td valign="top" height="18" class="text_bold">FUEL CAPACITY</td>
						<td valign="top" class="text">5.2 l</td>
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
