<?php
namespace HamburgerJungeJr\FeUserCards\Domain\Model;

/**
 * FrontendUser Model for fe_user cards
 */

 class ExtendedFrontendUser extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {
    /**
     * @var string
     */
    protected $feUserCardsPosition;

    /**
     * @var string
     */
    protected $feUserCardsSorting;
    
    function __construct() {
        parent::__construct();
    }

    /**
     * Get Position
     * 
     * @return string
     */
    public function getFeUserCardsPosition(){
        return $this->feUserCardsPosition;
    }

    /**
     * Set Position
     * 
     * @param string $position position
     * @return void
     */
    public function setFeUserCardsPosition($position){
        return $this->feUserCardsPosition;
    }

    /**
     * Get Sorting
     * 
     * @return string
     */
    public function getFeUserCardsSorting(){
        return $this->feUserCardsSorting;
    }

    /**
     * Set Sorting
     * 
     * @param string $sorting sorting
     * @return void
     */
    public function setFeUserCardsSorting($sorting){
        return $this->feUserCardsSorting;
    }
 }