<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\documentAttribute;
use hamis\document\models\traits\relationship\documentRelationship;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use documentAttribute, documentRelationship;
    protected $guarded = [];
}
