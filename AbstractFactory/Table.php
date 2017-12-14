<?php

namespace AbstractFactory;

interface Table
{
    /**
     * @param string $content
     * @return void
     */
    public function show($content);
}
