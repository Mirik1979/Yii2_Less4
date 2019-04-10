<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 06/04/2019
 * Time: 18:24
 */
?>

<table class="table table-bordered small">
        <tr>
            <?php foreach ($data[0] as $k => $v): ?>
                <td><?= \yii\bootstrap\Html::encode($k) ?></td>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($data as $v): ?>
            <tr>
                <?php foreach ($v as $_v): ?>
                    <td><?= \yii\bootstrap\Html::encode($_v) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
  </table>