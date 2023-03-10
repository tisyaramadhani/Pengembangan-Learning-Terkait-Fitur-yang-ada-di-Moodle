<?php

class __Mustache_a696d64f721109212dbd10ca3b6246b3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="event-list-container"
';
        $buffer .= $indent . '     data-days-offset="';
        $blockFunction = $context->findInBlock('daysoffset');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('hasdaysoffset');
            $buffer .= $this->sectionEb227d4e59821d552e785eff34c40bc7($context, $indent, $value);
            $value = $context->find('hasdaysoffset');
            if (empty($value)) {
                
                $buffer .= '0';
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '     ';
        $value = $context->find('nodayslimit');
        if (empty($value)) {
            
            $buffer .= 'data-days-limit="';
            $blockFunction = $context->findInBlock('dayslimit');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $value = $context->find('hasdayslimit');
                $buffer .= $this->sectionF18b214a66ab2a31f869650fafc48bbf($context, $indent, $value);
                $value = $context->find('hasdayslimit');
                if (empty($value)) {
                    
                    $buffer .= '30';
                }
            }
            $buffer .= '"';
        }
        $buffer .= '
';
        $buffer .= $indent . '     data-course-id="';
        $blockFunction = $context->findInBlock('courseid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '     data-midnight="';
        $value = $this->resolveValue($context->find('midnight'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div data-region="event-list-loading-placeholder">
';
        $buffer .= $indent . '        <ul class="pl-0 list-group list-group-flush">
';
        if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <div class="pt-3 d-flex justify-content-between">
';
        $buffer .= $indent . '            <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
';
        $buffer .= $indent . '            <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="event-list-content"></div>
';
        $buffer .= $indent . '    <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
';
        $buffer .= $indent . '        <img
';
        $buffer .= $indent . '            src="';
        $value = $this->resolveValue($context->findDot('urls.noevents'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            alt=""
';
        $buffer .= $indent . '            style="height: 70px; width: 70px"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        <p class="text-muted mt-1">';
        $value = $context->find('str');
        $buffer .= $this->section0da079e8ecded1d3dc97887fb486b7eb($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEb227d4e59821d552e785eff34c40bc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{daysoffset}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('daysoffset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF18b214a66ab2a31f869650fafc48bbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{dayslimit}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('dayslimit'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0da079e8ecded1d3dc97887fb486b7eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noevents, block_timeline ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noevents, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
