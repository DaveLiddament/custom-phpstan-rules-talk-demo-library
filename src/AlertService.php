<?php

namespace DaveLiddament\CustomPhpstanRulesTalkDemoLibrary;

final class AlertService
{
    public function alert(string $message, string $type): void
    {
        echo "Alert: $message\nType: $type\n";
    }
}