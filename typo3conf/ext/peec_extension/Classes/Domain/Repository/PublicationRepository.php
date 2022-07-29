<?php
namespace PEEC\PeecExtension\Domain\Repository;

use PEEC\PeecExtension\Domain\Filter;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * The repository for Publications
 */
class PublicationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param Filter $filter
     */
    public function findByFilter(Filter $filter)
    {
        $query = $this->createQuery();
        $query->setOrderings(['year' => 'DESC', 'author.uid' => 'ASC']);
        $query->getQuerySettings()->setRespectStoragePage(false);
        $constraints = [];
        if ($filter->getEmployee()) {
            $constraints[] = $query->equals('author.uid', $filter->getEmployee());
        }
        if ($filter->getType() != '') {
            $constraints[] = $query->equals('type', $filter->getType());
        }
        if ($filter->getMinYear()) {
            $constraints[] = $query->greaterThanOrEqual('year', $filter->getMinYear());
        }
        if ($filter->getMaxYear()) {
            $constraints[] = $query->lessThanOrEqual('year', $filter->getMaxYear());
        }
        if (!empty($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }
        return $query->execute();
    }
    public function findAllTypes()
    {
        $tableName = 'tx_peecextension_domain_model_publication';
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $rows = $queryBuilder->select('uid', 'type')->from($tableName)->groupBy('type')->orderBy('type', 'ASC')->execute()->fetchAll();
        $simple = [];
        foreach ($rows as $row) {
            $simple[] = $row['type'];
        }
        return $simple;
    }
    public function findYearInterval()
    {
        $tableName = 'tx_peecextension_domain_model_publication';
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $rows = $queryBuilder->select('uid', 'year')->from($tableName)->groupBy('year')->orderBy('year', 'DESC')->execute()->fetchAll();
        $simple = [];
        foreach ($rows as $row) {
            $simple[] = $row['year'];
        }
        return $simple;
    }
}
