<!-- Interface Segregation Principle : Clients should not be forced to depend on interfaces they do not use.  -->

<!-- Good Example: Separate interfaces for each type of printing. -->

<?php

interface PDFPrinter {
    public function printPDF();
}

interface DOCPrinter {
    public function printDOC();
}

class BasicPDFPrinter implements PDFPrinter {
    public function printPDF() {
        echo "Printing PDF...\n";
    }
}

class BasicDOCPrinter implements DOCPrinter {
    public function printDOC() {
        echo "Printing DOC...\n";
    }
}

// Usage
$pdfPrinter = new BasicPDFPrinter();
$docPrinter = new BasicDOCPrinter();

$pdfPrinter->printPDF();
$docPrinter->printDOC();


?>
