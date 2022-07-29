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
 * The repository for Positions
 */
class PositionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param array $positions
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAllWithoutGiven(array $positions)
    {
        $query = $this->createQuery();
        $query->setOrderings(["sorting" => "ASC"]);
        $query->getQuerySettings()->setRespectStoragePage(false);

        $constraints = [];
        foreach ($positions as $position) {
            $constraints[] = $query->equals('name', $position);
        }

        $query->matching($query->logicalNot(
            $query->logicalOr($constraints)
        ));

        return $query->execute();
    }
}
