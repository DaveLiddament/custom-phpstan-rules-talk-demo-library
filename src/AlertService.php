<?php

namespace DaveLiddament\CustomPhpstanRulesTalkDemoLibrary;

final class AlertService
{
    public function alert(string $message): void
    {
        echo "Alert: $message\n";
    }
}