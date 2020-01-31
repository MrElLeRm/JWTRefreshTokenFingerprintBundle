<?php

/*
 * This file is part of the GesdinetJWTRefreshTokenBundle package.
 *
 * (c) Gesdinet <http://www.gesdinet.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gesdinet\JWTRefreshTokenBundle\Model;

/**
 * Interface to be implemented by user managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to UserRefreshTokens should happen through this interface.
 */
interface RefreshTokenManagerInterface
{
    /**
     * Creates an empty user instance.
     *
     * @return RefreshTokenInterface
     */
    public function create();

    /**
     * @param string $refreshToken
     * @param string|null $fingerprint
     *
     * @return RefreshTokenInterface
     */
    public function get(string $refreshToken, ?string $fingerprint);

    /**
     * @param string $username
     *
     * @return RefreshTokenInterface
     */
    public function getLastFromUsername($username);

    /**
     * @param RefreshTokenInterface $refreshToken
     */
    public function save(RefreshTokenInterface $refreshToken);

    /**
     * @param RefreshTokenInterface $refreshToken
     */
    public function delete(RefreshTokenInterface $refreshToken);

    /**
     * @return RefreshTokenInterface[]
     */
    public function revokeAllInvalid();

    /**
     * @param string $username
     * @param string $fingerprint
     * @return RefreshTokenInterface
     */
    public function getByUsernameAndFingerprint(string $username, string $fingerprint);

    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();
}
