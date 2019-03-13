<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 3/12/19
 * Time: 10:23 AM
 */

namespace hamis\document\models\traits\relationship;


use Hamis\Document\models\documentGroup;
use Hamis\Document\models\documentResource;

trait documentRelationship
{
    public function documentGroup()
    {
        return $this->belongsTo(documentGroup::class);
    }

    public function documentResource()
    {
        return $this->hasMany(documentResource::class);
    }
}
