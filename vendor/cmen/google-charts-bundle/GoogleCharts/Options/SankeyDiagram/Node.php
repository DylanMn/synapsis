<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

/**
 * @author Christophe Meneses
 */
class Node
{
    /**
     * @var Label
     */
    protected $label;

    /**
     * Allows you to select nodes.
     *
     * @var boolean
     */
    protected $interactivity;

    /**
     * Horizontal distance between the label and the node.
     *
     * @var int
     */
    protected $labelPadding;

    /**
     * Vertical distance between nodes.
     *
     * @var int
     */
    protected $nodePadding;

    /**
     * Thickness of the node.
     *
     * @var int
     */
    protected $width;

    /**
     * Custom color palette for sankey nodes. Nodes will cycle through this palette giving each node its own color.
     *
     * @var string[]
     */
    protected $colors;

    /**
     * Sets a coloring mode for the sankey nodes. Possible values:
     *      'unique' - Each node will receive a unique color.
     *
     * @var string
     */
    protected $colorMode;


    /**
     * Node constructor.
     */
    public function __construct()
    {
        $this->label = new Label();
    }


    /**
     * @return Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param boolean $interactivity
     *
     * @return $this
     */
    public function setInteractivity($interactivity)
    {
        $this->interactivity = $interactivity;

        return $this;
    }

    /**
     * @param int $labelPadding
     *
     * @return $this
     */
    public function setLabelPadding($labelPadding)
    {
        $this->labelPadding = $labelPadding;

        return $this;
    }

    /**
     * @param int $nodePadding
     *
     * @return $this
     */
    public function setNodePadding($nodePadding)
    {
        $this->nodePadding = $nodePadding;

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

    /**
     * @param string[] $colors
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @param string $colorMode
     *
     * @return $this
     */
    public function setColorMode($colorMode)
    {
        $this->colorMode = $colorMode;

        return $this;
    }
}
