<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\documentResourceAttribute;
use hamis\document\models\traits\relationship\documentResourceRelationship;
use Illuminate\Database\Eloquent\Model;

class documentResource extends Model
{
    use documentResourceAttribute, documentResourceRelationship;
    protected $guarded = [];
}
