<?php
/*
 * MIT License
 *
 * Copyright (c) 2023 John Conklin
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Jexa\PhpAttributeInterfaces\Provider;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Jexa\PhpAttributeInterfaces\AttributeInterface;
use Jexa\PhpAttributeInterfaces\Exception\AttributeNotFoundException;

interface AttributeProviderInterface
{
    public const PROPERTY_ATTRIBUTES = 'attributes';

    /**
     * @param string $name
     * @return bool
     */
    public function hasAttribute(string $name) : bool;

    /**
     * @param string $name
     * @return AttributeInterface
     *
     * @throws AttributeNotFoundException
     */
    public function getAttribute(string $name) : AttributeInterface;

    /**
     * @param string $name
     * @return mixed
     *
     * @throws AttributeNotFoundException
     */
    public function getAttributeValue(string $name) : mixed;

    /**
     * @return Collection<string,AttributeInterface>
     */
    public function getAttributes() : Collection;

    /**
     * @return Collection<int,string>
     */
    public function getAttributeNames() : Collection;

    /**
     * @param Criteria $criteria
     * @return Collection<string,AttributeInterface>
     */
    public function findAttributes(Criteria $criteria) : Collection;
}
