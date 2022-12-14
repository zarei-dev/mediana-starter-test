<?php

use Latte\Runtime as LR;

/** source: /home/moza/Local Sites/webredone/app/public/wp-content/themes/theme-redone-main/views/templates/page.latte */
final class Template06e6d41d9c extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo '
<div class="content">
';
		while (have_posts()) /* line 5 */ {
			echo '  ';
			echo LR\Filters::escapeHtmlText(the_post()) /* line 6 */;
			echo '
  
  <h1>';
			echo LR\Filters::escapeHtmlText(the_title()) /* line 8 */;
			echo '</h1>
  <hr />
  ';
			echo LR\Filters::escapeHtmlText(the_content()) /* line 10 */;
			echo '

';

		}
		echo '</div>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 15 */;
	}
}
