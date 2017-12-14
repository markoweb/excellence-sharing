<?php

namespace abstractFactory;

interface Table
{
    /**
     * @param string $content
     * @return void
     */
    public function show($content);
}
