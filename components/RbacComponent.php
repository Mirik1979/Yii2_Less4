<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 03/04/2019
 * Time: 20:41
 */

namespace app\components;

use app\rules\ViewOwnerActivityRule;
use yii\base\Component;

class RbacComponent extends Component
{
    /**
     * @return \yii\rbac\ManagerInterface
     */
    private function getAuthManager()
    {
        return \Yii::$app->authManager;
    }

    public function generateRbac()
    {
        $authManager = $this->getAuthManager();
        $authManager->removeAll();
        $admin = $authManager->createRole('admin');
        $user = $authManager->createRole('user');
        $authManager->add($admin);
        $authManager->add($user);

        $create_activity=$authManager->createPermission('create_activity');
        $create_activity->description='Создание события';
        $authManager->add($create_activity);
        $view_activity=$authManager->createPermission('view_activity');
        $view_activity->description='Просмотр события';
        $authManager->add($view_activity);
        $editViewAllActivity=$authManager->createPermission('editViewAllActivity');
        $editViewAllActivity->description='Просмотр и редактированию любых событий';
        $authManager->add($editViewAllActivity);
        $authManager->addChild($user,$create_activity);
        $authManager->addChild($user,$view_activity);
        $authManager->addChild($admin,$user);
        $authManager->addChild($admin,$editViewAllActivity);
        $authManager->assign($admin,5);
        $authManager->assign($user,6);

    }

    public function canCreateActivity(): bool
    {
        return \Yii::$app->user->can('create_activity');
    }

    public function editViewAllAcitivity(): bool
    {
        return \Yii::$app->user->can('editViewAllActivity');
    }


}