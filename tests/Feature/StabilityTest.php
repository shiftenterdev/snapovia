<?php

it('Check stability of all routes', function ($url) {
    $this->get($url)->assertOk();
})->with('routes');
