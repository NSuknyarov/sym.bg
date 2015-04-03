<?php include 'templates/header.php'; ?>

<h2>Contacts</h2>
<div class="media" >
	<ul class="thumbnails">
			<li class="" id="links">
				<a href="../resources/images/map2.jpg" title="Map">
				<img class="media-object pull-left img-polaroid" src="../resources/images/map2.jpg"/ alt="Location" style="width: 200px; height: 200px;">
				</a>
			</li>
			<li>
				<h5>VELONA Ltd.</h5>
				<div><strong>Address:</strong> Akad.Mihail Arnaudov 2, 7013 Ruse, Bulgaria</div>
				<div><strong>Phone:</strong> +359888800245</div>
				<div><strong>e-mail:</strong> velona@dir.bg</div>
				<div>
					<strong>Online Shop:</strong>
					<a href="http://velona.bg/en/" target="_blank">Velona.bg</a>
				</div>
			</li>
	</ul>
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


<?php include 'templates/footer.php'; ?>
