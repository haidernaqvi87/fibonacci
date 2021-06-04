<?php

class ResultOutputter{
    private $data;

    /**
     * initialize the data
     * @param float $data
     */
    public function __construct(float $data) {
        $this->data = $data;
    }

    /**
     * to display the data in plain text
     * @return string
     */
    public function text() : string{
        return "The number is $this->data";
    }

    /**
     * to display the data in json format
     * @return string
     */
    public function json(): string {
        $response["data"] = $this->data;
        return json_encode($response);
    }

    /**
     * to display the data in html
     * @return string
     */
    public function html(): string {
        return "<h1>{$this->data}</h1>";
    }


    /**
     * to display the data in xml
     * @return string
     */
    public function xml(): string {
        return "<?xml version='1.0' encoding='UTF-8'?><data>$this->data</data>";
    }

}