<?php

class sfApplyResetRequestForm extends sfForm
{
  public function configure()
  {
    parent::configure();

    $this->setWidget('username',
      new sfWidgetFormInput(
        array(), array('maxlength' => 16)));

    $this->setValidator('username',
      new sfValidatorAnd(
        array(
          new sfValidatorString(array('required' => true,
            'trim' => true,
            'min_length' => 4,
            'max_length' => 16)),
          new sfValidatorDoctrineChoice(array('model' => 'sfGuardUser',
            'column' => 'username'), array("invalid" => "There is no such user.")))));
    $this->widgetSchema->setNameFormat('sfApplyResetRequest[%s]');
    $this->widgetSchema->setFormFormatterName('list');
  }
}

