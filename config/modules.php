<?php

return [

	'default_module' => 'broadcaster',
	'modules' => [
		'broadcaster' => [
			'module_class' => '\App\Modules\Broadcaster\Module',
			'enabled' => true,
		],
		'receiver' => [
			'module_class' => '\App\Modules\Receiver\Module',
			'enabled' => true,
		],
	],
];