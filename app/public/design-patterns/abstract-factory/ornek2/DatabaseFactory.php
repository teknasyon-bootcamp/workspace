<?php

interface DatabaseFactory
{
    public function createDBHandler(): DBHandler;
}
