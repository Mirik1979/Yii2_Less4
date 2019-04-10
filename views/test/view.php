<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 06/04/2019
 * Time: 19:57
 */
echo "Cозданные события";
?>
<?php if ($data): ?>
    <?=\app\widgets\daotable\DaoTableWidget::widget(['activities' => $data]);?>
<?php endif; ?>

