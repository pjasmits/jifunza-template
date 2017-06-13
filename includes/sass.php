<?php
/**
 * @package     Template.Jifunza Template
 * @subpackage  Include.Sass
 *
 * @copyright   Copyright (C) 2016 byAntoinette Communicatie. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;

$composerAutoload = dirname(__DIR__) . '/vendor/autoload.php';

if (!file_exists($composerAutoload))
{
	return;
}

require_once $composerAutoload;

use Phproberto\Sass\FileCompiler;

$scssFolder  = dirname(__DIR__) . '/scss';
$cssFolder   = dirname(__DIR__) . '/css';
$cacheFolder = JPATH_ROOT . '/cache';

$scss = new FileCompiler($cacheFolder);

try
{
	$scss->compileFile($scssFolder . '/template.scss', $cssFolder . '/template.css', FileCompiler::FORMATTER_EXPANDED);
	$scss->compileFile($scssFolder . '/template.scss', $cssFolder . '/template.min.css', FileCompiler::FORMATTER_COMPRESSED);
}
catch (Exception $e)
{
	JFactory::getApplication()->enqueueMessage('Error compiling Sass: ' . $e->getMessage(), 'error');
}

$message = 'Sass met succes gecompileerd.';

if ($scss->isCachedCompilation())
{
	$message = 'Geen Sass bestanden werden gewijzigd.';
}

$message .= ' Tijdsduur ' . $scss->getTimeElapsed() . ' seconds';

JFactory::getApplication()->enqueueMessage($message, 'Compileren geslaagd!');
