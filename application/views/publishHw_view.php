<div id="wrap">
	<div id="title_login">发布作业</div>
	<div class="subTitle_login">作业名</div>
	<?= form_open("teacher/publishHw_check") ?>
	<label><input type="text" name="name" value="<?= set_value('user_name'); ?>"/></label>
    <div class="subTitle_login">截止日期</div>
	<label><input type="text" name="deadline" value="<?= set_value('password'); ?>"/></label>
	<div class="subTitle_login">要求</div>
	<label><input type="text" name="request" value="<?= set_value('password'); ?>"/>
    </label>

	<div id="button">
		<input type="submit" class="button" value="发布" />
		<input type="reset" class="button" value="取消" />
	</div>
	<?= form_close() ?>
	<div id="errMsg"><?= isset($errorMsg) ? $errorMsg : '' ?></div>
</div>