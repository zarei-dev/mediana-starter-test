<?php

use Latte\Runtime as LR;

/** source: /home/moza/Local Sites/webredone/app/public/wp-content/themes/theme-redone-main/views/templates/404.latte */
final class Template1507ebc1bb extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<section class="content">
  404 not found
</section>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 7 */;
	}
}
