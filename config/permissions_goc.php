<?php
//================= Goc
foreach(['goc','goc_cat',] as $p){
	$permissions[$p]['view']	= array('index');
	$permissions[$p]['edit']	= array('add', 'edit','feature', 'feature_del');
	$permissions[$p]['delete']	= array('del');
}

foreach(['goc_to_subscribe','goc_to_report','goc_to_request','goc_to_view'] as $p){
	$permissions[$p]['view']	= array('index','view');
	$permissions[$p]['delete']	= array('del');
}
