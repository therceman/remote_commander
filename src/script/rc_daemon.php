<?php

class rc_daemon
{
    private string $name;
    private array $config = [];

    public function loadConfig(string $configFile): void
    {
        $json = file_get_contents($configFile);

        if (str_contains($json, '$(whoami)')) {
            $json = str_replace('$(whoami)', trim(exec('whoami')), $json);
        }

        if (str_contains($json, '$(hostname)')) {
            $json = str_replace('$(hostname)', trim(exec('hostname')), $json);
        }

        $this->config = json_decode($json, true);
    }

    public function configure(): void
    {
        $this->name = $this->config['name'];
    }

    public function start(): void
    {
        echo "running daemon [$this->name] \r\n";
    }
}

$rcDaemon = new rc_daemon();
$rcDaemon->loadConfig(__DIR__ . './../config/daemon.json');
$rcDaemon->configure();
$rcDaemon->start();