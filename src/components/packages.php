<?php
/**
 * Built-in client script packages.
 *
 * Please see {@link CClientScript::packages} for explanation of the structure
 * of the returned array.
 *
 * @author Ruslan Fadeev <fadeevr@gmail.com>
 *
 * @var Bootstrap $this
 */
return array(

	'font-awesome' => array(
		'baseUrl' => $this->enableCdn ? '//netdna.bootstrapcdn.com/font-awesome/3.2.1/' : $this->getAssetsUrl().'/font-awesome/',
		'css' => array($this->minifyCss ? 'css/font-awesome.min.css' : 'css/font-awesome.css'),
	),
	'font-awesome-ie7' => array(
		'baseUrl' => $this->enableCdn ? '//netdna.bootstrapcdn.com/font-awesome/3.2.1/' : $this->getAssetsUrl().'/font-awesome/',
		'css' => array($this->minifyCss ? 'css/font-awesome-ie7.min.css' : 'css/font-awesome-ie7.css'),
	),
	'bootstrap.js' => array(
		'baseUrl' => $this->enableCdn ? '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/' : $this->getAssetsUrl() . '/bootstrap/',
		'js' => array($this->minifyCss ? 'js/bootstrap.min.js' : 'js/bootstrap.js'),
		'depends' => array('jquery', 'jqui-tb-noconflict'),
	),
	'bootstrap-yii' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'css' => array('css/bootstrap-yii.css'),
	),
	'jquery-css' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'css' => array('css/jquery-ui-bootstrap.css'),
	),
	'bootbox' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'js' => array('js/bootstrap.bootbox.min.js'),
	),
	'notify' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'css' => array('css/bootstrap-notify.css'),
		'js' => array('js/bootstrap.notify.js')
	),
	'jqui-tb-noconflict' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'js' => array('js/jqui-tb-noconflict.js'),
		'depends' => array('jquery', 'jquery.ui') // we don't have any other choice to reliably prevent conflicts with jQueryUI than to forcefully include it before Bootstrap and the script preventing conflicts
	),

	//widgets start
	'datepicker' => array(
		'depends' => array('jquery'),
		'baseUrl' => $this->enableCdn ? '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.1.3/' : $this->getAssetsUrl(),
		'css' => array($this->minifyCss ? 'css/bootstrap-datepicker.min.css' : 'css/bootstrap-datepicker.css'),
		'js' => array($this->minifyCss ? 'js/bootstrap-datepicker.min.js' : 'js/bootstrap-datepicker.js')
	),
	'datetimepicker' => array(
		'depends' => array('jquery'),
		'baseUrl' => $this->getAssetsUrl() . '/bootstrap-datetimepicker/', // Not in CDN yet
		'css' => array($this->minifyCss ? 'css/bootstrap-datetimepicker.css' : 'css/bootstrap-datetimepicker.css'),
		'js' => array($this->minifyCss ? 'js/bootstrap-datetimepicker.min.js' : 'js/bootstrap-datetimepicker.js')
	),
	'date' => array(
		'baseUrl' => $this->enableCdn ? '//cdnjs.cloudflare.com/ajax/libs/datejs/1.0/' : $this->getAssetsUrl() . '/js/',
		'js' => array('date.min.js')
	),
	'x-editable' => array(
		'baseUrl' => $this->getAssetsUrl() . '/bootstrap-editable/',
		'css' => array('css/bootstrap-editable.css'),
		'js' => array($this->minifyCss ? 'js/bootstrap-editable.min.js' : 'js/bootstrap-editable.js'),
		'depends' => array('jquery')
	),
	'moment' => array(
		'baseUrl' => $this->getAssetsUrl(),
		'js' => 'moment.min.js',
	),
	'picker' => array(
		'baseUrl' => $this->getAssetsUrl() . '/picker',
		'js' => array('bootstrap.picker.js'),
		'css' => array('bootstrap.picker.css'),
		'depends' => array('bootstrap.js')
	),
);
