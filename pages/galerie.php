<div class="content">
	<div class="gallery">
		<div id="instafeed" class="instafeed"></div>
        <div class="clear"></div>
		<div style="margin-top: 20px;">
			<a href="https://www.instagram.com/polsterwerk/" target="_blank">Mehr Bilder auf Instagram</a>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		userId: '2231736641',
		accessToken: '2231736641.1677ed0.df6b0200364642d3a060c53322348cda',
		resolution: 'standard_resolution',
		limit: 30,
		template: '<a href="{{image}}" data-lightbox="galerie" id="{{id}}" style="background-image: url({{image}});"></a>',
		sortBy: 'most-recent'
	});
	userFeed.run();
</script>
<style>
	.gallery {
		margin-left: -10px;
		margin-right: -10px;
	}

	.instafeed a {
		float: left;
		margin: 10px;
		width: 200px;
		height: 200px;
		background-size: cover;
		background-repeat: none;
		background-position: center center;
	}
</style>
