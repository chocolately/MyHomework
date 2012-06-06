<div id="main">
	<div class="title">所有作业</div>

	<div class="metroSquWrapper">
		<?php
			foreach ($homeworks as $hw) {
			?>
				<a href="<?= site_url('homework/showDetail') ?>">
            	<div class="metroSqu colora">
                <div class="metroText">
                    <div textType="title" ><?= $hw['title']?></div>
                    <?= $hw['deadline']?>
                </div>
           		 </div>
        		</a>
			<?php
			}
		?>
	
</div>