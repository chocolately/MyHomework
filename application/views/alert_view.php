<div id="wrap">
	<div id	="alert"><?= isset($alertMsg) ? $alertMsg : ''?></div>
	<div id="button">
		<a href="<?= site_url('Teacher/delete_user_check')?>"><input type="button" class="button" value="确定" /></a>
		<a href="<?= site_url('Teacher/user_admin')?>"><input type="reset" class="button" value="取消" /></a>
	</div>
	<div id="errMsg"><?= isset($errorMsg) ? $errorMsg : '' ?></div>
</div>