<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 3/12/19
 * Time: 10:23 AM
 */

namespace hamis\document\models\traits\relationship;


use Hamis\Document\models\document;

trait documentGroupRelationship
{
    public function document()
    {
        return $this->hasMany(document::class);
    }
}
