<header>
   <div class="headerbox">
   <a href="http://glitch.fm"><h3><span class="alert">next show</span>:: <?=$show['show_date']?> with
   <?=$show['host_dj_name']?> 
   <?php if($show['guest_dj_name']):?> and <?=$show['guest_dj_name']?> <?php endif; ?> on <?=$show['station_id']?></h3></a>
	</div>
</header>
<article class = "landing">
	<div class = "landing_bg">
	</div>
	<div class="button">
	<span class = "talkbutton">
		<a href="http://glitch.fm/talk">talk</a>
	</span>
	<span class = "listenbutton">
		<a href="http://glitch.fm/ebp.php">listen</a>
	</span>
	</div>
</article>