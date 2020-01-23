<?php

namespace CustomNavigationWidget\Widgets;

use Ceres\Widgets\Helper\BaseWidget;

class CustomNavigationWidget extends BaseWidget
{
  protected $template = "CustomNavigationWidget::Widgets.NavigationWidget";
  protected function getTemplateData($widgetSettings, $isPreview);
}

?>
