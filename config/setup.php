<?php 

/**
 * Load a template on new Page instance
 */

class Page {

	private $docroot;

	public function __construct($docroot) {

		// Init docroot
		$this->docroot = $docroot;

		// call writePage method
		$this->writePage();
	} 

    public function writePage() {

		$template = $this->docroot."/views/base.php";

		if (file_exists($template)) {
			require_once($template);
		}
	}

	public function writeSection($section) {
		
		$components = array("asidenav", "navbar", "body", "footer");
		
		if (in_array($section, $components)) {
			include $this->docroot."/views/$section.tpl.html";
		}
		
	}

	public function writeIncludes() {
		include $this->docroot."/views/includes.tpl.html";
	}
}


?>