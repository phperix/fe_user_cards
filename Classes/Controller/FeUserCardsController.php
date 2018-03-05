<?php
    namespace HamburgerJungeJr\FeUserCards\Controller;
    
    use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
	class FeUserCardsController extends ActionController
	{
        /**
         * @var TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
         */
        private $feUserRepository;

        /**
         * Inject the frontend user repository
         *
         * @param TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository $feUserRepository
         * @return void
         */
        public function injectFeUserRepository(FrontendUserRepository $feUserRepository)
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
	