<?php

namespace Class\Interface;

interface HTMLDownloader {

    public function downloadHTML(?int $size = null):string;
}