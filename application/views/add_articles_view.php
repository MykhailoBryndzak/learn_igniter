<!DOCTYPE html>

<body>

<form method="post" action="<?=base_url();?>index.php/add_articles">

    НАЗВА СТАТТІ:<br/><input type="text" name="title" value="<?=set_value('title')?>" /><?=form_error('title') ?><br/>

    ТЕКСТ СТАТТІ:<br/><textarea name="text" rows="10" cols="40"><?=set_value('text')?></textarea> <?=form_error('text') ?><br/>

<!--    ДАТА ДОБАВЛЕННЯ:<br/><input type="text" name="date" value="--><?//=set_value('date')?><!--"  />--><?//=form_error('date') ?><!-- <br/>-->

    <input type="submit" name="add" value="Додати" />
</form>

</body>
