<?php
    namespace entity;
    class Lecturer {
        public $id;
        public $qualification;
        public $employee_id;
        public function __construct($id, $qualification, $employee_id) {
            $this->id = $id;
            $this->qualification = $qualification;
            $this->employee_id = $employee_id;
        }
    }
    