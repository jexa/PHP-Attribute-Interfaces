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

namespace Jexa\PhpAttributeInterfaces\Definition\Provider;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Selectable;
use Jexa\PhpAttributeInterfaces\Definition\AttributeDefinitionInterface;
use Jexa\PhpAttributeInterfaces\Exception\AttributeDefinitionNotFoundException;

interface AttributeDefinitionProviderInterface
{
    public const PROPERTY_ATTRIBUTE_DEFINITIONS = 'attribute_definitions';

    /**
     * @param string $name
     * @return bool
     */
    public function hasAttributeDefinition(string $name) : bool;

    /**
     * @param string $name
     * @return AttributeDefinitionInterface
     *
     * @throws AttributeDefinitionNotFoundException
     */
    public function getAttributeDefinition(string $name) : AttributeDefinitionInterface;

    /**
     * @return Collection<string,AttributeDefinitionInterface>
     */
    public function getAttributeDefinitions() : Collection;

    /**
     * @param Criteria $criteria
     * @return Selectable&Collection<string,AttributeDefinitionInterface>
     */
    public function findAttributeDefinitions(Criteria $criteria) : Collection&Selectable;
}
