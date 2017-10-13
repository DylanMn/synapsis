<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedTextStyle extends MediumTextStyle
{
    /**
     * Color of the text outline.
     *
     * @var string
     */
    protected $auraColor;

    /**
     * The transparency of the text.
     *
     * @var float
     */
    protected $opacity;


    /**
     * @param string $auraColor
     *
     * @return $this
     */
    public function setAuraColor($auraColor)
    {
        $this->auraColor = $auraColor;

        return $this;
    }

    /**
     * @param float $opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }
}
