<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\DocumentGroupAttribute;
use hamis\document\models\traits\relationship\DocumentGroupRelationship;
use Illuminate\Database\Eloquent\Model;

class DocumentGroup extends Model
{
    use DocumentGroupAttribute, DocumentGroupRelationship;
    protected $guarded = [];
}
