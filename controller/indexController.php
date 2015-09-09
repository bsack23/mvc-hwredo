<?php

Class indexController Extends baseController {

public function index() {
	/*** set a template variable ***/
        $this->registry->template->head_title = 'Hallwalls :: Current and Upcoming';
        
        $this->registry->template->header_menu = __SITE_PATH . "/views/header_menu.php";
        $this->registry->template->header_navselect = __SITE_PATH . "/views/header_navselect.php";
        
        /*** make an array of all upcoming events ***/
        $this->registry->template->events = Event::getAll();
	
        /*** load the index templates ***/
        $this->registry->template->show('index_head');
        $this->registry->template->show('index_content');
        $this->registry->template->show('index_sidebar');
        $this->registry->template->show('index_footer');
}

}

?>
