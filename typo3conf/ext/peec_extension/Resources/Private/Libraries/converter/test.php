<?php

require __DIR__ . '/vendor/autoload.php';

use Geissler\Converter\Converter;
use Geissler\Converter\Standard\RIS\RIS;
use Geissler\Converter\Standard\BibTeX\BibTeX;
use Geissler\Converter\Standard\CSL\CSL;

$converter  =   new Converter();

// your input RIS data
$data = 'TY  - JOUR
             TI  - Die Grundlage der allgemeinen Relativitätstheorie
             AU  - Einstein, Albert
             PY  - 1916
             SP  - 769
             EP  - 822
             JO  - Annalen der Physik
             VL  - 49
             ER  - ';

// convert to bibTeX
$bibTeX =   $converter->convert(new RIS($data), new BibTeX());
print_r($bibTeX);die;
