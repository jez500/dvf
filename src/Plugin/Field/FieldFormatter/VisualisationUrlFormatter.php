<?php

namespace Drupal\dvf\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\dvf\FieldFormatterTrait;

/**
 * Plugin implementation of the 'dvf_url_default' field formatter.
 *
 * @FieldFormatter(
 *   id = "dvf_url_default",
 *   label = @Translation("URL to visualisation"),
 *   field_types = {
 *     "dvf_url"
 *   }
 * )
 */
class VisualisationUrlFormatter extends FormatterBase {

  use FieldFormatterTrait;

}
