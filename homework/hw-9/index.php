<?php

// Написать программу, которая открывает файл, считывает оттуда данные, 
// закрывает файл, создает другой файл, записывает туда данные через строку 
// (первую пишет, вторую нет, третью пишет, четвертую нет и т.д.), закрывает файл. 
// Имена файлов написать в комментариях в коде программы. Действия оформить в две функции: 
// одна для прочтения, другая для записи. Параметром обеих функций долен быть путь к файлу.

$new = "";

    $file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
    //$new_file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/newtext.txt";

    function file_read($file_path) {

        $open_file = fopen($file_path, "r+");

            while(!feof($open_file)) {

                $new_file = fgets($open_file);
            }
                fclose($open_file);
    };

    function file_write($file_path,$new) {

        $open_file = fopen($file_path, "r+");

        $new_file = fgets($open_file);

               
                
            for($i=0; $i < strlen($new_file); $i +=2) {

                $new = fopen($new, "a+");

                fwrite($open_file, $new_file);
                
               
            }

                fclose($open_file);
                fclose($file_path);

    };
    file_read($file_path);
    file_write($new);






//         if (!file_exists($newfilepath)) {  //if no such file 
                
//             $newfile = fopen($newfilepath, "w"); //создаем файл

//                $newfileArr = fgets($newfilepath, "a+");// Открываем файл в режиме записи
//             };
         
//         for($i = 0; $i < strlen($file_array); $i+=2) {

//             print_r("hello");

//             $string = $file_array[$i];

//             $newarray = fwrite($newfile, $string);// Запись в файл
//         };
//     };

// fileread();

//Функцией прочесть из файла все строки. 
//Другой функцией померять длину каждой строки. 
//Третьей функцией записать в совершенно другой файл только те строки, которые длиннее средней длины по файлу.

$file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";

 function readAllStrings() {
    
    $opn_file = fopen($file_path, 'r+');
        
        while(!feof($opn_file)) {

            $read_file = fgets($opn_file);

        }
    fclose($opn_file);

 };


    $file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
    $strings_array = file($file_path);

    foreach ($strings_array as $key => $str) {
   
        $
    };

    // echo strlen($opn_file);
