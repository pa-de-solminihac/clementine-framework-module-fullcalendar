<?php
$cssjs = $this->getModel('cssjs');
$cssjs->register_foot('fullcalendar', array(
    'src' => $this->getHelper('jquery')->getUrl()
));
$cssjs->register_foot('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.js',
));
$cssjs->register_foot('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.min.js',
));
$cssjs->register_foot('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/lib/jquery.min.js',
));
$cssjs->register_foot('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/lib/moment.min.js',
));
$cssjs->register_css('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.css'
));
$cssjs->register_css('fullcalendar', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.min.css'
));
$this->getParentBlock($data, $request);
