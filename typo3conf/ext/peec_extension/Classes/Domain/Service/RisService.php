<?php

declare(strict_types=1);

namespace PEEC\PeecExtension\Service;

use PEEC\PeecExtension\Domain\Model\Publication;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class RisService
{
    /**
     * get publication and generate Ris
     * @param Publication $publication
     * @return string
     */
    static public function generateRisText(Publication $publication)
    {
        $sAuthors = "";
        $aAuthor = [];
        foreach ($publication->getAuthor() as $author) {
            $aAuthor[] = $author->getLastname() . ", " . $author->getFirstname();
        }

        $sAuthors = implode("; ", $aAuthor);
        //$sAuthors = substr($sAuthors, 0, -1);

        $sType = "";
        switch ($publication->getType()) {
            case 0: //article
                $sType = "JOUR";
                break;
            case 1: //book
                $sType = "BOOK";
                break;
            case 2: //incollection
                $sType = "INCOL";
                break;
            case 3: //inproceeding
                $sType = "CONF";
                break;
            default: //misc
                $sType = "MISC";
                break;
        }

        $startpage = null;
        $endpage = null;
        if ($publication->getStartpage() > 0 && $publication->getEndingpage() > 0) {
            $startpage = $publication->getStartpage();
            $endpage = $publication->getEndingpage();
        }

        $data = 'TY - ' . $sType . '
             ID - ' . $publication->getCitationlable() . '
             TI - ' . $publication->getTitle() . '
             JF - ' . $publication->getBooktitle() . '
             AU - ' . $sAuthors . '
             A2 - ' . $publication->getEditor() . '
             CP - ' . $publication->getChapter() . '
             PY - ' . $publication->getYear() . '
             N1 - ' . $publication->getNote() . '
             SP - ' . $startpage . '
             EP - ' . $endpage . '
             JF - ' . $publication->getJournal() . '
             VL - ' . $publication->getVolume() . '
             PB - ' . $publication->getPublisher() . '
             SN - ' . $publication->getIsbn() . '
             CY - ' . $publication->getAddress() . '
             DO - ' . $publication->getDoi() . '
             L2 - ' . $publication->getReferencelink() . '
             ER - ';

        return $data;
    }
}
