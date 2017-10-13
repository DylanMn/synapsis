<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ScatterChart;

/**
 * @author Christophe Meneses
 */
class Series extends \CMEN\GoogleChartsBundle\GoogleCharts\Options\Series
{
    /**
     * The description of the series to appear in the chart legend.
     *
     * @var string
     */
    protected $labelInLegend;

    /**
     * Overrides the global lineWidth value for this series.
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * Overrides the global pointShape value for this series.
     *
     * @var string
     */
    protected $pointShape;

    /**
     * Overrides the global pointSize value for this series.
     *
     * @var int
     */
    protected $pointSize;

    /**
     * Overrides the global pointsVisible value for this series.
     *
     * @var bool
     */
    protected $pointsVisible;


    /**
     * @param string $labelInLegend
     *
     * @return $this
     */
    public function setLabelInLegend($labelInLegend)
    {
        $this->labelInLegend = $labelInLegend;

        return $this;
    }

    /**
     * @param int $lineWidth
     *
     * @return $this
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }

    /**
     * @param string $pointShape
     *
     * @return $this
     */
    public function setPointShape($pointShape)
    {
        $this->pointShape = $pointShape;

        return $this;
    }

    /**
     * @param int $pointSize
     *
     * @return $this
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;

        return $this;
    }

    /**
     * @param bool $pointsVisible
     *
     * @return $this
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;

        return $this;
    }
}
