<?php
/**
 * @author @fabfuel <fabian@fabfuel.de>
 * @created 23.11.14, 09:13
 */
namespace Fabfuel\Prophiler\Iterator;

use Fabfuel\Prophiler\ProfilerInterface;

class ComponentIterator extends \FilterIterator
{
    /**
     * @var string
     */
    protected $component;

    /**
     * @param ProfilerInterface|\Iterator $profiler
     * @param string $component
     */
    public function __construct(ProfilerInterface $profiler, $component)
    {
        $this->component = $component;
        parent::__construct($profiler);
    }

    /**
     * Check if the benchmark belongs to the predefined component
     *
     * @return bool
     */
    public function accept()
    {
        return $this->current()->getComponent() === $this->component;
    }
}
