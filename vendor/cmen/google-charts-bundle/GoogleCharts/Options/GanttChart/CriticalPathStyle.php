<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class CriticalPathStyle
{
    /**
     * The color of any critical path arrows.
     *
     * @var string
     */
    protected $stroke;

    /**
     * The thickness of any critical path arrows.
     *
     * @var float
     */
    protected $strokeWidth;

    /**
     * @param string $stroke
     *
     * @return $this
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @param float $strokeWidth
     *
     * @return $this
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }
}
