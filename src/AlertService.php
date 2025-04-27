<?php

namespace DaveLiddament\CustomPhpstanRulesTalkDemoLibrary;

final class AlertService
{
    public function alert(string $message, ?string $type = null): void
    {
        echo "Alert: $message\n" . ($type ? "Type: $type\n" : "");
    }
}