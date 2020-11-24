<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Controller;

/**
 * Trait OrganizationAwareControllerTrait.
 *
 * This trait does not contain the "organization" property because we wanted
 * to make sure that every class that uses this trait ensures that the
 * returned value of getOrganisationName() is always set.
 */
trait OrganizationAwareControllerTrait
{
    /**
     * Name of the organization for the API endpoint URI.
     *
     * @return string
     */
    abstract public function getOrganisationName(): string;
}
