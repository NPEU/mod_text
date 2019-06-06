<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_text
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

?>
<?php echo $module->content; ?>
<?php if (!empty($params->get('cta_text')) && !empty($params->get('cta_text'))): ?>
<p>
    <a href="<?php echo $params->get('cta_text'); ?>"><?php echo $params->get('cta_text'); ?></a>
</p>
<?php endif; ?>
