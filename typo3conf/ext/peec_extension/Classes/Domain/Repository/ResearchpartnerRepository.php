<?php
namespace PEEC\PeecExtension\Domain\Repository;


/***
 *
 * This file is part of the "PEEC Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Daniel Saiz <daniel.saiz@gmx.at>, FH Hagenberg
 *           Matthias Kohler <Matthias.Kohler@gmx.de>, FH Hagenberg
 *
 ***/
/**
 * The repository for Partners
 */
class ResearchpartnerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAllSorted()
    {
        $query = $this->createQuery();
        $query->setOrderings(["sorting" => "ASC"]);
        $query->getQuerySettings()->setRespectStoragePage(false);

        $query->matching($query->equals('display', true));

        return $query->execute();
    }
}
