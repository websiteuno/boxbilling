<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


class Box_DbLoggedPDOStatement extends PDOStatement
{
    public function execute ($input_parameters = null)
    {
        error_log($this->queryString);
        parent::execute($input_parameters);
    }
}