<?php

class CustomExceptionHandling extends Exception
{
    /**
     * Function to get an Error Message
     * Returns the error message in the catch block
     * getMessage get the name from the try block
     */
    public function errorMessage()
    {
        $errorMessage = 'Error at line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': ' . $this->getMessage() . ' You are not eligible to vote ';
        return $errorMessage;
    }
}

$age = readline('Enter Your Age: ');

try {
    if ($age < 18) {
        throw new CustomExceptionHandling();
    } else {
        echo "You are eligible to vote";
    }
} catch (CustomExceptionHandling $e) {
    echo $e->errorMessage();
}
