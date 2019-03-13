<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 3/12/19
 * Time: 10:23 AM
 */

namespace hamis\document\models\traits\relationship;


use Hamis\Document\models\DocumentGroup;
use Hamis\Document\models\DocumentResource;

trait DocumentRelationship
{
    public function documentGroup()
    {
        return $this->belongsTo(DocumentGroup::class);
    }

    public function documentResource()
    {
        return $this->hasMany(DocumentResource::class);
    }
}
