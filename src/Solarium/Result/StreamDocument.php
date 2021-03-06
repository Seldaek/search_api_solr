<?php

namespace Drupal\search_api_solr\Solarium\Result;

use Solarium\Core\Query\AbstractDocument;
use Solarium\Core\Query\DocumentInterface;

/**
 * Stream result Solr document.
 */
class StreamDocument extends AbstractDocument {

  /**
   * Constructor.
   *
   * @param array $fields
   *   The array of fields.
   */
  public function __construct(array $fields) {
    $this->fields = $fields;
  }

  /**
   * Sets a field value.
   *
   * @param string $name
   *   The field name.
   * @param mixed $value
   *   The field value.
   *
   * @return self
   *   Return a stream document.
   */
  public function __set($name, $value): DocumentInterface {
    $this->fields[$name] = $value;

    return $this;
  }

}
