<!DOCTYPE html>
<html lang="en">
<body>
<?php foreach($articles as $item): ?>
    <p><?= $item ['title']; ?></p>
    <p><?= $item ['text']; ?></p>
    <p><?= $item ['date']; ?></p>
<?php endforeach; ?>

<?= $this->pagination->create_links(); ?>

</body>
</html>