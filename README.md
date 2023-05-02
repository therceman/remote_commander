# remote_commander
Remote Commander - PHP script for sending commands to your PC remotely.

[ WORK IN PROGRESS ]

## Setup Service

```shell
sed -i "s/LOCAL_UID=.*/LOCAL_UID=$(id -u)/g; s/LOCAL_GID=.*/LOCAL_GID=$(id -g)/g" .env
```

## Start Service

```shell
docker compose up -d --build
```

## Start Daemon

```shell
php ./src/script/rc_daemon.php
```