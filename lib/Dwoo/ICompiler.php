<?php
namespace Dwoo;
use Dwoo\Security\Policy;

/**
 * interface that represents a dwoo compiler
 *
 * while implementing this is enough to interact with Templates, it is not
 * sufficient to interact with Plugins, however the main purpose of creating a
 * new compiler would be to interact with other/different plugins, that is why this
 * interface has been left with the minimum requirements.
 *
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  Copyright (c) 2014, David Sanchez
 * @license    http://dwoo.org/LICENSE GNU Lesser General Public License v3.0
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2013-09-08
 * @package    Dwoo
 */
interface ICompiler {
	/**
	 * compiles the provided string down to php code
	 *
	 * @param Core $dwoo
	 * @param ITemplate $template the template to compile
	 * @return string a compiled php code string
	 */
	public function compile(Core $dwoo, ITemplate $template);

	/**
	 * adds the custom plugins loaded into Dwoo to the compiler so it can load them
	 *
	 * @see Core::addPlugin
	 * @param array $customPlugins an array of custom plugins
	 */
	public function setCustomPlugins(array $customPlugins);

	/**
	 * sets the security policy object to enforce some php security settings
	 *
	 * use this if untrusted persons can modify templates,
	 * set it on the Dwoo object as it will be passed onto the compiler automatically
	 *
	 * @param Policy $policy the security policy object
	 */
	public function setSecurityPolicy(Policy $policy = null);
}
