<?php

namespace DrupalNorge\DrupalNorgeSocial\Tests\Context;


class DrupalNorgeContext extends \SocialDrupalContext {

  /**
   * @When I trigger :event on :field
   */
  public function iTriggerOnEditFieldPostValue($event, $selector)
  {
    $script = "jQuery('$selector').trigger('$event');";
    $this->getSession()->evaluateScript($script);
  }

}
