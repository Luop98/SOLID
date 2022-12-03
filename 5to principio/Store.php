<?php
use MyBank\MyBankApi;

class Store
{
    protected $myBankApi;
    public function __construct(MyBankApi $myBankApi)
    {
        $this-> myBankApi = $myBankApi;
    }

    public function purchase()
    {
        $this -> myBankApi-> charge();
    }
}