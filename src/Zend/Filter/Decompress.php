<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Filter
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Decompress.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Filter_Compress
 */
//require_once 'Zend/Filter/Compress.php';

/**
 * Decompresses a given string
 *
 * @category   Zend
 * @package    Zend_Filter
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Filter_Decompress extends Zend_Filter_Compress
{
    /**
     * Defined by Zend_Filter_Interface
     *
     * Decompresses the content $value with the defined settings
     *
     * @param  string $value Content to decompress
     * @return string The decompressed content
     */
    public function filter($value)
    {
        return $this->getAdapter()->decompress($value);
    }
}
