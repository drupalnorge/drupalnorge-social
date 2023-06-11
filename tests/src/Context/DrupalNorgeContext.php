<?php

namespace DrupalNorge\DrupalNorgeSocial\Tests\Context;

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Things we need in our tests.
 */
class DrupalNorgeContext extends RawMinkContext {

  /**
   * Step to trigger an event on a selector.
   *
   * @When I trigger :event on :field
   */
  public function iTriggerOnEditFieldPostValue($event, $selector) {
    $script = "jQuery('$selector').trigger('$event');";
    $this->getSession()->evaluateScript($script);
  }

}
