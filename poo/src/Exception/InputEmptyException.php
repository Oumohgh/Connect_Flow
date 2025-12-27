<?php 

class InputEmptyException extends Exception {
    public function getMessagePersonalise(): string {
        return "Boussouir Exception : " . $this->getMessage();
    }
}