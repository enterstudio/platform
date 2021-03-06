<?php
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    1.1.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @link       http://cartalyst.com
 */


/**
 * --------------------------------------------------------------------------
 * Platform > Core > Url Class
 * --------------------------------------------------------------------------
 *
 * Let's extend Laravel Url class.
 *
 * @package    Platform
 * @author     Cartalyst LLC
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @license    BSD License (3-clause)
 * @link       http://cartalyst.com
 * @version    1.0
 */
class URL extends Laravel\Url
{
    /**
     * --------------------------------------------------------------------------
     * Function: to_admin()
     * --------------------------------------------------------------------------
     *
     * Generate an administration URL with HTTPS.
     *
     * @access   public
     * @param    string
     * @return   string
     */
    public static function to_admin($url = null)
    {
        // Return the URL.
        //
        return parent::to_secure(ADMIN . '/' . $url);
    }
}
