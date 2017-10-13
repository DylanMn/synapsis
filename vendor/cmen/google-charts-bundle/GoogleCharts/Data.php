<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;

/**
 * @author Christophe Meneses
 */
class Data
{
    /**
     * @var array
     */
    private $arrayToDataTable;

    /**
     * @var boolean
     */
    private $firstRowIsData;

    /**
     * @return array
     */
    public function getArrayToDataTable()
    {
        return $this->arrayToDataTable;
    }

    /**
     * This method takes in a two-dimensional array. The data types of each column are interpreted automatically from
     * the data given. If a cell has no value, specify a null or empty value as appropriate. Column data types can also
     * be specified using the object literal notation in the first row (the column header row) of the array
     * (i.e. ['label' => 'Start Date', 'type' => 'date']). Optional data roles may be used as well, but they must be
     * defined explicitly using object literal notation. Object literal notation may also be used for any cell,
     * allowing you to define Cell Objects).
     *
     * @param array $arrayToDataTable A two-dimensional array, where each row represents a row in the data table.
     * @param boolean $firstRowIsData If firstRowIsData is false (the default), the first row will be interpreted
     *                                as header labels.
     */
    public function setArrayToDataTable($arrayToDataTable, $firstRowIsData = false)
    {
        $this->arrayToDataTable = $arrayToDataTable;
        $this->firstRowIsData = $firstRowIsData;
    }

    /**
     * Returns Javascript of data.
     *
     * @param string $dataName Variable name who will contain the data Javascript
     *
     * @return string A Javascript string
     *
     * @throws GoogleChartsException
     */
    public function draw($dataName)
    {
        if (!$this->arrayToDataTable) {
            throw new GoogleChartsException(
                'There is no data for chart. Use method setArrayToDataTable() to provide data.'
            );
        }

        $js = "var $dataName = new google.visualization.arrayToDataTable([";

        end($this->arrayToDataTable);
        $lastKeyRow = key($this->arrayToDataTable);
        foreach ($this->arrayToDataTable as $keyRow => $row) {
            $js .= '[';

            end($row);
            $lastKeyValue = key($row);
            foreach ($row as $key => $value) {
                if ($value instanceof \DateTime) {
                    $js .= 'new Date(' . $value->format('Y') . ', ' . ($value->format('n') - 1) . ', ' .
                        $value->format('d') . ', ' . $value->format('H') . ', ' . $value->format('i') . ', ' .
                        $value->format('s') . ')';
                } else {
                    $js .= json_encode($value);
                }

                if ($key != $lastKeyValue) {
                    $js .= ', ';
                }
            }
            unset($value);
            $js .= ']';

            if ($keyRow != $lastKeyRow) {
                $js .= ', ';
            }
        }
        unset($row);

        $this->firstRowIsData ? $js .= '], true);' : $js .= '], false);';

        return $js;
    }
}
