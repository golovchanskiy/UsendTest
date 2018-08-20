<?php

interface AdFromInterface
{

    public function getAd(int $id): Ad;

    public function getFunctionName(): string;

}