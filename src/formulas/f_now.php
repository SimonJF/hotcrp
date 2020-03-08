<?php
// formulas/f_now.php -- HotCRP helper class for formula expressions
// Copyright (c) 2009-2020 Eddie Kohler; see LICENSE.

class Now_Fexpr extends Sub_Fexpr {
    function __construct(FormulaCall $ff) {
        $this->format_ = $ff->kwdef->is_time ? self::FTIME : self::FDATE;
    }
    function compile(FormulaCompiler $state) {
        return $state->_add_now();
    }
}
