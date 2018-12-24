<?php
/**
 * This file is part of PHPPowerPoint - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPowerPoint is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPPowerPoint
 * @copyright   2009-2014 PHPPowerPoint contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpPowerpoint\Shape;

use PhpOffice\PhpPowerpoint\Shape\BaseDrawing;
use PhpOffice\PhpPowerpoint\IComparable;
use PhpOffice\PhpPowerpoint\Shape\Table\Row;

/**
 * PHPPowerPoint_Shape_Table
 *
 * @category   PHPPowerPoint
 * @package    PHPPowerPoint_Shape
 * @copyright  Copyright (c) 2009 - 2010 PHPPowerPoint (http://www.codeplex.com/PHPPowerPoint)
 */
class Table extends BaseDrawing implements IComparable
{
    /**
     * Rows
     *
     * @var PHPPowerPoint_Shape_Table_Row[]
     */
    private $rows;

    /**
     * Number of columns
     *
     * @var int
     */
    private $columnCount = 1;

    /**
     * Create a new PHPPowerPoint_Shape_Table instance
     *
     * @param int $columns Number of columns
     */
    public function __construct($columns = 1)
    {
        // Initialise variables
        $this->rows        = array();
        $this->columnCount = $columns;

        // Initialize parent
        parent::__construct();

        // No resize proportional
        $this->resizeProportional = false;
    }

    /**
     * Get row
     *
     * @param  int                           $row             Row number
     * @param  boolean                       $exceptionAsNull Return a null value instead of an exception?
     * @return PHPPowerPoint_Shape_Table_Row
     */
    public function getRow($row = 0, $exceptionAsNull = false)
    {
        if (!isset($this->rows[$row])) {
            if ($exceptionAsNull) {
                return null;
            }
            throw new \Exception('Row number out of bounds.');
        }

        return $this->rows[$row];
    }

    /**
     * Get rows
     *
     * @return PHPPowerPoint_Shape_Table_Row[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Create row
     *
     * @return PHPPowerPoint_Shape_Table_Row
     */
    public function createRow()
    {
        $row           = new Row($this->columnCount);
        $this->rows[] = $row;

        return $row;
    }

    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        $hashElements = '';
        foreach ($this->rows as $row) {
            $hashElements .= $row->getHashCode();
        }

        return md5($hashElements . __CLASS__);
    }
}
