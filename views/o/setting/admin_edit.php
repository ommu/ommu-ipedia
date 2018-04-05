<?php
/**
 * Ipedia Settings (ipedia-setting)
 * @var $this SettingController
 * @var $model IpediaSetting
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 7 March 2017, 21:48 WIB
 * @link https://github.com/ommu/ommu-ipedia
 *
 */

	$this->breadcrumbs=array(
		'Ipedia Settings'=>array('manage'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
	);
?>

<div class="form" name="post-on">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>