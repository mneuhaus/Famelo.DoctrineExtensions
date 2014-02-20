<?php
namespace Famelo\DoctrineExtensions\Traits;

/*                                                                            *
 * This script belongs to the TYPO3 Flow package "Famelo.DoctrineExtensions". *
 *                                                                            *
 * It is free software; you can redistribute it and/or modify it under        *
 * the terms of the GNU Lesser General Public License, either version 3       *
 * of the License, or (at your option) any later version.                     *
 *                                                                            *
 * The TYPO3 project - inspiring people to share!                             *
 *                                                                            */

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
trait SoftDeletable {
    /**
     * @var \DateTime
     * @ORM\Column(nullable=true)
     */
    protected $deletedAt;
}
?>