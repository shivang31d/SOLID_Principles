<!-- Bad Example: A single large interface. -->


<?php

interface Printer {
    public function printPDF();
    public function printDOC();
}

class PDFPrinter implements Printer {
    public function printPDF() {
        echo "Printing PDF...\n";
    }

    public function printDOC() {
        throw new Exception("Not supported");
    }
}

class DOCPrinter implements Printer {
    public function printPDF() {
        throw new Exception("Not supported");
    }

    public function printDOC() {
        echo "Printing DOC...\n";
    }
}
?>