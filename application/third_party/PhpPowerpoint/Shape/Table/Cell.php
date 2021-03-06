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

namespace PhpOffice\PhpPowerpoint\Shape\Table;

use PhpOffice\PhpPowerpoint\IComparable;
use PhpOffice\PhpPowerpoint\Shape\RichText\Paragraph;
use PhpOffice\PhpPowerpoint\Style\Fill;
use PhpOffice\PhpPowerpoint\Style\Borders;
use PhpOffice\PhpPowerpoint\Shape\RichText\ITextElement;

/**
 * PHPPowerPoint_Shape_Table_Cell
 *
 * @category   PHPPowerPoint
 * @package    PHPPowerPoint_Shape
 * @copyright  Copyright (c) 2009 - 2010 PHPPowerPoint (http://www.codeplex.com/PHPPowerPoint)
 */
class Cell implements IComparable
{
    /**
     * Rich text paragraphs
     *
     * @var PHPPowerPoint_Shape_RichText_Paragraph[]
     */
    private $richTextParagraphs;

    /**
     * Active paragraph
     *
     * @var int
     */
    private $activeParagraph = 0;

    /**
     * Fill
     *
     * @var PHPPowerPoint_Style_Fill
     */
    private $fill;

    /**
     * Borders
     *
     * @var PHPPowerPoint_Style_Borders
     */
    private $borders;

    /**
     * Width (in pixels)
     *
     * @var int
     */
    private $width = 0;

    /**
     * Colspan
     *
     * @var int
     */
    private $colSpan = 0;

    /**
     * Rowspan
     *
     * @var int
     */
    private $rowSpan = 0;

    /**
     * Hash index
     *
     * @var string
     */
    private $hashIndex;

    /**
     * Create a new PHPPowerPoint_Shape_RichText instance
     */
    public function __construct()
    {
        // Initialise variables
        $this->richTextParagraphs = array(
            new Paragraph()
        );
        $this->activeParagraph    = 0;

        // Set fill
        $this->fill = new Fill();

        // Set borders
        $this->borders = new Borders();
    }

    /**
     * Get active paragraph index
     *
     * @return int
     */
    public function getActiveParagraphIndex()
    {
        return $this->activeParagraph;
    }

    /**
     * Get active paragraph
     *
     * @return PHPPowerPoint_Shape_RichText_Paragraph
     */
    public function getActiveParagraph()
    {
        return $this->richTextParagraphs[$this->activeParagraph];
    }

    /**
     * Set active paragraph
     *
     * @param  int                                    $index
     * @return PHPPowerPoint_Shape_RichText_Paragraph
     */
    public function setActiveParagraph($index = 0)
    {
        if ($index >= count($this->richTextParagraphs)) {
            throw new \Exception("Invalid paragraph count.");
        }

        $this->activeParagraph = $index;

        return $this->getActiveParagraph();
    }

    /**
     * Get paragraph
     *
     * @param  int $index
     * @return PHPPowerPoint_Shape_RichText_Paragraph
     */
    public function getParagraph($index = 0)
    {
        if ($index >= count($this->richTextParagraphs)) {
            throw new \Exception("Invalid paragraph count.");
        }

        return $this->richTextParagraphs[$index];
    }

    /**
     * Create paragraph
     *
     * @return PHPPowerPoint_Shape_RichText_Paragraph
     */
    public function createParagraph()
    {
        $alignment   = clone $this->getActiveParagraph()->getAlignment();
        $font        = clone $this->getActiveParagraph()->getFont();
        $bulletStyle = clone $this->getActiveParagraph()->getBulletStyle();

        $this->richTextParagraphs[] = new Paragraph();
        $this->activeParagraph      = count($this->richTextParagraphs) - 1;

        $this->getActiveParagraph()->setAlignment($alignment);
        $this->getActiveParagraph()->setFont($font);
        $this->getActiveParagraph()->setBulletStyle($bulletStyle);

        return $this->getActiveParagraph();
    }

    /**
     * Add text
     *
     * @param  PHPPowerPoint_Shape_RichText_ITextElement $pText Rich text element
     * @throws \Exception
     * @return PHPPowerPoint_Shape_RichText
     */
    public function addText(ITextElement $pText = null)
    {
        $this->richTextParagraphs[$this->activeParagraph]->addText($pText);

        return $this;
    }

