<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\theme_redone/wp-content/themes/theme_redone/views/templates/single.latte */
final class Templatecf7c02e35b extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<div class="content">
';
		while (have_posts()) /* line 4 */ {
			echo '  ';
			echo LR\Filters::escapeHtmlText(the_post()) /* line 5 */;
			echo '

  <h1>';
			echo LR\Filters::escapeHtmlText(the_title()) /* line 7 */;
			echo '</h1>
  <hr />
  ';
			echo LR\Filters::escapeHtmlText(the_content()) /* line 9 */;
			echo '

';

		}
		echo '</div>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 14 */;
	}
}
