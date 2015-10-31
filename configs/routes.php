<?php

$routing = array(
	'/' => array(
		'controller' => 'top',
		'action' => 'index'
	),
	'/user' => array(
		'controller' => 'user',
		'action' => 'index',
	), 
	'/user/mypage/:id' => array(
		'controller' => 'user',
		'action' => 'mypage',
	), 
	'/user/login' => array(
		'controller' => 'user',
		'action' => 'login',
	), 
	'/user/logout' => array(
		'controller' => 'user',
		'action' => 'logout',
	), 
	'/user/join' => array(
		'controller' => 'user',
		'action' => 'join',
	), 
	'/user/join/confirm' => array(
		'controller' => 'user',
		'action' => 'join',
	), 
	'/user/join/complete' => array(
		'controller' => 'user',
		'action' => 'join',
	), 
	'/user/leave/:id' => array(
		'controller' => 'user',
		'action' => 'leave',
	), 
	'/user/leave/confirm' => array(
		'controller' => 'user',
		'action' => 'leave',
	), 
	'/user/leave/complete' => array(
		'controller' => 'user',
		'action' => 'leave',
	), 
	'/event' => array(
		'controller' => 'event',
		'action' => 'index',
	), 
	'/event' => array(
		'controller' => 'event',
		'action' => 'index',
	),
	'/event' => array(
		'controller' => 'event',
		'action' => 'index',
	),
	'/blog' => array(
		'controller' => 'blog',
		'action' => 'index',
	), 
	'/blog/list/:userId/:year/:month/:day' => array(
		'controller' => 'blog',
		'action' => 'list',
	), 
	'/blog/detail/:userId/:articleId' => array(
		'controller' => 'blog',
		'action' => 'detail',
	), 
	'/blog/open' => array(
		'controller' => 'blog',
		'action' => 'open',
	), 
	'/blog/edit' => array(
		'controller' => 'blog',
		'action' => 'edit',
	), 
	'/blog/close' => array(
		'controller' => 'blog',
		'action' => 'close',
	), 
	'/blog/post' => array(
		'controller' => 'blog',
		'action' => 'post',
	), 
	'/monoclip/:userId' => array(
		'controller' => 'monoclip',
		'action' => 'index',
	), 
	'/monoclip/list/:type/:userId' => array(
		'controller' => 'monoclip',
		'action' => 'list',
	), 
	'/monoclip/clip/:clipId' => array(
		'controller' => 'monoclip',
		'action' => 'clip',
	), 
	'/monoclip/open' => array(
		'controller' => 'monoclip',
		'action' => 'open',
	), 
	'/monoclip/close' => array(
		'controller' => 'monoclip',
		'action' => 'close',
	), 
	'/monoclip/post' => array(
		'controller' => 'monoclip',
		'action' => 'postApi',
	), 
	'/monoclip/update/:clipId' => array(
		'controller' => 'monoclip',
		'action' => 'updateApi',
	), 
	'/monoclip/imageapi/:id' => array(
		'controller' => 'monoclip',
		'action' => 'imageApi',
	), 
) ;

