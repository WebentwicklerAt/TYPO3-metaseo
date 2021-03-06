<?php

/*
 *  Copyright notice
 *
 *  (c) 2015 Markus Blaschke <typo3@markus-blaschke.de> (metaseo)
 *  (c) 2013 Markus Blaschke (TEQneers GmbH & Co. KG) <blaschke@teqneers.de> (tq_seo)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 */

namespace Metaseo\Metaseo\Tests\Unit\Controller\Ajax\PageSeo;

use Metaseo\Metaseo\Tests\Unit\Controller\Ajax\AbstractPageSeoControllerTest;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class MetaDataControllerTest extends AbstractPageSeoControllerTest
{
    /**
     * @return \Metaseo\Metaseo\Controller\Ajax\PageSeo\MetaDataController
     */
    protected function getSubject()
    {
        /** @var \Metaseo\Metaseo\Controller\Ajax\PageSeo\MetaDataController $subject */
        $subject = GeneralUtility::makeInstance('Metaseo\\Metaseo\\Controller\\Ajax\\PageSeo\\MetaDataController');
        $subject->setObjectManager($this->getObjectManagerMock());
        return $subject;
    }

    protected function getUpdateField()
    {
        return 'keywords';
    }
}
