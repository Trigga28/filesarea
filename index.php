<?php

/**
 * Files and Images Manager
 *
 * @version 1.0.0
 * @author Sacid Sezgin <sezgin@gfg-id.de>
 * @copyright Sacid Sezgin <sezgin@gfg-id.de>
 * @link https://github.com/Sacid118/filesarea
 * @license MIT
**/

use Kirby\Cms\App as Kirby;

Kirby::plugin('Trigga28/filesarea', [
	'areas' => [
		'files' => [
			'label'   => 'Dateimanager',
			'icon'    => 'archive',
			'menu'    => true,
			'views' => [
				require __DIR__ . '/views/files.php'
			]
		]
	]
]);