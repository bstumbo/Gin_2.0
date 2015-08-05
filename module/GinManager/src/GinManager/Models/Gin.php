<?php

namespace GinManager\Models;

class Gin {
    
    public $ginId;
    public $ginName;
    public $ginType;
    public $ginBrand;
    public $ginImage;
    public $ginThumb;
    public $juniper;
    public $citrus;
    public $spice;
    public $herbal;
    public $floral;
    public $proof;
    public $aged;
    public $tree;
    public $ginPriceOz;
    public $gindescription;
    public $ginOrigin;
    
    public function exchangeArray($data){
        $this->ginId = (isset($data['gin_key'])) ? $data['gin_key'] : null;
        $this->ginType = (isset($data['gin_type'])) ? $data['gin_type'] : null;
        $this->ginName = (isset($data['gin_name'])) ? $data['gin_name'] : null;
        $this->ginBrand = (isset($data['brand'])) ? $data['brand'] : null;
        $this->ginImage = (isset($data['gin_image'])) ? $data['gin_image'] : null;
        $this->ginThumb = (isset($data['gin_thumbnail'])) ? $data['gin_thumbnail'] : null;
        $this->juniper = (isset($data['Juniper'])) ? $data['Juniper'] : null;
        $this->citrus = (isset($data['Citrus'])) ? $data['Citrus'] : null;
        $this->spice = (isset($data['Spice'])) ? $data['Spice'] : null;
        $this->herbal = (isset($data['Herbal'])) ? $data['Herbal'] : null;
        $this->floral = (isset($data['Floral'])) ? $data['Floral'] : null;
        $this->proof = (isset($data['Proof'])) ? $data['Proof'] : null;
        $this->aged = (isset($data['Aged'])) ? $data['Aged'] : null;
        $this->tree = (isset($data['Tree'])) ? $data['Tree'] : null;
        $this->ginPriceOz = (isset($data['Price_per_oz'])) ? $data['Price_per_oz'] : null;
        $this->gindescription = (isset($data['Description'])) ? $data['Description'] : null;
        $this->ginOrigin = (isset($data['Origin'])) ? $data['Origin'] : null;
    }
    
    
}