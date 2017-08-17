<?php

/* detail/details.html */
class __TwigTemplate_c961d4f7ab426df73fdd0dc58d3ba07fe0dd9fd13899ab84b7fb9b87e73a8f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "detail/details.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"details\">
        <div class=\"product-details\">
          <div class=\"images_3_of_2\">
            <div id=\"container\">
              <div id=\"products_example\">
                <div id=\"products\">
                  <div class=\"slides_container\">
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-1.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-2.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-3.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-4.jpg\" alt=\" \" />
                    </a> </div>
                  <ul class=\"pagination\">
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic1.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic2.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic3.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic4.jpg\" alt=\" \" /></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"desc span_3_of_2\">
            <h2>Lorem Ipsum is simply dummy text </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class=\"price\">
              <p>Price: <span>\$500</span></p>
            </div>
            <div class=\"available\">
              <p>Available Options :</p>
              <ul>
                <li>Color:
                  <select>
                    <option>Silver</option>
                    <option>Black</option>
                    <option>Dark Black</option>
                    <option>Red</option>
                  </select>
                </li>
                <li>Size:
                  <select>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>small</option>
                    <option>Large</option>
                    <option>small</option>
                  </select>
                </li>
                <li>Quality:
                  <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </li>
              </ul>
            </div>
            <div class=\"share-desc\">
              <div class=\"share\">
                <p>Share Product :</p>
                <ul>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_1.png\" alt=\"\"></a></li>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_2.png\" alt=\"\"></a></li>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_3.png\" alt=\"\"></a></li>
                </ul>
              </div>
              <div class=\"button1\"><span><a href=\"details.html\" class=\"button button-rounded\" >Add to Cart</a></span></div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"wish-list\">
              <ul>
                <li class=\"wish\"><a href=\"#\">Add to Wishlist</a></li>
                <li class=\"compare\"><a  href=\"#\">Add to Compare</a></li>
              </ul>
            </div>
          </div>
          <div class=\"clear\"></div>
        </div>
        <div class=\"product_desc\">
          <div id=\"horizontalTab\" style=\"display: block; width: 100%; margin: 0px;\">
            <ul class=\"resp-tabs-list\">
              <li class=\"resp-tab-item resp-tab-active\" aria-controls=\"tab_item-0\" role=\"tab\">Product Details</li>
              <li class=\"resp-tab-item\" aria-controls=\"tab_item-1\" role=\"tab\">product Tags</li>
              <li class=\"resp-tab-item\" aria-controls=\"tab_item-2\" role=\"tab\">Product Reviews</li>
              <div class=\"clear\"></div>
            </ul>
            <div class=\"resp-tabs-container\">
              <h2 class=\"resp-accordion resp-tab-active\" role=\"tab\" aria-controls=\"tab_item-0\"><span class=\"resp-arrow\"></span>Product Details</h2>
              <div class=\"product-desc resp-tab-content resp-tab-content-active\" style=\"display:block\" aria-labelledby=\"tab_item-0\">
                <p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown printer took a galley of type and scrambled</span> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span> It has survived not only five centuries</span>, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
              <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-1\"><span class=\"resp-arrow\"></span>product Tags</h2>
              <div class=\"product-tags resp-tab-content\" aria-labelledby=\"tab_item-1\">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h4>Add Your Tags:</h4>
                <div class=\"input-box\">
                  <input type=\"text\" value=\"\">
                </div>
                <div class=\"button\"><span><a href=\"#\">Add Tags</a></span></div>
              </div>
              <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-2\"><span class=\"resp-arrow\"></span>Product Reviews</h2>
              <div class=\"review resp-tab-content\" aria-labelledby=\"tab_item-2\">
                <h4>Lorem ipsum Review by <a href=\"#\">Finibus Bonorum</a></h4>
                <ul>
                  <li>Price :<a href=\"#\"><img src=\"/static/index/images/price-rating.png\" alt=\"\"></a></li>
                  <li>Value :<a href=\"#\"><img src=\"/static/index/images/value-rating.png\" alt=\"\"></a></li>
                  <li>Quality :<a href=\"#\"><img src=\"/static/index/images/quality-rating.png\" alt=\"\"></a></li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <div class=\"your-review\">
                  <h3>How Do You Rate This Product?</h3>
                  <p>Write Your Own Review?</p>
                  <form>
                    <div> <span>
                      <label>Nickname<span class=\"red\">*</span></label>
                      </span> <span>
                      <input type=\"text\" value=\"\">
                      </span> </div>
                    <div><span>
                      <label>Summary of Your Review<span class=\"red\">*</span></label>
                      </span> <span>
                      <input type=\"text\" value=\"\">
                      </span> </div>
                    <div> <span>
                      <label>Review<span class=\"red\">*</span></label>
                      </span> <span>
                      <textarea> </textarea>
                      </span> </div>
                    <div> <span>
                      <input type=\"submit\" value=\"SUBMIT REVIEW\">
                      </span> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>
        <div class=\"content_bottom\">
          <div class=\"text-h1 top1 btm\">
            <h2>Lorem ipsum quis nostrud exercitation</h2>
          </div>
          <div class=\"div2\">
            <div id=\"mcts1\"> <img src=\"/static/index/images/d_pic2.jpg\" alt=\"\"/> <img src=\"/static/index/images/d_pic1.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic3.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic4.jpg\" alt=\"\"/> <img src=\"/static/index/images/d_pic1.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic4.jpg\" alt=\"\" /> </div>
          </div>
        </div>
      </div>
      <div class=\"clear\"></div>
    </div>
  </div>

