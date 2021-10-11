<?php

class StopWatch
{

    private $startTime;
    private $endTime;

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = microtime();
    }

    public function stop()
    {
        $this->endTime = microtime();
    }

    public function getElapsedTime()
    {
        return ($this->endTime - $this->startTime) * 1000;
    }
}