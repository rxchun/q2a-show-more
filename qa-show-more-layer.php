<?php

class qa_html_theme_layer extends qa_html_theme_base {

	function head_css() {
		global $qa_request;
		qa_html_theme_base::head_css();
		
		$this->output('<style type="text/css">
/* Style your Show More Button here */

.qa-post-content {
    overflow: hidden;
}

a.show-more-btn {
    font-weight: bold;
}

/*
.show-more-btn {
	text-transform: uppercase;
	display: block;
	width: 100%;
	text-align: center;
	color: #333;
	font-size: 11px;
	font-weight: 500;
	border: 1px solid #e5e5e5;
	border-radius: 4px;
	margin-right: 5px;
	padding: 2px 9px 2px 8px;
	background-color: #fcfcfc;
	background-image: linear-gradient(rgba(255,255,255,0),rgba(235,235,235,.3)60%,rgba(225,225,225,.6));
}

.show-more-btn:hover {
	background-color: #f9f9f9;
	border-color: #e5e5e5 #ccc #ccc;
	box-shadow: 0 1px 3px rgba(0,0,0,.15),inset 0 1px 0 rgba(255,255,255,1),inset -1px 0 0 rgba(248,248,248,1),inset 0 -1px 0 rgba(248,248,248,.5),inset 1px 0 0 rgba(248,248,248,1);
	text-shadow: -1px -1px 0 #fcfcfc,1px -1px 0 #fcfcfc,-1px 1px 0 #fcfcfc,1px 1px 0 #fff;
}
*/
		</style>');
	}

	function body_suffix() {
		qa_html_theme_base::body_suffix();

		if ( $this->template == 'question' ) {
			$this->output('<script src="'. QA_HTML_THEME_LAYER_URLTOROOT .'qa-show-more.min.js"></script>');
		}
	}

}