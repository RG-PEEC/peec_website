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
 * The repository for Projects
 */
class ProjectRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

    /**
     * @param Filter $filter
     */
    public function findByFilter(Filter $filter)
    {
        $query = $this->createQuery();
        $query->setOrderings(['startdate' => 'DESC']);
        $query->getQuerySettings()->setRespectStoragePage(false);
        $constraints = [];
        if ($filter->getEmployee()) {
            $constraints[] = $query->logicalOr(
            [
            $query->equals('member.uid', $filter->getEmployee()), 
            $query->equals('leader.uid', $filter->getEmployee())
            ]
            );
        }
        if ($filter->getCategory() != '') {
            $constraints[] = $query->equals('category.uid', $filter->getCategory());
        }
        if ($filter->getMinYear()) {
            $begin = mktime(0, 0, 0, 1, 1, $filter->getMinYear());
            $constraints[] = $query->greaterThanOrEqual('startdate', $begin);
        }
        if ($filter->getMaxYear()) {
            $end = mktime(23, 59, 59, 12, 31, $filter->getMaxYear());
            $constraints[] = $query->lessThanOrEqual('startdate', $end);
        }
        if (!empty($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }
        return $query->execute();
    }
    public function findYearInterval()
    {
        $tableName = 'tx_peecextension_domain_model_project';
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $rows = $queryBuilder->select('uid', 'startdate')->from($tableName)->groupBy('startdate')->orderBy('startdate', 'DESC')->execute()->fetchAll();
        $simple = [];
        foreach ($rows as $row) {
            $simple[] = gmdate("Y", strtotime('+1 day', $row['startdate']));
        }
        return array_unique($simple);
    }
}
