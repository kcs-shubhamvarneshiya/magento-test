<?php
/**
 * Capgemini_Content
 */

namespace Capgemini\Content\Setup\Patch\Data;

use Capgemini\Content\Setup\Patch\Data\Cms\AbstractCmsPage;

/**
 * Class VcInspirationSpotlightLandingPage
 */
class VcInspirationSpotlightLandingPage extends AbstractCmsPage
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function apply()
    {
        $pageContent = <<<EOD
<style>#html-body [data-pb-style=HAOIPAV],#html-body [data-pb-style=HC0XT5U],#html-body [data-pb-style=JH8JRQF],#html-body [data-pb-style=NW9HG8O],#html-body [data-pb-style=OUTO09G],#html-body [data-pb-style=RGH7MLN]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=QXYBRPE]{text-align:center}#html-body [data-pb-style=LMBFHH2],#html-body [data-pb-style=X4GJFCE]{width:100%;border-width:1px;border-color:#cecece;display:inline-block}</style>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing anchor-menu" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="HC0XT5U">
        <h1 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="QXYBRPE">The Spotlight</h1>
        <div data-content-type="divider" data-appearance="default" data-element="main"><hr data-element="line" data-pb-style="LMBFHH2"></div>
        <div data-content-type="text" data-appearance="default" data-element="main">
            <p style="text-align: center;"><a tabindex="0" href="#insider">Insider</a> <a tabindex="0" href="#tours">Tours</a> <a tabindex="0" href="#decorating">Decorating</a> <a tabindex="0" href="#shopping">Shopping</a> <a tabindex="0" href="#news">News</a></p>
        </div>
        <div data-content-type="divider" data-appearance="default" data-element="main"><hr data-element="line" data-pb-style="X4GJFCE"></div>
        <div class="hero-text" data-content-type="text" data-appearance="default" data-element="main">
            <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu. Quisque a lorem in risus egestas interdum ac tincidunt nisi Donec semper tellus maximus, porta lacus et, tristique dui. Curabitur at molestie neque. Nunc est lorem, eleifend sit amet ex eu, eleifend fringilla arcu..</p>
        </div>
    </div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="HAOIPAV">
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div id="insider"&gt;&lt;/div&gt;</div>
        <h2 data-content-type="heading" data-appearance="default" data-element="main">Insider</h2>
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div class="home-block"&gt; &lt;div class="fifth-block three-items-slider"&gt; &lt;div class="elements slick-slider _init-custom-slider" data-content-type="3"&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Marie Flanigan's Favorite&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Talking Shop with Stoffer Home&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</div>
    </div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="RGH7MLN">
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div id="tours"&gt;&lt;/div&gt;</div>
        <h2 data-content-type="heading" data-appearance="default" data-element="main">Tours</h2>
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div class="home-block"&gt; &lt;div class="fifth-block three-items-slider"&gt; &lt;div class="elements slick-slider _init-custom-slider" data-content-type="3"&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Gallerie House of Art &amp; Design&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Designer Sean Anderson’s Cozy Style&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;We Are Headed To Houston, Texas&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</div>
    </div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="JH8JRQF">
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div id="decorating"&gt;&lt;/div&gt;</div>
        <h2 data-content-type="heading" data-appearance="default" data-element="main">Decorating</h2>
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div class="home-block"&gt; &lt;div class="fifth-block three-items-slider"&gt; &lt;div class="elements slick-slider _init-custom-slider" data-content-type="3"&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Four Inspiring Styles&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Traditional With A Twist&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;15 Inspiring Kitchens&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</div>
    </div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="OUTO09G">
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div id="shopping"&gt;&lt;/div&gt;</div>
        <h2 data-content-type="heading" data-appearance="default" data-element="main">Shopping</h2>
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div class="home-block"&gt; &lt;div class="fifth-block three-items-slider"&gt; &lt;div class="elements slick-slider _init-custom-slider" data-content-type="3"&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;All New Calvino Series By Ian K. Fowler&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Nature Never Goes Out of Style&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Elegant Fixtures in Full Bloom&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</div>
    </div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
    <div class="inspiration-landing" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="NW9HG8O">
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div id="news"&gt;&lt;/div&gt;</div>
        <h2 data-content-type="heading" data-appearance="default" data-element="main">News</h2>
        <div data-content-type="html" data-appearance="default" data-element="main">&lt;div class="home-block"&gt; &lt;div class="fifth-block three-items-slider"&gt; &lt;div class="elements slick-slider _init-custom-slider" data-content-type="3"&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Book Signing with Designer&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;Book Signing with Designer Kelly Wearstler&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;High Point Grand Opening&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;div class="element"&gt; &lt;div class="image"&gt; &lt;a href="/link"&gt; &lt;img src="//via.placeholder.com/410x325" alt="Alt text goes here"&gt; &lt;/a&gt; &lt;/div&gt; &lt;span class="highlight"&gt;DESIGN PROFILES&lt;/span&gt; &lt;h4&gt;The Francesco Series&lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit nunc in turpis consequat bibendum. Mauris id aliquam mauris. Ut sit amet urna arcu.&lt;/p&gt; &lt;a href="/link"&gt;Read More&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</div>
    </div>
</div>
EOD;

        $pageData = [
            [
                'title' => 'VC Inspiration Spotlight Landing',
                'page_layout' => 'cms-full-width',
                'identifier' => 'vc_inspiration_spotlight_landing',
                'content' => $pageContent,
                'is_active' => 1,
                'stores' => [$this->getVcStoreId()],
                'sort_order' => 0
            ]
        ];

        /**
         * Insert default and system pages
         */
        foreach ($pageData as $data) {
            $this->upsertPage($data);
        }
    }
}