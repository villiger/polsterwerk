<div class="content">
	<div class="gallery">
		<div id="instafeed" class="instafeed"></div>
        <div class="clear"></div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		userId: '2231736641',
		accessToken: '2231736641.1677ed0.df6b0200364642d3a060c53322348cda',
		resolution: 'low_resolution',
		sortBy: 'random',
		limit: 16,
		template: '<a href="{{link}}" data-lightbox="galerie" id="{{id}}" style="background-image: url({{image}});"></a>'
	});
	userFeed.run();
</script>
<style>
	.gallery {
		margin-left: -20px;
		margin-right: -20px;
	}

	.instafeed a {
		float: left;
		margin: 20px;
		width: 200px;
		height: 200px;
		background-size: cover;
		background-repeat: none;
		background-position: center center;
	}
</style>
