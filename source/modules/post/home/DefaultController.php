<?php
namespace source\modules\post\home;

use source\models\Content;
use source\LuLu;
use source\models\Takonomy;
use source\modules\post\models\ContentPost;
use frontend\controllers\BaseContentController;

class DefaultController extends BaseContentController
{

    public function init()
    {
        $this->content_type = 'post';
        parent::init();
    }

    public function getDetail($id)
    {
        $model = Content::getBody(ContentPost::className(), [
            'a.id' => $id
        ])->one();
       
        return [
            'model' => $model
        ];
    }
}
