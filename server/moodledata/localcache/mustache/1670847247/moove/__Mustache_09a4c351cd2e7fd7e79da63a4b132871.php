<?php

class __Mustache_09a4c351cd2e7fd7e79da63a4b132871 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="chart-area" id="chart-area-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="chart-image" role="presentation" aria-describedby="chart-table-data-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></div>
';
        $buffer .= $indent . '    <div class="chart-table ';
        $value = $context->find('withtable');
        if (empty($value)) {
            
            $buffer .= 'accesshide';
        }
        $buffer .= '">
';
        $buffer .= $indent . '        <p class="chart-table-expand">
';
        $buffer .= $indent . '            <a href="#" aria-controls="chart-table-data-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="button">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionA2b63840a382085c6569a3ff2630a18b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '        <div class="chart-table-data" id="chart-table-data-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('withtable');
        $buffer .= $this->section596aadeb0a27695c6f382ff010a4c284($context, $indent, $value);
        $buffer .= '></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section711ae85a93d44ba13e245262bae6e71d($context, $indent, $value);

        return $buffer;
    }

    private function sectionA2b63840a382085c6569a3ff2630a18b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showchartdata, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showchartdata, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section596aadeb0a27695c6f382ff010a4c284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="complementary" aria-expanded="false"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="complementary" aria-expanded="false"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb33d532d52a28347ca3c6ca37c55853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}showchartdata, moodle{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionA2b63840a382085c6569a3ff2630a18b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBafa73d08ae793a2dd1c4d2aa513069b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidechartdata, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hidechartdata, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51947cccc549534e6d270aaeac8a5a53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}hidechartdata, moodle{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionBafa73d08ae793a2dd1c4d2aa513069b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section711ae85a93d44ba13e245262bae6e71d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core/chart_builder\',
    \'core/chart_output_chartjs\',
    \'core/chart_output_htmltable\',
], function($, Builder, Output, OutputTable) {
    var data = {{{chartdata}}},
        uniqid = "{{uniqid}}",
        chartArea = $(\'#chart-area-\' + uniqid),
        chartImage = chartArea.find(\'.chart-image\'),
        chartTable = chartArea.find(\'.chart-table-data\'),
        chartLink = chartArea.find(\'.chart-table-expand a\');
    Builder.make(data).then(function(ChartInst) {
        new Output(chartImage, ChartInst);
        new OutputTable(chartTable, ChartInst);
    });

    chartLink.on(\'click\', function(e) {
        e.preventDefault();
        if (chartTable.is(\':visible\')) {
            chartTable.hide();
            chartLink.text({{#quote}}{{#str}}showchartdata, moodle{{/str}}{{/quote}});
            chartTable.attr(\'aria-expanded\', false);
        } else {
            chartTable.show();
            chartLink.text({{#quote}}{{#str}}hidechartdata, moodle{{/str}}{{/quote}});
            chartTable.attr(\'aria-expanded\', true);
        }
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core/chart_builder\',
';
                $buffer .= $indent . '    \'core/chart_output_chartjs\',
';
                $buffer .= $indent . '    \'core/chart_output_htmltable\',
';
                $buffer .= $indent . '], function($, Builder, Output, OutputTable) {
';
                $buffer .= $indent . '    var data = ';
                $value = $this->resolveValue($context->find('chartdata'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ',
';
                $buffer .= $indent . '        uniqid = "';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '",
';
                $buffer .= $indent . '        chartArea = $(\'#chart-area-\' + uniqid),
';
                $buffer .= $indent . '        chartImage = chartArea.find(\'.chart-image\'),
';
                $buffer .= $indent . '        chartTable = chartArea.find(\'.chart-table-data\'),
';
                $buffer .= $indent . '        chartLink = chartArea.find(\'.chart-table-expand a\');
';
                $buffer .= $indent . '    Builder.make(data).then(function(ChartInst) {
';
                $buffer .= $indent . '        new Output(chartImage, ChartInst);
';
                $buffer .= $indent . '        new OutputTable(chartTable, ChartInst);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    chartLink.on(\'click\', function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        if (chartTable.is(\':visible\')) {
';
                $buffer .= $indent . '            chartTable.hide();
';
                $buffer .= $indent . '            chartLink.text(';
                $value = $context->find('quote');
                $buffer .= $this->sectionEb33d532d52a28347ca3c6ca37c55853($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '            chartTable.attr(\'aria-expanded\', false);
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            chartTable.show();
';
                $buffer .= $indent . '            chartLink.text(';
                $value = $context->find('quote');
                $buffer .= $this->section51947cccc549534e6d270aaeac8a5a53($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '            chartTable.attr(\'aria-expanded\', true);
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
