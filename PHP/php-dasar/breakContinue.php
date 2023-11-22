<?=

$counter = 1;

while (true) {
    echo "ini adalah while ke-$counter menggunakan break" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        break; // akan break di angka 11
    }
}


for ($counter1 = 0; $counter1 <= 100; $counter1++) {
    if ($counter1 % 2 != 0) { // menampilkan angka ganjil antara 1 s/d 100
        continue;
    }
    echo "ini adalah perulangan dengan Continue $counter1" . PHP_EOL;
}
