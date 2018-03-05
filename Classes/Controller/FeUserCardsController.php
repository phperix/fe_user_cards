<?php
    namespace HamburgerJungeJr\FeUserCards\Controller;
    
    use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    //use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
    use HamburgerJungeJr\FeUserCards\Domain\Repository\ExtendedFrontendUserRepository;
	class FeUserCardsController extends ActionController
	{
        /**
         * @var HamburgerJungeJr\FeUserCards\Domain\Repository\ExtendedFrontendUserRepository
         */
        private $feUserRepository;

        /**
         * Inject the frontend user repository
         *
         * @param HamburgerJungeJr\FeUserCards\Domain\Repository\ExtendedFrontendUserRepository $feUserRepository
         * @return void
         */
        public function injectFeUserRepository(ExtendedFrontendUserRepository $feUserRepository)
        {
            $this->feUserRepository = $feUserRepository;
        }

        /**
         * Action for multiple fe_ser cards.
         * 
         * @return void
         */
		public function multipleFeUserCardsAction() {
			$this->view->assign('feuser', $this->retrieveUserByGroup($this->settings['userGroup']));
        }
        
        private function retrieveUserByGroup($userGroups){
            $groups = explode(',', $userGroups);
            $query = $this->feUserRepository->createQuery();
            $query->matching($query->in('usergroup.uid', $groups));
            return $query->execute();
        }
	}
	