<?php

class __Mustache_20f53aa6c4668126de5fd93bd9d5b89f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="alert alert-secondary alert-block fade in">
';
        $buffer .= $indent . '    <iframe id="campaign-content" class="w-100 border-0"></iframe>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section55ff12f2c32567acabfc54c16d494dcd($context, $indent, $value);

        return $buffer;
    }

    private function section55ff12f2c32567acabfc54c16d494dcd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
(function() {
    var iframe = document.getElementById(\'campaign-content\');
    iframe.src = \'https://campaign.moodle.org/current/lms/{{lang}}/\';
    window.addEventListener(\'message\', function (event) {
        if (event.origin === \'https://campaign.moodle.org\') {
            iframe.style.height = event.data + \'px\';
        }
    });
})();
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '(function() {
';
                $buffer .= $indent . '    var iframe = document.getElementById(\'campaign-content\');
';
                $buffer .= $indent . '    iframe.src = \'https://campaign.moodle.org/current/lms/';
                $value = $this->resolveValue($context->find('lang'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/\';
';
                $buffer .= $indent . '    window.addEventListener(\'message\', function (event) {
';
                $buffer .= $indent . '        if (event.origin === \'https://campaign.moodle.org\') {
';
                $buffer .= $indent . '            iframe.style.height = event.data + \'px\';
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '})();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
