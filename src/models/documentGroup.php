<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\documentGroupAttribute;
use hamis\document\models\traits\relationship\documentGroupRelationship;
use Illuminate\Database\Eloquent\Model;

class documentGroup extends Model
{
    use documentGroupAttribute, documentGroupRelationship;
    protected $guarded = [];
}
