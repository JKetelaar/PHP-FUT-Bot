<?php
/**
 * @author JKetelaar
 */

namespace JKetelaar\fut\api\errors;

class NonExistingTokenFunction extends \Exception {
    /**
     * NonExistingTokenFunction constructor.
     */
    public function __construct() {
        parent::__construct('Provided string is not a valid function to provide a token');
    }
}