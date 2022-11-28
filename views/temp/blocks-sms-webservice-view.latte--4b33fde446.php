<?php

use Latte\Runtime as LR;

/** source: /home/moza/Local Sites/webredone/app/public/wp-content/themes/theme-redone-main/gutenberg/blocks/sms-webservice/view.latte */
final class Template4b33fde446 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		echo '<div class="sms-webservice-wrapper" style="background-image:url(\'';
		echo tr_get_img_path('Laptop_mockup.webp') /* line 1 */;
		echo '\')">
  <div class="sms-tabs">

    <div class="sms-tab active-tab" data-tab="1" role="tab">
      <div class="sms-tab-inner">
        <div class="sms-tab-text">
        Python
        </div>
      </div>
    </div>
    <div class="sms-tab" data-tab="2" role="tab">
      <div class="sms-tab-inner">
        <div class="sms-tab-text">
        Python
        </div>
      </div>
    </div>
    <div class="sms-tab" data-tab="3" role="tab">
      <div class="sms-tab-inner">
        <div class="sms-tab-text">
        Python
        </div>
      </div>
    </div>

  </div>

  

  <div id="sms-data-1" class="sms-code highlight-height active" >
    <pre><code class="language-python">package main
import "github.com/medianasms/go-rest-sdk"
func main() {
// you api key that generated from panel
apiKey := "api-key"
// create client instance
sms := medianasms.New(apiKey)
// send bulk message
bulkID, err := sms.Send("+9810001",
[]string{"98912xxxxxxx"}, "mediana is awesome")
if err != nil {
t.Error("error occurred ", err)}}
      </code></pre>
  </div>
  <div id="sms-data-2" class="sms-code highlight-height" >
    <pre><code class="language-python">package main
import "github.com/medianasms/go-rest-sdk"
func main() {
// you api key that generated from panel
apiKey := "api-key"
// create client instance
sms := medianasms.New(apiKey)
// send bulk message
bulkID, err := sms.Send("+9810001",
[]string{"98912xxxxxxx"}, "mediana is awesome")
if err != nil {
t.Error("error occurred ", err)}}
      </code></pre>
  </div>
  <div id="sms-data-3" class="sms-code highlight-height" >
    <pre><code class="language-python">package main
import "github.com/medianasms/go-rest-sdk"
func main() {
// you api key that generated from panel
apiKey := "api-key"
// create client instance
sms := medianasms.New(apiKey)
// send bulk message
bulkID, err := sms.Send("+9810001",
[]string{"98912xxxxxxx"}, "mediana is awesome")
if err != nil {
t.Error("error occurred ", err)}}
      </code></pre>
  </div>



</div>';
	}
}
