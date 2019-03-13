<?php

namespace hamis\document;

use hamis\document\repo\documentGroupRepo;
use hamis\document\repo\documentRepo;
use hamis\document\repo\documentResourceRepo;

class document
{
    // Build wonderful things
    protected $document_group_repo;
    protected $document_repo;
    protected $document_resource_repo;

    /**
     * document constructor.
     */
    public function __construct()
    {
        $this->document_group_repo = new documentGroupRepo();
        $this->document_repo = new documentRepo();
        $this->document_resource_repo = new documentResourceRepo();
    }


}