    /**
     * Create text (can not be formatted !)
     *
     * @param  string                                   $pText Text
     * @return PHPPowerPoint_Shape_RichText_TextElement
     * @throws \Exception
     */
    public function createText($pText = '')
    {
        return $this->richTextParagraphs[$this->activeParagraph]->createText($pText);
    }

    /**
     * Create break
     *
     * @return PHPPowerPoint_Shape_RichText_Break
     * @throws \Exception
     */
    public function createBreak()
    {
        return $this->richTextParagraphs[$this->activeParagraph]->createBreak();
    }

    /**
     * Create text run (can be formatted)
     *
     * @param  string                           $pText Text
     * @return PHPPowerPoint_Shape_RichText_Run
     * @throws \Exception
     */
    public function createTextRun($pText = '')
    {
        return $this->richTextParagraphs[$this->activeParagraph]->createTextRun($pText);
    }

    /**
     * Get plain text
     *
     * @return string
     */
    public function getPlainText()
    {
        // Return value
        $returnValue = '';

        // Loop trough all PHPPowerPoint_Shape_RichText_Paragraph
        foreach ($this->richTextParagraphs as $p) {
            $returnValue .= $p->getPlainText();
        }

        // Return
        return $returnValue;
    }

    /**
     * Convert to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getPlainText();
    }

    /**
     * Get paragraphs
     *
     * @return PHPPowerPoint_Shape_RichText_Paragraph[]
     */
    public function getParagraphs()
    {
        return $this->richTextParagraphs;
    }

    /**
     * Set paragraphs
     *
     * @param  PHPPowerPoint_Shape_RichText_Paragraphs[] $paragraphs Array of paragraphs
     * @throws \Exception
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setParagraphs($paragraphs = null)
    {
        if (is_array($paragraphs)) {
            $this->richTextParagraphs = $paragraphs;
            $this->activeParagraph    = count($this->richTextParagraphs) - 1;
        } else {
            throw new \Exception("Invalid PHPPowerPoint_Shape_RichText_Paragraph[] array passed.");
        }

        return $this;
    }

    /**
     * Get fill
     *
     * @return PHPPowerPoint_Style_Fill
     */
    public function getFill()
    {
        return $this->fill;
    }

    /**
     * Set fill
     *
     * @param  PHPPowerPoint_Style_Fill     $fill
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setFill(Fill $fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * Get borders
     *
     * @return PHPPowerPoint_Style_Borders
     */
    public function getBorders()
    {
        return $this->borders;
    }

    /**
     * Set borders
     *
     * @param  PHPPowerPoint_Style_Borders  $borders
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setBorders(Borders $borders)
    {
        $this->borders = $borders;

        return $this;
    }

    /**
     * Get width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set width
     *
     * @param  int                          $value
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setWidth($value = 0)
    {
        $this->width = $value;

        return $this;
    }

    /**
     * Get colSpan
     *
     * @return int
     */
    public function getColSpan()
    {
        return $this->colSpan;
    }

    /**
     * Set colSpan
     *
     * @param  int                          $value
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setColSpan($value = 0)
    {
        $this->colSpan = $value;

        return $this;
    }

    /**
     * Get rowSpan
     *
     * @return int
     */
    public function getRowSpan()
    {
        return $this->rowSpan;
    }

    /**
     * Set rowSpan
     *
     * @param  int                          $value
     * @return PHPPowerPoint_Shape_RichText
     */
    public function setRowSpan($value = 0)
    {
        $this->rowSpan = $value;

        return $this;
    }

    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        $hashElements = '';
        foreach ($this->richTextParagraphs as $element) {
            $hashElements .= $element->getHashCode();
        }

        return md5($hashElements . $this->fill->getHashCode() . $this->borders->getHashCode() . $this->width . __CLASS__);
    }

    /**
     * Get hash index
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @return string Hash index
     */
    public function getHashIndex()
    {
        return $this->hashIndex;
    }

    /**
     * Set hash index
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @param string $value Hash index
     */
    public function setHashIndex($value)
    {
        $this->hashIndex = $value;
    }
}
