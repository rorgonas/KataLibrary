<?php
/**
 * Create Page structure and Includes 
 */


class Page {

	public function __construct() {
		// run config
		include_once 'config/routes.php';
	}

	public static function NavList() {
		$output = '<nav class="navbar navbar-inverse navbar-fixed-top">';
		$output .= '<div class="navbar-inner">';
		$output	.=	'<div class="container-fluid">';
		$output	.=	'<a class="brand" href="#">My Kata Library</a>';
		$output	.= '</div>';
		$output .= '</div>';
		$output .= '</nav>';
		echo $output;
	}

	public static function AsideNavList() {
		$output = '<nav class="well sidebar-nav">';
		$output .= 	'<ul class="nav nav-list">';
		$output .=		'<li class="nav-header">JavaScript & QUnit group</li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/view/qunit.tpl.php" alt="FizzBuzz">Fizz</a></li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/view/qunit.tpl.php" alt="RomanNumbers">Roman Numbers</a></li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/view/qunit.tpl.php" alt="CalcStats">Calculate Statistics</a></li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/view/qunit.tpl.php" alt="LCDDigits">LCD Digits</a></li>';
		$output .=		'<li class="nav-header">PHP5 & PHPUnit group</li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/plugins/vpu/" alt="PrimeNumber">Prime Numbers</a></li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/plugins/vpu/" alt="BowlingGame">Bowling Game</a></li>';
		$output .=		'<li><a href="http://localhost:8080/KataLibrary/plugins/vpu/" alt="OverlappingRectangles">Overlapping rectangles</a></li>';
		$output .= 	'</ul>';
		$output .= '</nav>';
		return $output;
	}

	public static function ViewLink() {
		$output = '<a href="view.php"  class="btn btn-large btn-success">View Test Results</a>';
		return $output;
	}

	public static function KataDescription() {
	
		$data = array();

		$host = "http://localhost:8080";
		$self = $_SERVER["PHP_SELF"];  //ex: /KataLibrary/apps/FizzBuzz/index.php

		$file = str_replace("index.php", "doc/description.txt", $self);
		$location = $host.$file;
		
		$data = file($location) or die("Faild to open stream!");

		return $data;
	}

	public static function Content() {
		$output = '<div class="container-fluid">';
		$output .= '	<div class="row-fluid">';
		$output .=			'<aside class="span3">';
		$output .=				Page::AsideNavList();
		$output .=			'</aside>';
		$output .=			'<section class="span9">';
		$output .=				'<h1>Unit Testing</h1>';
		$output .= 				'<p>The 3 laws of TDD - Test Drive Development paradigm</p>';
		$output .=					'<ul>';
		$output .=						'<li>You are not allowed to write any production code "unless" it is to make a failing test pass</li>';							
		$output .= 						'<li>You are not allowed to write any more of unit test than is "suficient to fail"</li>';
		$output .=						'<li>You are not allowed to write any more production code than is "suficient to pass" one failing test</li>';
		$output .=					'</ul>';
		$output .=			'</section>';
		$output .=		'</div>';
		$output .=	'</div>';
		echo $output;
	}

	public static function MainFooter() {
		$output = '<footer id="footer">';
		$output .= 	'<div class="container">';
		$output	.= 		'<p class="credit"><span>TEKCraft</a> &copy;2012 - <a href="https://github.com/rorgonas/KataLibrary" target="_blank">TDD Kata Library</a></span> | ';
		$output .=		'<span class="source"><a href="https://sites.google.com/site/tddproblems/all-problems-1" target="_blank">TDD problmes</a></span> |';
		$output	.= 		'<span class="source"><a href="http://cyber-dojo.com/dojo/create" target="_blank">Dojo katas</a></span></p>';
		$output	.= 	'</div>';
		$output .= '</footer>';
		echo $output;
	}

}

class SubPage extends Page{
	public function __construct() {
		//parent::__construct();
		//$this->subpage = true;
	}

	public static function Content() {
		$data = Page::KataDescription();

		$output = '<div class="container-fluid">';
		$output .= '	<div class="row-fluid">';
		$output .=			'<aside class="span3">';
		$output .=				Page::AsideNavList();
		$output .=			'</aside>';
		$output .=			'<section class="span9">';
		
		foreach ($data as $value) {
			$output .= 	$value."<br />";
		}
		$output .=			Page::ViewLink();
		$output .=			'</section>';
		$output .=		'</div>';
		$output .=	'</div>';
		echo $output;
	}

	public static function NavList() {
		$output = '<nav class="navbar navbar-inverse navbar-fixed-top">';
		$output .= '<div class="navbar-inner">';
		$output	.=	'<div class="container-fluid">';
		$output	.=	'<a class="home icon-home icon-white" href="#"></a>';
		$output	.=	'<a class="brand" href="#">My Kata Library</a>';
		$output	.= '</div>';
		$output .= '</div>';
		$output .= '</nav>';
		echo $output;
	}
}


?>