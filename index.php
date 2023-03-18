<?php
include 'PhpSerial.php';

// Let's start the class
$serial = new PhpSerial;

// First we must specify the device. This works on both linux and windows (if
// your linux serial device is /dev/ttyS0 for COM1, etc)
$serial->deviceSet("COM3");

// We can change the baud rate, parity, length, stop bits, flow control
$serial->confBaudRate(9600);
$serial->confCharacterLength(8);
$serial->confParity("none"); //none, even, odd
$serial->confStopBits(1);
$serial->confFlowControl("none");// none, rts/cts, xon/xoff

// Then we need to open it
$serial->deviceOpen();

// To write into
// $serial->sendMessage("1234");
// $serial->sendMessage("1234");
// $serial->sendMessage("1234");


// Or to read from
$read = $serial->readPort();
$cantPeso = substr($read,0, -8);
echo $cantPeso;

// If you want to change the configuration, the device must be closed
$serial->deviceClose();


