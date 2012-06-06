<div id="main">
	<div class="title">所有作业</div>

	<div class="metroSquWrapper">
		<?php
			foreach ($homeworks as $hw) {
			?>
				<a href="<?= site_url('homework/show_hw_Detail') ?>">
            	<div class="metroSqu colora">
                <div class="metroText">
                    <div textType="title" ><?= $hw['title']?></div>
                    <?= $hw['deadline']?>
                    <div><?= $hw['content'] ?></div>
                </div>
           		 </div>
        		</a>
			<?php
			}
		?>
	
</div>