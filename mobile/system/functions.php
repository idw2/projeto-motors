<?php

function get_head() {
    require_once PATH . '/partials/head.php';
}

function get_footer() {
    require_once PATH . '/partials/footer.php';
}

function set_active($item) {
    $seo = new SEO();
    $page = $seo->get_slug();
    $item = explode(',', $item);
    foreach ($item as $k => $v) {
        if ($v == $page) {
            return 'uk-active';
        }
    }
}

function views($url = null) {
    if ($url && file_exists(PATH . 'app/views/' . $url . EXT)) {
        require_once PATH . 'app/views/' . $url . EXT;
    } else {
        require PATH . '404.php';
    }
}

function models($url = null) {
    if ($url && file_exists(PATH . 'app/models/' . $url . EXT)) {
        require_once PATH . 'app/models/' . $url . EXT;
    } else {
        echo 'no model';
    }
}

function partials($url = null) {
    if ($url && file_exists(PATH . 'app/partials/' . $url . EXT)) {
        require_once PATH . 'app/partials/' . $url . EXT;
    }
}

function asset($file = null) {
    return '/mobile/assets/' . $file;
}


function page_title(){
    $seo = new SEO();
    return $seo->get_title();
}

function rearrange_files($arr) {
    foreach($arr as $key => $all) {
        foreach($all as $i => $val) {
            $new_array[$i][$key] = $val;    
        }    
    }
    return $new_array;
}

function slug($string, $separator = '-') {
	$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
	$special_cases = array(
		'&' => 'and'
	);
	$string = mb_strtolower(trim($string) , 'UTF-8');
	$string = str_replace(array_keys($special_cases) , array_values($special_cases) , $string);
	$string = preg_replace($accents_regex, '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));
	$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
	$string = preg_replace("/[$separator]+/u", "$separator", $string);
	$string = trim($string, '-');
	return $string;
}

 function __autoloaddir($dir, Array $files) {
        $size = sizeof($files);
        
        
        
        if ($size) {
            foreach ($files as $filename) {
                if (file_exists($dir . $filename . ".php")) {
//                    echo $dir . $filename . ".php<br>";
                    
                    require_once( $dir . $filename . ".php" );
                } 
            }
        }
    }