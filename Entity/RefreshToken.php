<?php

/*
 * This file is part of the GesdinetJWTRefreshTokenBundle package.
 *
 * (c) Gesdinet <http://www.gesdinet.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gesdinet\JWTRefreshTokenBundle\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Refresh Token.
 *
 * @UniqueEntity("refreshToken")
 */
class RefreshToken extends AbstractRefreshToken
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $fingerprint;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $fingerprint
     * @return $this
     */
    public function setFingerprint(string $fingerprint): RefreshToken
    {
        $this->fingerprint = $fingerprint;

        return $this;
    }

    /**
     * @return string
     */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
}
