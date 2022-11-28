<?php

use Latte\Runtime as LR;

/** source: /home/moza/Local Sites/webredone/app/public/wp-content/themes/theme-redone-main/gutenberg/blocks/sms-webservice/view.latte */
final class Template4b33fde446 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="sms-webservice-wrapper" style="background-image:url(\'';
		echo tr_get_img_path('Laptop_mockup.webp') /* line 1 */;
		echo '\')">
  <div class="sms-tabs">

';
		foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($code, $ʟ_it ?? null) as $el) /* line 4 */ {
			if (!empty($code)) /* line 4 */ {
				ob_start(fn() => '');
				try {
					echo '    <div';
					echo ($ʟ_tmp = array_filter([$iterator->first ? 'active-tab' : null, 'sms-tab'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 5 */;
					echo ' data-tab="';
					echo LR\Filters::escapeHtmlAttr($iterator) /* line 5 */;
					echo '" role="tab">';
					ob_start();
					try {
						echo '
      <div class="sms-tab-inner">
        <div class="sms-tab-text">
        ';
						echo LR\Filters::escapeHtmlText($el['title']['text']) /* line 8 */;
						echo '
        </div>
      </div>
    ';

					} finally {
						$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
					}
					echo '</div>
';

				} finally {
					if ($ʟ_ifc[0] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
			}

		}
		$iterator = $ʟ_it = $ʟ_it->getParent();

		echo '
  </div>

';
		foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($code, $ʟ_it ?? null) as $el) /* line 15 */ {
			if (!empty($code)) /* line 15 */ {
				ob_start(fn() => '');
				try {
					echo '  <div id="sms-data-';
					echo LR\Filters::escapeHtmlAttr($iterator) /* line 16 */;
					echo '"';
					echo ($ʟ_tmp = array_filter([$iterator->first ? 'active' : null, 'sms-code highlight-height'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 16 */;
					echo ' >';
					ob_start();
					try {
						echo '
    <pre><code class="">';
						echo LR\Filters::escapeHtmlText($el['code']['text']) /* line 17 */;
						echo '</code></pre>
  ';

					} finally {
						$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
					}
					echo '</div>
';

				} finally {
					if ($ʟ_ifc[1] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
			}

		}
		$iterator = $ʟ_it = $ʟ_it->getParent();

		echo '
</div>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['el' => '4, 15'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
