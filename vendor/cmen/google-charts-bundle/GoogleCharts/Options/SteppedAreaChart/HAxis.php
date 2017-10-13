<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTextStyle;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ViewWindow;

/**
 * @author Christophe Meneses
 */
class HAxis
{
    /**
     * If false, will hide outermost labels rather than allow them to be cropped by the chart container. If true,
     * will allow label cropping.
     *
     * @var boolean
     */
    protected $allowContainerBoundaryTextCufoff;

    /**
     * The direction in which the values along the horizontal axis grow. Specify -1 to reverse the order of the values
     * or 1 for normal order.
     *
     * @var int
     */
    protected $direction;

    /**
     * If true, draw the horizontal axis text at an angle, to help fit more text along the axis; if false, draw
     * horizontal axis text upright. Default behavior is to slant text if it cannot all fit when drawn upright.
     * Notice that this option is available only when the hAxis.textPosition is set to 'out' (which is the default).
     *
     * @var boolean
     */
    protected $slantedText;

    /**
     * The angle of the horizontal axis text, if it's drawn slanted. Ignored if hAxis.slantedText is false, or is in
     * auto mode, and the chart decided to draw the text horizontally.
     *
     * @var int
     */
    protected $slantedTextAngle;

    /**
     * Maximum number of levels of horizontal axis text. If axis text labels become too crowded, the server might
     * shift neighboring labels up or down in order to fit labels closer together. This value specifies the most
     * number of levels to use; the server can use fewer levels, if labels can fit without overlapping.
     *
     * @var int
     */
    protected $maxAlternation;

    /**
     * Maximum number of lines allowed for the text labels. Labels can span multiple lines if they are too long,
     * and the nuber of lines is, by default, limited by the height of the available space.
     *
     * @var int
     */
    protected $maxTextLines;

    /**
     * Minimum horizontal spacing, in pixels, allowed between two adjacent text labels. If the labels are spaced too
     * densely, or they are too long, the spacing can drop below this threshold, and in this case one of the
     * label-unclutter measures will be applied (e.g, truncating the lables or dropping some of them).
     *
     * @var int
     */
    protected $minTextSpacing;

    /**
     * How many horizontal axis labels to show, where 1 means show every label, 2 means show every other label,
     * and so on. Default is to try to show as many labels as possible without overlapping.
     *
     * @var int
     */
    protected $showTextEvery;

    /**
     * Position of the horizontal axis text, relative to the chart area. Supported values: 'out', 'in', 'none'.
     *
     * @var string
     */
    protected $textPosition;

    /**
     * @var TextStyle
     */
    protected $textStyle;

    /**
     * Replaces the automatically generated X-axis ticks with the specified array. Each element of the array should be
     * either a valid tick value (such as a number, date, datetime, or timeofday), or an array. If it's an array, it
     * should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     * [5, 10, 15, 20]
     * [['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four']]
     *
     * This option is only supported for a continuous axis.
     *
     * @var array
     */
    protected $ticks;

    /**
     * hAxis property that specifies the title of the horizontal axis.
     *
     * @var string
     */
    protected $title;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * @var ViewWindow
     */
    protected $viewWindow;


    /**
     * HAxis constructor.
     */
    public function __construct()
    {
        $this->textStyle = new TextStyle();
        $this->titleTextStyle = new TitleTextStyle();
        $this->viewWindow = new ViewWindow();
    }

    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @return TitleTextStyle
     */
    public function getTitleTextStyle()
    {
        return $this->titleTextStyle;
    }

    /**
     * @return ViewWindow
     */
    public function getViewWindow()
    {
        return $this->viewWindow;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param array $ticks
     *
     * @return $this
     */
    public function setTicks($ticks)
    {
        $this->ticks = $ticks;

        return $this;
    }

    /**
     * @param int $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @param int $showTextEvery
     *
     * @return $this
     */
    public function setShowTextEvery($showTextEvery)
    {
        $this->showTextEvery = $showTextEvery;

        return $this;
    }

    /**
     * @param boolean $allowContainerBoundaryTextCufoff
     *
     * @return $this
     */
    public function setAllowContainerBoundaryTextCufoff($allowContainerBoundaryTextCufoff)
    {
        $this->allowContainerBoundaryTextCufoff = $allowContainerBoundaryTextCufoff;

        return $this;
    }

    /**
     * @param boolean $slantedText
     *
     * @return $this
     */
    public function setSlantedText($slantedText)
    {
        $this->slantedText = $slantedText;

        return $this;
    }

    /**
     * @param int $slantedTextAngle
     *
     * @return $this
     */
    public function setSlantedTextAngle($slantedTextAngle)
    {
        $this->slantedTextAngle = $slantedTextAngle;

        return $this;
    }

    /**
     * @param int $maxAlternation
     *
     * @return $this
     */
    public function setMaxAlternation($maxAlternation)
    {
        $this->maxAlternation = $maxAlternation;

        return $this;
    }

    /**
     * @param int $maxTextLines
     *
     * @return $this
     */
    public function setMaxTextLines($maxTextLines)
    {
        $this->maxTextLines = $maxTextLines;

        return $this;
    }

    /**
     * @param int $minTextSpacing
     *
     * @return $this
     */
    public function setMinTextSpacing($minTextSpacing)
    {
        $this->minTextSpacing = $minTextSpacing;

        return $this;
    }

    /**
     * @param string $textPosition
     *
     * @return $this
     */
    public function setTextPosition($textPosition)
    {
        $this->textPosition = $textPosition;

        return $this;
    }
}