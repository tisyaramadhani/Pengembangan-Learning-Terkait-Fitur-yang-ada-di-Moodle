<?php

class __Mustache_e5ffa09b5d4a9c2b32cc2bc61c1f2a61 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <span class="badge badge-info rounded mb-1">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '    <span class="badge badge-info rounded mb-1">';
        $value = $this->resolveValue($context->find('datestring'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
