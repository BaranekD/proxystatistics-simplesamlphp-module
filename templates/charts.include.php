<?php
use SimpleSAML\Module;

$this->data['jquery'] = ['core' => true, 'ui' => true, 'css' => true];
$this->data['head'] = '';
$this->data['head'] .= '<link rel="stylesheet"  media="screen" type="text/css" href="' .
    Module::getModuleUrl('proxystatistics/bootstrap.min.css') . '" />';
$this->data['head'] .= '<link rel="stylesheet"  media="screen" type="text/css" href="' .
    Module::getModuleUrl('proxystatistics/statisticsproxy.css') . '" />';
$this->data['head'] .= '<link rel="stylesheet" type="text/css" href="' .
    Module::getModuleUrl('proxystatistics/Chart.min.css') . '">';
$this->data['head'] .= '<script type="text/javascript" src="' .
    Module::getModuleUrl('proxystatistics/moment.min.js').'"></script>';
if ($this->getLanguage() === 'cs') {
    $this->data['head'] .= '<script type="text/javascript" src="' .
        Module::getModuleUrl('proxystatistics/moment.cs.min.js').'"></script>';
}
$this->data['head'] .= '<script type="text/javascript" src="' .
    Module::getModuleUrl('proxystatistics/Chart.min.js').'"></script>';
$this->data['head'] .= '<script type="text/javascript" src="' .
    Module::getModuleUrl('proxystatistics/hammer.min.js').'"></script>';
$this->data['head'] .= '<script type="text/javascript" src="' .
    Module::getModuleUrl('proxystatistics/chartjs-plugin-zoom.min.js').'"></script>';
