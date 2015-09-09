<?php

Class staticController Extends baseController {

public function index() 
{
        $this->registry->template->static_heading = 'This is the static Index';
        $this->registry->template->show('static_index');
}


public function about(){

	/*** should not have to call this here.... FIX ME ***/

	$this->registry->template->static_heading = 'This is the about heading';
	$this->registry->template->about_content = 'This is the about content';
        $this->registry->template->show('generic_header');
	$this->registry->template->show('static_about');
}

}
?>
