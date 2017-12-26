<?php
namespace Blog\InputFilter;

use Zend\Filter\FilterChain;
use Zend\Filter\StringTrim;
use Zend\I18n\Validator\Alnum;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\StringLength;
use Zend\Validator\ValidatorChain;

class AddPost extends InputFilter
{

    public function __construct()
    {
        $title = new Input('title');
        $title->setRequired(true);
        $title->setValidatorChain($this->getTitleValidatorChain());
        $title->setFilterChain($this->getStringTrimFilterChain());

        $this->add($title);
    }

    private function getTitleValidatorChain()
    {
        $length = new StringLength();
        $length->setMax(50);

        $validatorChain = new ValidatorChain();
//        $validatorChain->attach(new Alnum(true));
        $validatorChain->attach($length);

        return $validatorChain;
    }

    private function getStringTrimFilterChain()
    {
        $filterChain = new FilterChain();
        $filterChain->attach(new StringTrim());

        return $filterChain;
    }
}
