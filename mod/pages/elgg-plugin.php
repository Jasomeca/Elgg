<?php

return [
	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'page',
			'searchable' => true,
			'class' => '\ElggPage',
		],
	],
	'actions' => [
		'pages/edit' => [],
		'pages/delete' => [],
		'annotations/page/delete' => [],
	],
	'routes' => [
		'default:object:page' => [
			'path' => '/pages',
			'resource' => 'pages/all',
		],
		'collection:object:page:all' => [
			'path' => '/pages/all',
			'resource' => 'pages/all',
		],
		'collection:object:page:owner' => [
			'path' => '/pages/owner/{username}',
			'resource' => 'pages/owner',
		],
		'collection:object:page:friends' => [
			'path' => '/pages/friends/{username}',
			'resource' => 'pages/friends',
		],
		'collection:object:page:group' => [
			'path' => '/pages/group/{guid}',
			'resource' => 'pages/owner',
		],
		'add:object:page' => [
			'path' => '/pages/add/{guid}',
			'resource' => 'pages/new',
		],
		'view:object:page' => [
			'path' => '/pages/view/{guid}/{title?}',
			'resource' => 'pages/view',
		],
		'edit:object:page' => [
			'path' => '/pages/edit/{guid}',
			'resource' => 'pages/edit',
		],
		'history:object:page' => [
			'path' => '/pages/history/{guid}',
			'resource' => 'pages/history',
		],
		'revision:object:page' => [
			'path' => '/pages/revision/{id}',
			'resource' => 'pages/revision',
		],
	],
	'widgets' => [
		'pages' => [
			'description' => elgg_echo('pages:widget:description'),
			'context' => ['profile', 'dashboard'],
		],
	],
	'upgrades' => [
		'\Elgg\Pages\Upgrades\MigratePageTop',
	],
];
