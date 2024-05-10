<!-- 1) Aprire un file con fopen($file, $mode)
2) Vedere tutte le modalità di apertura di un file
3) Check se il file esiste
4) Chiudere un file
5) Leggere un file con fread($file, $quantoleggere), readfile($file) oppure file_get_contents($file) senza aprire 
6) Scrivere in n file con fwrite($file, $data) o file_put_contents($file, $data) senza aprire 
7) Rinominare file con rename($file, $nome)
8) Eliminare un file con unlink($file) -->

<?php
$nomeFile= "note.txt"; /*definire un file*/
// $testo = "Ciao sono una frase";
//1)
if(file_exists($nomeFile)){
    $file= fopen($nomeFile, "w"); /*referenza effettiva al file= ($nomedelfile, "modalità")*/

    // scrive sul file
    // fwrite($file, $testo);

    /*($file, $quantoleggere)*/
    // $content=fread($file, "20");
    // $content=fread($file, filesize($nomeFile)); /*legge tutto*/ 

    // leggono il file senza aprirlo, quindi si può evitare di scrivere $file= fopen($nomeFile, "r");
    // $content=readfile($nomeFile);
    // $content=file_get_contents($nomeFile);

    // echo $content;

    fclose($file);
}else{

    echo "Il file non esiste";
}

// 2)
// Modes	What it does
// r	    Open the file for reading only.
// r+	    Open the file for reading and writing.
// w	    Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.
// w+	    Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
// a	    Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
// a+	    Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
// x	    Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
// x+	    Open the file for reading and writing; otherwise it has the same behavior as 'x'.

// 3)

// 4)

// 5)

// 6)

// 7)

// 8)


?>