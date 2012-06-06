<div id="main">
	<div class="title">首页</div>

	<div class="metroWrapper_hw">
		<div class="subTitle">作业</div>
		<?php
			if (isset($homewroks)) {
				foreach ($homeworks as $hw) {
				?>
				<a href="#">
            	<div class="metro colora">
        			<div class="metroText">
	        			<div textType="title" ><?= $hw['title']?></div>
	            		<?= $hw['grade']?>
        			</div>
            	</div>
       			 </a>
				<?php
				}
			}
		?>

	</div>
	<div class="metroWrapper">
            <div class="subTitle">小组</div>
		<a href="#">
            <div class="metroRec colorf">
                <div class="metroButton">我的小组
                </div>          
            </div>
        </a>
		<a href="#">
            <div class="metroRec colork">
                <div class="metroButton">创建小组
                </div>          
            </div>
        </a>
		<a href="#">
            <div class="metroRec colorl">
                <div class="metroButton">加入小组
                </div>          
            </div>
        </a>
	</div>
	
</div>