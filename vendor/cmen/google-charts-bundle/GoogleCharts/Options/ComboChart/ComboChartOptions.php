<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Candlestick;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * @author Christophe Meneses
 */
class ComboChartOptions extends LineOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Annotations
     */
    protected $annotations;

    /**
     * The default opacity of the colored area under an area chart series, where 0.0 is fully transparent and 1.0 is
     * fully opaque. To specify opacity for an individual series, set the areaOpacity value in the series property.
     *
     * @var float
     */
    protected $areaOpacity;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var Candlestick
     */
    protected $candlestick;

    /**
     * @var Crosshair
     */
    protected $crosshair;

    /**
     * Controls the curve of the lines when the line width is not zero. Can be one of the following:
     * 'none' - Straight lines without curve.
     * 'function' - The angles of the line will be smoothed.
     *
     * @var string
     */
    protected $curveType;

    /**
     * The transparency of data points, with 1.0 being completely opaque and 0.0 fully transparent. In scatter,
     * histogram, bar, and column charts, this refers to the visible data: dots in the scatter chart and rectangles
     * in the others. In charts where selecting data creates a dot, such as the line and area charts, this refers to
     * the circles that appear upon hover or selection. The combo chart exhibits both behaviors, and this option has
     * no effect on other charts. (To change the opacity of a trendline, see
     * {@link https://developers.google.com/chart/interactive/docs/gallery/trendlines#Example4})
     *
     * @var float
     */
    protected $dataOpacity;

    /**
     * The type of the entity that receives focus on mouse hover. Also affects which entity is selected by mouse
     * click, and which data table element is associated with events. Can be one of the following :
     * 'datum' - Focus on a single data point. Correlates to a cell in the data table.
     * 'category' - Focus on a grouping of all data points along the major axis. Correlates to a row in the data table.
     * In focusTarget 'category' the tooltip displays all the category values. This may be useful for comparing values
     * of different series.
     *
     * @var string
     */
    protected $focusTarget;

    /**
     * @var AdvancedHAxis
     */
    protected $hAxis;

    /**
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     *
     * @var boolean
     */
    protected $interpolateNulls;

    /**
     * If set to true, series elements of the same type are stacked. Affects bar, column and area series only.
     *
     * @var boolean
     */
    protected $isStacked;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart so that (for instance) a
     * column chart becomes a bar chart, and an area chart grows rightward.
     *
     * @var string
     */
    protected $orientation;

    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
     *
     * This option is only supported for a discrete major axis.
     *
     * @var boolean
     */
    protected $reverseCategories;

    /**
     * When selectionMode is 'multiple', users may select multiple data points.
     *
     * @var string
     */
    protected $selectionMode;

    /**
     * The default line type for any series not specified in the series property. Available values are 'line', 'area',
     * 'bars', 'candlesticks', and 'steppedArea'.
     *
     * @var string
     */
    protected $seriesType;

    /**
     * Displays trendlines on the charts that support them. By default, linear trendlines are used, but this can be
     * customized with the trendlines.n.type option.
     *
     * @var Trendlines[]
     */
    protected $trendlines;

    /**
     * Specifies properties for individual vertical axes, if the chart has multiple vertical axes. Each child object
     * is a VAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes.
     *
     * @var VAxis[]
     */
    protected $vAxes;


    /**
     * ComboChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->annotations = new Annotations();
        $this->bar = new Bar();
        $this->candlestick = new Candlestick();
        $this->crosshair = new Crosshair();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new AdvancedLegend();
    }


    /**
     * @return AdvancedAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return Annotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @return Bar
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @return Candlestick
     */
    public function getCandlestick()
    {
        return $this->candlestick;
    }

    /**
     * @return Crosshair
     */
    public function getCrosshair()
    {
        return $this->crosshair;
    }

    /**
     * @return AdvancedHAxis
     */
    public function getHAxis()
    {
        return $this->hAxis;
    }

    /**
     * @return AdvancedLegend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param string $curveType
     *
     * @return $this
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;

        return $this;
    }

    /**
     * @param float $dataOpacity
     *
     * @return $this
     */
    public function setDataOpacity($dataOpacity)
    {
        $this->dataOpacity = $dataOpacity;

        return $this;
    }

    /**
     * @param string $focusTarget
     *
     * @return $this
     */
    public function setFocusTarget($focusTarget)
    {
        $this->focusTarget = $focusTarget;

        return $this;
    }

    /**
     * @param bool $interpolateNulls
     *
     * @return $this
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;

        return $this;
    }

    /**
     * @param string $orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return $this
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $selectionMode
     *
     * @return $this
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }

    /**
     * @param Trendlines[] $trendlines
     *
     * @return $this
     */
    public function setTrendlines($trendlines)
    {
        $this->trendlines = $trendlines;

        return $this;
    }

    /**
     * @param VAxis[] $vAxes
     *
     * @return $this
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }

    /**
     * @param float $areaOpacity
     *
     * @return $this
     */
    public function setAreaOpacity($areaOpacity)
    {
        $this->areaOpacity = $areaOpacity;

        return $this;
    }

    /**
     * @param boolean $isStacked
     *
     * @return $this
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;

        return $this;
    }

    /**
     * @param string $seriesType
     *
     * @return $this
     */
    public function setSeriesType($seriesType)
    {
        $this->seriesType = $seriesType;

        return $this;
    }
}
