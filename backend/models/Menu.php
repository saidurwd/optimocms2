<?php

namespace backend\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $title
 * @property string $controller
 * @property string $url
 * @property string $groups
 * @property string $icon
 * @property integer $ordering
 * @property integer $status
 */
class Menu extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['parent', 'ordering', 'status'], 'integer'],
            [['title', 'url'], 'required'],
            [['title', 'url'], 'string', 'max' => 150],
            [['controller', 'icon'], 'string', 'max' => 100],
            [['groups'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent' => Yii::t('app', 'Parent'),
            'title' => Yii::t('app', 'Menu'),
            'controller' => Yii::t('app', 'Controller'),
            'url' => Yii::t('app', 'URL'),
            'groups' => Yii::t('app', 'Groups'),
            'icon' => Yii::t('app', 'Icon'),
            'ordering' => Yii::t('app', 'Ordering'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function get_active_parent($id) {
        $customer = Menu::find()
                ->where(['status' => 1, 'controller' => Yii::$app->controller->id])
                ->one();

        $css_class = '';
        if ($customer->parent == $id or $customer->id == $id) {
            $css_class = 'active open';
        } else {
            $css_class = '';
        }
        return $css_class;
    }

    public static function get_active_menu($url) {
        $pieces = explode("/", $url);
        $css_class = '';
//        if (isset(Yii::$app()->controller->id) && count($pieces) > 1) {
//            if (Yii::$app->controller->id == @$pieces[1]) {
//                $css_class = 'active';
//            } else {
//                $css_class = null;
//            }
//        }
        return $css_class;
    }

    public static function get_count_parent($menu_id) {
        $total = Menu::find()
                ->where(['parent' => $menu_id])
                ->count();

        return $total;
    }

    public static function get_menu() {
        $parent1 = Menu::find()
                ->where(['parent' => 0, 'status' => 1])
                ->orderBy('ordering,title ASC')
                ->all();
        echo '<ul>';
        foreach ($parent1 as $key => $values1) {
            echo '<li class="' . Menu::get_active_parent($values1["id"]) . '">';
            if (Menu::get_count_parent($values1["id"]) > 0) {
                echo Html::a('<i class="' . $values1["icon"] . '"></i> <span class="menu-item-parent">' . $values1["title"] . '</span><b class="arrow icon-angle-down"></b>', '#', ['class' => '']);
            } else {
                echo Html::a('<i class="' . $values1["icon"] . '"></i> <span class="menu-item-parent">' . $values1["title"] . '</span>', [$values1["url"]], ['class' => '']);
            };
            $parent2 = Menu::find()
                    ->where(['parent' => $values1["id"], 'status' => 1])
                    ->orderBy('ordering, title ASC')
                    ->all();

            if (count($parent2) > 0) {
                echo '<ul>';
                foreach ($parent2 as $key => $values2) {
                    echo '<li class="' . Menu::get_active_menu($values2["url"]) . '">';
                    if (Menu::get_count_parent($values2["id"]) > 0) {
                        echo Html::a('<i class="' . $values2["icon"] . '"></i> <span class="menu-item-parent">' . $values2["title"] . '</span>', '#', ['class' => '']);
                    } else {
                        echo Html::a('<i class="' . $values2["icon"] . '"></i> ' . $values2["title"], [$values2["url"]], ['class' => '']);
                    }
                    $parent3 = Menu::find()
                            ->where(['parent' => $values2["id"], 'status' => 1])
                            ->orderBy('ordering,title ASC')
                            ->all();
                    if (count($parent3) > 0) {
                        echo '<ul>';
                        foreach ($parent3 as $key => $values3) {
                            echo '<li class="' . Menu::get_active_menu($values3["url"]) . '">';
                            echo Html::a('<i class="' . $values3["icon"] . '"></i> ' . $values3["title"], [$values3["url"]], ['class' => '']);
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        echo '</ul>';
    }

}
