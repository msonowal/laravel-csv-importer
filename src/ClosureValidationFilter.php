<?php namespace RGilyov\CsvImporter;

class ClosureValidationFilter extends BaseValidationFilter
{
    /**
     * @var \Closure
     */
    protected $closure;

    /**
     * @var string
     */
    protected $name = 'filter';

    /**
     * ClosureValidationFilter constructor.
     * @param \Closure $closure
     */
    public function __construct(\Closure $closure)
    {
        $this->closure = $closure;
    }

    /**
     * @param array $csvItem
     * @return bool
     */
    public function filter(array $csvItem)
    {
        return $this->closure->__invoke($csvItem);
    }
}