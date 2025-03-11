<?php

namespace Maar10\Simple;

enum EnviromentKey: string
{
    case DATABASE_NAME = 'DATABASE_NAME';
    case DATABASE_USER = 'DATABASE_USER';
    case DATABASE_PASSWORD = 'DATABASE_PASSWORD';
    case DATABASE_HOST = 'DATABASE_HOST';
    case DATABASE_PORT = 'DATABASE_PORT';
    case DATABASE_DRIVER = 'DATABASE_DRIVER';
}
