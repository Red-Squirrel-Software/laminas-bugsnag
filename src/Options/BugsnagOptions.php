<?php
namespace LaminasBugsnag\Options;

use Laminas\Stdlib\AbstractOptions;

class BugsnagOptions extends AbstractOptions
{
    protected string $apiKey;

    protected bool $isEnabled;

    protected string $releaseStage;

    protected array $notifyReleaseStages;

    protected bool $autoNotify;

    protected bool $sendEnvironment;

    protected string $appVersion;

    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    public function setEnabled(bool $isEnabled): void
    {
        $this->isEnabled = $isEnabled;
    }

    public function setReleaseStage(string $releaseStage): void
    {
        $this->releaseStage = $releaseStage;
    }

    public function setNotifyReleaseStages(array $stages): void
    {
        $this->notifyReleaseStages = $stages;
    }

    public function setAutoNotify(bool $autoNotify): void
    {
        $this->autoNotify = $autoNotify;
    }

    public function setSendEnvironment(bool $sendEnvironment): void
    {
        $this->sendEnvironment = $sendEnvironment;
    }

    public function setAppVersion(string $appVersion): void
    {
        $this->appVersion = $appVersion;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getReleaseStage(): string
    {
        return $this->releaseStage;
    }

    public function getNotifyReleaseStages(): array
    {
        return $this->notifyReleaseStages;
    }

    public function getAutoNotify(): bool
    {
        return $this->autoNotify;
    }

    public function getSendEnvironment(): bool
    {
        return $this->sendEnvironment;
    }

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }
}
