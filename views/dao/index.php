<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 30/03/2019
 * Time: 16:41
 */

echo "<pre/>";
print_r($users);
echo "<pre>";

echo "<pre/>";
print_r($activitybyuser);
echo "<pre>";
?>

<?php if ($users): ?>
<?=\app\widgets\daotable\DaoTableWidget::widget(['activities' => $users]);?>
<?php endif; ?>
