<?php

class SiteController {
    public function actionRegister() {
        $files = [
            'foo',
            'bat',
            'foo',
            'bar'
        ];

        require_once __DIR__ . '/../views/site/register.php';
    }
}