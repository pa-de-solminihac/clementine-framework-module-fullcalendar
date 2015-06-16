<?php
$cssjs = $this->getModel('cssjs');
$cssjs->register_foot('jquery', array(
    'src' => $this->getHelper('jquery')->getUrl()
));
$this->getParentBlock($data, $request);
// $cssjs->register_foot('fullcalendar_js', array(
// 'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.js',
// ));
// $cssjs->register_foot('bootstrap3datetimepicker_js', $this->getBlockHtml($data['class'] . '/js_datepicker',$data,$request));
$cssjs->register_foot('momentjs', array(
    'src' => __WWW_ROOT_MOMENTJS__ . '/skin/js/moment-with-locales.min.js'
));
$cssjs->register_foot('fullcalendar_js', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar2.min.js',
));
$cssjs->register_foot('timeline_js', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/scheduler.min.js',
));
// $cssjs->register_foot('fullcalendar', array(
// 'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/lib/jquery.min.js',
// ));
// $cssjs->register_foot('fullcalendar', array(
// 'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/lib/moment.min.js',
// ));
$cssjs->register_css('fullcalendar_css', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.css'
));
$cssjs->register_css('timeline_css', array(
    'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/timeline.min.css'
));
$cssjs->register_css('bootstrap3datetimepicker', array(
    'src' => __WWW_ROOT_BOOTSTRAP3DATETIMEPICKER__ . '/skin/css/bootstrap-datetimepicker.min.css'
));
$cssjs->register_css('clementine-bootstrap3datetimepicker', array(
    'src' => __WWW_ROOT_BOOTSTRAP3DATETIMEPICKER__ . '/skin/css/clementine-bootstrap-datetimepicker.css'
));
$cssjs->register_foot('bootstrap3datetimepicker', array(
    'src' => __WWW_ROOT_BOOTSTRAP3DATETIMEPICKER__ . '/skin/js/bootstrap-datetimepicker.js'
));
// $cssjs->register_css('fullcalendar', array(
// 'src' => __WWW_ROOT_FULLCALENDAR__ . '/skin/fullcalendar.min.css'
// ));
