<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */

namespace Drupal\apigee_edge\Form;

/**
 * Provides a form for changing API Product entity labels.
 */
class ApiProductAliasForm extends EdgeEntityAliasConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'apigee_edge_api_product_alias_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'apigee_edge.api_product_settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function entityTypeName(): string {
    return $this->t('API Product');
  }

  /**
   * {@inheritdoc}
   */
  protected function originalSingularLabel(): string {
    return $this->t('API');
  }

  /**
   * {@inheritdoc}
   */
  protected function originalPluralLabel(): string {
    return $this->t('APIs');
  }

}
