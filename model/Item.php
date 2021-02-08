<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/psi11090/'.'model/Model.php';

final class Item extends Model {

    private $codItem;

    public function __construct() {
        parent::__construct();
    }
    
    public function getCodItem()
    {
        return $this->codItem;
    }

    public function setCodItem($codItem)
    {
        $this->codItem = $codItem;

        return $this;
    }
}
