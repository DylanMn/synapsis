<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsDraw;

/**
 * @author Christophe Meneses
 */
class GanttChartOptions extends ChartOptionsDraw
{
    /**
     * @var BackgroundColor
     */
    protected $backgroundColor;

    /**
     * Height of the chart, in pixels.
     *
     * @var int
     */
    protected $height;


    /**
     * @var Gantt
     */
    protected $gantt;

    /**
     * Width of the chart, in pixels.
     *
     * @var int
     */
    protected $width;


    /**
     * GanttChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->backgroundColor = new BackgroundColor();
        $this->gantt = new Gantt();
    }


    /**
     * @return BackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return Gantt
     */
    public function getGantt()
    {
        return $this->gantt;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
