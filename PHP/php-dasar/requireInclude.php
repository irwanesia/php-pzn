<?php

// require => jika file yg diambil tidak ada maka akan terjadi error dan prograrm akan terhenti

// include => jika file yg diambil tidak ada maka hanya akan memberi peringatan, dan program ttp berjalan

// contoh kasus nya di folder lib

require "Lib/myFunction.php";
// include "Lib/myFunction.php";

echo sayHello("Andi", "Santoso");