<?php
// **
// USED TO DEFINE PLUGIN INFORMATION & CLASS
// **

// PLUGIN INFORMATION - This should match what is in plugin.json
$GLOBALS['plugins']['LogViewer'] = [ // Plugin Name
	'name' => 'LogViewer', // Plugin Name
	'author' => 'jamiedonaldson-tinytechlabuk', // Who wrote the plugin
	'category' => 'Testing', // One to Two Word Description
	'link' => 'https://github.com/jamiedonaldson-tinytechlabuk/php-ef-log-viewer-plugin', // Link to plugin info
	'version' => '1.0.0', // SemVer of plugin
	'image' => 'logo.png', // 1:1 non transparent image for plugin
	'settings' => true, // does plugin need a settings modal?
	'api' => '/api/plugin/LogViewer/settings', // api route for settings page, or null if no settings page
];

class LogViewer extends ib
{
	public function _pluginGetSettings()
	{
		return array(
			'About' => array (
				$this->settingsOption('notice', '', ['title' => 'Information', 'body' => '
				<p>This is an LogViewer plugin.</p>
				<br/>']),
			),
			'Plugin Settings' => array(
				$this->settingsOption('auth', 'ACL-READ', ['label' => 'Plugin Read ACL']),
				$this->settingsOption('auth', 'ACL-WRITE', ['label' => 'Plugin Write ACL']),
				$this->settingsOption('password', 'Password', ['label' => 'Some Password']),
				$this->settingsOption('input', 'Config1', ['label' => 'Some option 1']),
				$this->settingsOption('input', 'Config2', ['label' => 'Some option 2']),
				$this->settingsOption('blank'),
				$this->settingsOption('input', 'Config3', ['label' => 'Some option 3']),
				$this->settingsOption('button', '', ['label' => 'Undo', 'icon' => 'fa fa-undo', 'text' => 'Retrieve', 'attr' => 'onclick="doSomething();"']),
			),
			'Connection Settings' => array(
				$this->settingsOption('url', 'URL'),
				$this->settingsOption('password-alt', 'Token'),
				$this->settingsOption('select', 'Server', ['label' => 'Preferred Server', 'options' => array(array("name" => 'Option 1', "value" => 'opt1'),array("name" => 'Option 2', "value" => 'opt2'))]),
			),
		);
	}
}