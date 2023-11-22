<?php require_once "function.php";  ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-[#f8e9e1]">
    <div class="container flex justify-center mx-auto m-14">
        <div class="flex flex-col">
            <h1 class="text-3xl font-sans font-bold">Convert Decimal To Binary</h1>
            <div class="w-full mt-2">
                <div class="border-b border-gray-200 shadow-lg">
                    <table class="divide-y divide-gray-300 text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-4 p-2">Decimal Value</th>
                                <th class="p-4 nilaiRandom" id="nilaiRandom" colspan="8"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <tr class="whitespace-nowrap">
                                <td class="p-2">Base</td>
                                <?php
                                base();
                                ?>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="p-2">Exponent</td>
                                <?php
                                exponent();
                                ?>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="p-2">Position</td>
                                <?php
                                position();
                                ?>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="p-2">Bit</td>
                                <form action="#" id="formBiner">
                                    <td class="p-2">
                                        <input type="text" id="input_form1" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form2" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form3" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form4" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form5" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form6" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form7" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" id="input_form8" value="" class="w-12 border-2 border-slate-600 text-center rounded px-4 py-2 ">
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-8">
                    <button class="check bg-white border-2 border-slate-400 shadow-lg rounded-full ml-2 text-sky-800 py-2 px-6 hover:bg-sky-800 hover:text-white hover:border-white">Check</button>
                    <button class="newNumber bg-white border-2 border-slate-400 shadow-lg rounded-full ml-2 text-sky-800 py-2 px-6 hover:bg-sky-800 hover:text-white hover:border-white">New Number</button>
                    <button class=" show-me bg-white border-2 border-slate-400 shadow-lg rounded-full ml-2 text-sky-800 py-2 px-6 hover:bg-sky-800 hover:text-white hover:border-white">Show Me</button>
                    <button class="bg-white border-2 border-slate-400 shadow-lg rounded-full ml-2 text-sky-800 py-2 px-6 hover:bg-sky-800 hover:text-white hover:border-white" onclick="formReset()">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal result-->

    <!-- modal view notify benar -->
    <div id="notify" class="notify-true hidden container mx-auto max-w-md bg-[#477f88] absolute top-5 left-5 right-5 rounded-md shadow-2xl px-10 py-16 sm:max-w-xl lg:max-w-5xl opacity-90">
        <div class="close1 w-8 h-8 bg-slate-600 rounded-full flex absolute top-5 right-5 cursor-pointer">
            <span class="m-auto text-xl text-white">X</span>
        </div>
        <div class="container text-white">
            <p class="text-shadow font-semibold">Jawaban anda benar!. Silahkan klik <b>New Number</b> untuk mencoba lagi</p>
        </div>
    </div>

    <!-- modal view notify salah -->
    <div id="notify" class="notify-false hidden container mx-auto max-w-md bg-[#477f88] absolute top-5 left-5 right-5 rounded-md shadow-2xl px-10 py-16 sm:max-w-xl lg:max-w-5xl opacity-90">
        <div class="close2 w-8 h-8 bg-slate-600 rounded-full flex absolute top-5 right-5 cursor-pointer">
            <span class="m-auto text-xl text-white">X</span>
        </div>
        <div class="container text-white">
            <p class="text-shadow font-semibold">Nilai biner yang anda masukan salah. Silahkan klik <b>Reset</b> untuk mencoba lagi!</p>
        </div>
    </div>


    <script>
        var nilaiRandom = document.querySelector(".nilaiRandom");
        var newNumber = document.querySelector(".newNumber");
        var check = document.querySelector(".check");
        var showMe = document.querySelector(".show-me");

        newNumber.addEventListener('click', function() {
            var nilai = Math.random() * 255 + 0;
            var result = Math.floor(nilai);
            // console.log(result);
            nilaiRandom.innerHTML = result;
            formReset();

            // create check result
            check.addEventListener('click', function() {
                var bit1 = document.getElementById("input_form1").value;
                var bit2 = document.getElementById("input_form2").value;
                var bit3 = document.getElementById("input_form3").value;
                var bit4 = document.getElementById("input_form4").value;
                var bit5 = document.getElementById("input_form5").value;
                var bit6 = document.getElementById("input_form6").value;
                var bit7 = document.getElementById("input_form7").value;
                var bit8 = document.getElementById("input_form8").value;


                if (parseInt(bit1) == 1) {
                    var b1 = 128;
                } else if (parseInt(bit1) != 1) {
                    var b1 = 0;
                }

                if (parseInt(bit2) == 1) {
                    var b2 = 64;
                } else if (parseInt(bit2) != 1) {
                    var b2 = 0;
                }

                if (parseInt(bit3) == 1) {
                    var b3 = 32;
                } else if (parseInt(bit3) != 1) {
                    var b3 = 0;
                }

                if (parseInt(bit4) == 1) {
                    var b4 = 16;
                } else if (parseInt(bit4) != 1) {
                    var b4 = 0;
                }

                if (parseInt(bit5) == 1) {
                    var b5 = 8;
                } else if (parseInt(bit5) != 1) {
                    var b5 = 0;
                }

                if (parseInt(bit6) == 1) {
                    var b6 = 4;
                } else if (parseInt(bit6) != 1) {
                    var b6 = 0;
                }

                if (parseInt(bit7) == 1) {
                    var b7 = 2;
                } else if (parseInt(bit7) != 1) {
                    var b7 = 0;
                }

                if (parseInt(bit8) == 1) {
                    var b8 = 1;
                } else if (parseInt(bit8) != 1) {
                    var b8 = 0;
                }

                var angka = document.getElementById("nilaiRandom").innerHTML;

                var total = b1 + b2 + b3 + b4 + b5 + b6 + b7 + b8;
                // console.log(total);
                // console.log(result);
                // console.log(angka);
                if (total === parseInt(angka)) {
                    var notifTrue = document.querySelector(".notify-true");
                    var tutup1 = document.querySelector(".close1");

                    notifTrue.classList.remove("hidden");

                    tutup1.addEventListener('click', function() {
                        notifTrue.classList.add('hidden');
                    });
                } else {
                    // alert(".");
                    var notifFalse = document.querySelector(".notify-false");
                    var tutup2 = document.querySelector(".close2");

                    notifFalse.classList.remove("hidden");

                    tutup2.addEventListener('click', function() {
                        notifFalse.classList.add('hidden');
                    });
                }
            });


            // create show me
            showMe.addEventListener('click', function() {
                let position1 = 128;
                let position2 = 64;
                let position3 = 32;
                let position4 = 16;
                let position5 = 8;
                let position6 = 4;
                let position7 = 2;
                let position8 = 1;

                // cekk kondisi diposition 1
                if (result >= position1) {
                    document.getElementById("input_form1").value = 1;
                    let min1 = result - position1;

                    // cek jika kondisi true
                    if (min1 >= position2) {
                        document.getElementById("input_form2").value = 1;
                        let min2 = min1 - position2;

                        // cek jika kondisi true
                        if (min2 >= position3) {
                            document.getElementById("input_form3").value = 1;
                            let min3 = min2 - position3;

                            // cek jika kondisi true
                            if (min3 >= position4) {
                                document.getElementById("input_form4").value = 1;
                                let min4 = min3 - position4;

                                // cek jika kondisi true
                                if (min4 >= position5) {
                                    document.getElementById("input_form5").value = 1;
                                    let min5 = min4 - position5;

                                    // cek jika kondisi true
                                    if (min5 >= position6) {
                                        document.getElementById("input_form6").value = 1;
                                        let min6 = min5 - position6;

                                        // cek jika kondisi true
                                        if (min6 >= position7) {
                                            document.getElementById("input_form7").value = 1;
                                            let min7 = min6 - position7;

                                            // cek jika kondisi true
                                            if (min7 >= position8) {
                                                document.getElementById("input_form8").value = 1;
                                                let min8 = min7 - position8;
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            document.getElementById("input_form3").value = 0;
                            let min3 = min2 - position3;
                        }
                    } else {
                        document.getElementById("input_form2").value = 0;
                        let min2 = min1 - position2;
                    }

                    // jika kondisi false
                } else {
                    document.getElementById("input_form1").value = 0;

                    // cek diposition 2 dikondisi false
                    if (result >= position2) {
                        document.getElementById("input_form2").value = 1;
                    } else {
                        document.getElementById("input_form2").value = 0;

                        // cek diposition 3 dikondisi false
                        if (result >= position3) {
                            document.getElementById("input_form3").value = 1;
                        } else {
                            document.getElementById("input_form3").value = 0;

                            // cek diposition 4 dikondisi false
                            if (result >= position4) {
                                document.getElementById("input_form4").value = 1;
                            } else {
                                document.getElementById("input_form4").value = 0;

                                // cek diposition 5 dikondisi false
                                if (result >= position5) {
                                    document.getElementById("input_form5").value = 1;

                                } else {
                                    document.getElementById("input_form5").value = 0;

                                    // cek diposition 6 dikondisi false
                                    if (result >= position6) {
                                        document.getElementById("input_form6").value = 1;
                                    } else {
                                        document.getElementById("input_form6").value = 0;

                                        // cek diposition 7 dikondisi false
                                        if (result >= position7) {
                                            document.getElementById("input_form7").value = 1;
                                        } else {
                                            document.getElementById("input_form7").value = 0;

                                            // cek diposition 8 dikondisi false
                                            if (result >= position8) {
                                                document.getElementById("input_form8").value = 1;
                                            } else {
                                                document.getElementById("input_form8").value = 0;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

            });

        });


        // create reset
        function formReset() {
            document.getElementById("formBiner").reset();
        }
    </script>
</body>

</html>