<script type=\"text/javascript\" src=\"/static/index/js/easyResponsiveTabs.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/jquery-1.7.2.min.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/jquery-slider.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/slides.min.jquery.js\"></script>
<script>
  \$(function(){
    \$('#products').slides({
      preload: true,
      effect: 'slide, fade',
      crossfade: true,
      slideSpeed: 350,
      fadeSpeed: 500,
      generateNextPrev: true,
      generatePagination: false
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "detail/details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/base.html\" %}

{% block content %}
  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"details\">
        <div class=\"product-details\">
          <div class=\"images_3_of_2\">
            <div id=\"container\">
              <div id=\"products_example\">
                <div id=\"products\">
                  <div class=\"slides_container\">
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-1.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-2.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-3.jpg\" alt=\" \" />
                    </a>
                    <a href=\"#\" target=\"_blank\">
                      <img src=\"/static/index/images/productslide-4.jpg\" alt=\" \" />
                    </a> </div>
                  <ul class=\"pagination\">
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic1.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic2.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic3.jpg\" alt=\" \" /></a></li>
                    <li><a href=\"#\"><img src=\"/static/index/images/d_pic4.jpg\" alt=\" \" /></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"desc span_3_of_2\">
            <h2>Lorem Ipsum is simply dummy text </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class=\"price\">
              <p>Price: <span>\$500</span></p>
            </div>
            <div class=\"available\">
              <p>Available Options :</p>
              <ul>
                <li>Color:
                  <select>
                    <option>Silver</option>
                    <option>Black</option>
                    <option>Dark Black</option>
                    <option>Red</option>
                  </select>
                </li>
                <li>Size:
                  <select>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>small</option>
                    <option>Large</option>
                    <option>small</option>
                  </select>
                </li>
                <li>Quality:
                  <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </li>
              </ul>
            </div>
            <div class=\"share-desc\">
              <div class=\"share\">
                <p>Share Product :</p>
                <ul>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_1.png\" alt=\"\"></a></li>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_2.png\" alt=\"\"></a></li>
                  <li><a href=\"#\"><img src=\"/static/index/images/icon_3.png\" alt=\"\"></a></li>
                </ul>
              </div>
              <div class=\"button1\"><span><a href=\"details.html\" class=\"button button-rounded\" >Add to Cart</a></span></div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"wish-list\">
              <ul>
                <li class=\"wish\"><a href=\"#\">Add to Wishlist</a></li>
                <li class=\"compare\"><a  href=\"#\">Add to Compare</a></li>
              </ul>
            </div>
          </div>
          <div class=\"clear\"></div>
        </div>
        <div class=\"product_desc\">
          <div id=\"horizontalTab\" style=\"display: block; width: 100%; margin: 0px;\">
            <ul class=\"resp-tabs-list\">
              <li class=\"resp-tab-item resp-tab-active\" aria-controls=\"tab_item-0\" role=\"tab\">Product Details</li>
              <li class=\"resp-tab-item\" aria-controls=\"tab_item-1\" role=\"tab\">product Tags</li>
              <li class=\"resp-tab-item\" aria-controls=\"tab_item-2\" role=\"tab\">Product Reviews</li>
              <div class=\"clear\"></div>
            </ul>
            <div class=\"resp-tabs-container\">
              <h2 class=\"resp-accordion resp-tab-active\" role=\"tab\" aria-controls=\"tab_item-0\"><span class=\"resp-arrow\"></span>Product Details</h2>
              <div class=\"product-desc resp-tab-content resp-tab-content-active\" style=\"display:block\" aria-labelledby=\"tab_item-0\">
                <p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown printer took a galley of type and scrambled</span> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span> It has survived not only five centuries</span>, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
              <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-1\"><span class=\"resp-arrow\"></span>product Tags</h2>
              <div class=\"product-tags resp-tab-content\" aria-labelledby=\"tab_item-1\">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h4>Add Your Tags:</h4>
                <div class=\"input-box\">
                  <input type=\"text\" value=\"\">
                </div>
                <div class=\"button\"><span><a href=\"#\">Add Tags</a></span></div>
              </div>
              <h2 class=\"resp-accordion\" role=\"tab\" aria-controls=\"tab_item-2\"><span class=\"resp-arrow\"></span>Product Reviews</h2>
              <div class=\"review resp-tab-content\" aria-labelledby=\"tab_item-2\">
                <h4>Lorem ipsum Review by <a href=\"#\">Finibus Bonorum</a></h4>
                <ul>
                  <li>Price :<a href=\"#\"><img src=\"/static/index/images/price-rating.png\" alt=\"\"></a></li>
                  <li>Value :<a href=\"#\"><img src=\"/static/index/images/value-rating.png\" alt=\"\"></a></li>
                  <li>Quality :<a href=\"#\"><img src=\"/static/index/images/quality-rating.png\" alt=\"\"></a></li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <div class=\"your-review\">
                  <h3>How Do You Rate This Product?</h3>
                  <p>Write Your Own Review?</p>
                  <form>
                    <div> <span>
                      <label>Nickname<span class=\"red\">*</span></label>
                      </span> <span>
                      <input type=\"text\" value=\"\">
                      </span> </div>
                    <div><span>
                      <label>Summary of Your Review<span class=\"red\">*</span></label>
                      </span> <span>
                      <input type=\"text\" value=\"\">
                      </span> </div>
                    <div> <span>
                      <label>Review<span class=\"red\">*</span></label>
                      </span> <span>
                      <textarea> </textarea>
                      </span> </div>
                    <div> <span>
                      <input type=\"submit\" value=\"SUBMIT REVIEW\">
                      </span> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>
        <div class=\"content_bottom\">
          <div class=\"text-h1 top1 btm\">
            <h2>Lorem ipsum quis nostrud exercitation</h2>
          </div>
          <div class=\"div2\">
            <div id=\"mcts1\"> <img src=\"/static/index/images/d_pic2.jpg\" alt=\"\"/> <img src=\"/static/index/images/d_pic1.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic3.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic4.jpg\" alt=\"\"/> <img src=\"/static/index/images/d_pic1.jpg\" alt=\"\" /> <img src=\"/static/index/images/d_pic4.jpg\" alt=\"\" /> </div>
          </div>
        </div>
      </div>
      <div class=\"clear\"></div>
    </div>
  </div>

<script type=\"text/javascript\" src=\"/static/index/js/easyResponsiveTabs.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/jquery-1.7.2.min.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/jquery-slider.js\"></script>
<script type=\"text/javascript\" src=\"/static/index/js/slides.min.jquery.js\"></script>
<script>
  \$(function(){
    \$('#products').slides({
      preload: true,
      effect: 'slide, fade',
      crossfade: true,
      slideSpeed: 350,
      fadeSpeed: 500,
      generateNextPrev: true,
      generatePagination: false
    });
  });
</script>
{% endblock %}", "detail/details.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/detail/details.html");
    }
}
