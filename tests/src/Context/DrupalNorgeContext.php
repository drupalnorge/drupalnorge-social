<?php

namespace DrupalNorge\DrupalNorgeSocial\Tests\Context;


class DrupalNorgeContext extends \Drupal\social\Behat\SocialDrupalContext {

  /**
   * @When I trigger :event on :field
   */
  public function iTriggerOnEditFieldPostValue($event, $selector)
  {
    $script = "jQuery('$selector').trigger('$event');";
    $this->getSession()->evaluateScript($script);
  }

}
