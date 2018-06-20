<?php

namespace MyProject\Sub\Level;

const CONNECT_OK = 1;
class Connection
{ /* ... */
}
function connect()
{ /* ... */
}

define("MyProject\Sub\Level\\" . "CONNECT_KO", -1);

echo namespace\CONNECT_KO;
