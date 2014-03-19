<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
if ($env == 'development')
{
	// Modules Debug
	$moddev =array(
            'Application',
            'Simplemodule',
            'Album',
            'Checklist',
            'Project',
            'Contracts',
            'ZendDeveloperTools',
            'ScnSocialAuth',
            'ZfcBase',
            'ZfcUser',
            'Cheetara'
        );
        }
else
	$moddev=array();
$modules=array_merge($modpro,$moddev);

return array(
    'modules' => $modules,
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        )
    )
);
