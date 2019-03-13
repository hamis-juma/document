<?php

namespace hamis\document\models;

use hamis\document\models\traits\attribute\DocumentResourceAttribute;
use hamis\document\models\traits\relationship\DocumentResourceRelationship;
use Illuminate\Database\Eloquent\Model;

class DocumentResource extends Model
{
    use DocumentResourceAttribute, DocumentResourceRelationship;
    protected $guarded = [];
}
