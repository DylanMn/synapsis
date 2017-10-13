<?php

namespace CMEN\GoogleChartsBundle\Twig;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
class GoogleChartsExtension extends \Twig_Extension
{
    /**
     * Version of Google Charts used.
     *
     * @var string
     */
    private $version;

    /**
     * Locale to customize currencies, dates, and numbers.
     *
     * @var string
     */
    private $language;


    /**
     * GoogleChartsExtension constructor.
     *
     * @param string $version
     * @param string $language
     */
    public function __construct($version, $language)
    {
        $this->version = $version;
        $this->language = $language;
    }


    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('gc_draw', array($this, 'draw'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('gc_start', array($this, 'start'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('gc_end', array($this, 'end'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('gc_event', array($this, 'event'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('gc_language', array($this, 'language')),
        );
    }

    /**
     * Returns the Javascript for the beginning of one or more charts.
     *
     * @param Chart|Chart[] $charts Chart instance or array of Chart instance
     * @param string|string[]|null $elementsID HTML element ID or array of HTML elements IDs. Can be null
     *
     * @return string
     */
    public function start($charts, $elementsID = null)
    {
        return $this->checkAndCallGoodMethod('startCharts', $charts, $elementsID);
    }

    /**
     * Returns the Javascript for the end of one or more charts.
     *
     * @param Chart|Chart[] $charts Chart instance or array of Chart instance
     *
     * @return string
     *
     * @throws GoogleChartsException
     */
    public function end($charts)
    {
        if ($charts instanceof Chart) {
            return $this->endCharts(array($charts));

        } elseif (is_array($charts) && !empty($charts)) {
            $this->checkChartType($charts);

            return $this->endCharts($charts);

        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }
    }

    /**
     * Returns the full Javascript to draw one or more charts.
     *
     * @param Chart|Chart[] $charts Chart instance or array of Chart instance
     * @param string|string[]|null $elementsID HTML element ID or array of HTML elements IDs. Can be null
     *
     * @return string
     */
    public function draw($charts, $elementsID = null)
    {
        return $this->checkAndCallGoodMethod('drawCharts', $charts, $elementsID);
    }

    /**
     * Add an event to a chart.
     *
     * @param Chart $chart A Chart instance
     * @param string $type Type of event
     * @param string $functionName Name of Javascript function
     */
    public function event(Chart $chart, $type, $functionName)
    {
        $chart->getEvents()->addListener($type, $functionName);
    }

    /**
     * Set the locale. Must be called before drawing charts.
     *
     * @link https://developers.google.com/chart/interactive/docs/basic_load_libs#loadwithlocale
     *
     * @param string $language Locale, for example : "fr"
     */
    public function language($language)
    {
        $this->language = $language;
    }

    /**
     * Returns Javascript according to the called method.
     *
     * @param string $name Method's name to be called
     * @param Chart|Chart[] $charts Chart instance or array of Chart instance
     * @param string|string[]|null $elementsID HTML element ID or array of HTML elements IDs. Can be null
     *
     * @return string
     *
     * @throws GoogleChartsException
     */
    private function checkAndCallGoodMethod($name, $charts, $elementsID = null)
    {
        if ($charts instanceof Chart) {
            if ($elementsID) {
                if (!is_string($elementsID)) {
                    throw new GoogleChartsException('A string is expected for HTML element ID.');
                }

                return $this->$name(array($charts), array($elementsID));

            } else {
                return $this->$name(array($charts));
            }

        } elseif (is_array($charts) && !empty($charts)) {
            if ($elementsID !== null) {
                if (count($charts) != count($elementsID)) {
                    throw new GoogleChartsException(
                        'Array charts and array HTML elements ID do not have the same number of element.'
                    );
                }

                $callback = function ($item) {
                    if (!is_string($item)) {
                        throw new GoogleChartsException('A string is expected for HTML element ID.');
                    }
                };
                array_map($callback, $elementsID);
            }

            $this->checkChartType($charts);

            return $this->$name($charts, $elementsID);

        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }
    }

    /**
     * Checks if all elements of an array are instances of Chart. Throws an exception if not.
     *
     * @param Chart[] $charts
     *
     * @throws GoogleChartsException
     */
    private function checkChartType($charts)
    {
        $callback = function ($item) {
            if (!$item instanceof Chart) {
                throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
            }
        };
        array_map($callback, $charts);
    }

    /**
     * Returns Javascript to load libraries.
     *
     * @param string[] $packages List of packages to load
     *
     * @return string
     */
    private function loadLibraries($packages)
    {
        array_walk($packages, function (&$item) {
            $item = "'" . $item . "'";
        });

        ($this->language) ? $language = ", language: '" . $this->language . "'" : $language = '';

        $load = "'" . $this->version . "', {packages:[" . implode(',', $packages) . ']' . $language . '}';

        return "google.charts.load($load);";
    }

    /**
     * Returns the Javascript for the beginning of the callback.
     *
     * @param string $name Name of callback
     *
     * @return string
     */
    private function startCallback($name)
    {
        return "google.charts.setOnLoadCallback($name);
            function $name() {";
    }

    /**
     * Returns the Javascript for the end of the callback.
     *
     * @return string
     */
    private function endCallback()
    {
        return '}';
    }

    /**
     * Returns the Javascript for the beginning of the charts.
     *
     * @param Chart[] $charts Array of Chart instance
     * @param string[]|null $elementsID Array of HTML elements IDs. Can be null
     *
     * @return string
     */
    public function startCharts($charts, $elementsID = null)
    {
        $packages = array();
        $drawChartName = '';
        for ($i = 0; $i < count($charts); $i++) {
            if ($elementsID) {
                $charts[$i]->setElementID($elementsID[$i]);
            }

            if (!in_array($charts[$i]->getPackage(), $packages)) {
                $packages[] = $charts[$i]->getPackage();
            }
            $drawChartName .= $charts[$i]->getElementID();
        }

        $js = $this->loadLibraries($packages);

        $js .= $this->startCallback('drawChart' . ucfirst(md5($drawChartName)));

        foreach ($charts as $chart) {
            $js .= $chart->startDraw();
        }

        return $js;
    }

    /**
     * Returns the Javascript for the end of the charts.
     *
     * @param Chart[] $charts Array of Chart instance
     *
     * @return string
     */
    public function endCharts($charts)
    {
        $js = '';

        foreach ($charts as $chart) {
            $js .= $chart->endDraw();
        }

        $js .= $this->endCallback();

        return $js;
    }

    /**
     * Returns the full Javascript to draw charts.
     *
     * @param Chart[] $charts Array of Chart instance
     * @param string[]|null $elementsID Array of HTML elements IDs. Can be null
     *
     * @return string
     */
    public function drawCharts($charts, $elementsID = null)
    {
        return $this->startCharts($charts, $elementsID) . $this->endCharts($charts);
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'cmen_google_charts_extension';
    }
}
