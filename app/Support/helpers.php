<?php

    namespace App\Support;
    class Helpers
    {
        public function allowedIps()
        {
            return [
                '127.0.0.1'
            ];
        }

        public function isAllowedToView($ip)
        {
            if(in_array($ip, $this->allowedIps()))
            {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>