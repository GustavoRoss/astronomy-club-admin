<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Membro Entity
 *
 */
class Membro extends Entity
{

    protected $_accessible = ['*' => true];
    protected $_virtual = ['getHasImage'];
    
    protected function _getHasImage()
    {
        return $this->hasImage; 
    }

}
