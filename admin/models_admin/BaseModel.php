<?php
    class BaseModel{
        public function alert_error_success($error, $success) {
            $html = '';
            if($error != '') {
                $html = '
                    <div class="alert alert-danger p-2"> 
                        '.$error.'
                    </div> 
                ';
            }
            elseif($success != '') {
                $html = '
                <div class="alert alert-success p-2"> 
                    '.$success.'
                </div> 
            ';
            }
        
            return $html;
        }
    }

    $BaseModel = new BaseModel();
?>