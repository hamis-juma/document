<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\DocumentAttribute;
use hamis\document\models\traits\relationship\DocumentRelationship;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use DocumentAttribute, DocumentRelationship;
    protected $guarded = [];
}
