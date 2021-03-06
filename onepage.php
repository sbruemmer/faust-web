<?php include "includes/header.php"; ?>

<section id="placeholder">
	<!-- Hier landen die Inhalte der eigenen Seiten -->
</section>


<script type="text/javascript">
	/* Diese Seiten werden, in der Reihenfolge in der sie hier stehen, zusammengeklebt.
	   Jeweils nur der Inhalt der ersten <section>.
	*/
	var pages = [
		"project",
		"intro",
		"metadata",
		"transcription_guidelines",
		"multispectral_imaging",
		"x-ray_spectrometry",
		"watermarks",
		"imprint",
		],
		placeholder = document.getElementById('placeholder');
	pages.forEach(function(page) {
		var target = document.createElement('p');
		target.textContent = "Loading " + page + " …";
		placeholder.appendChild(target);
		var req = new XMLHttpRequest();
		req.addEventListener("load", function(e) {
			var doc = req.response,
			    main = doc.getElementsByTagName('main')[0],
			    content = main.getElementsByTagName('section')[0];
			placeholder.replaceChild(content, target);
		});
		req.responseType = "document";
		req.open("GET", page, true);
		req.send();
	});
</script>


<?php include "includes/footer.php"; ?>
