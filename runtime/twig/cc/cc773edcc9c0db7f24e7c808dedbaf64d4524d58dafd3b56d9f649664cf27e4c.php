<?php

/* detail/detail.html */
class __TwigTemplate_28851fea05597ea993a660154b8eb10a18a466ce158219717fa011d9f3f293a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>The Auto-Tuning Website Template | Details :: </title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--<link href='http://fonts.useso.com/css?family=Anaheim' rel='stylesheet' type='text/css'>-->
<link href=\"/static/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--image slider-->
<script type=\"text/javascript\" src=\"/static/index/js/jquery-1.7.2.min.js\"></script>
<script src=\"/static/index/js/jquery-slider.js\" type=\"text/javascript\"></script>
<script src=\"/static/index/js/easyResponsiveTabs.js\" type=\"text/javascript\"></script>
<link href=\"/static/index/css/easy-responsive-tabs.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
<link rel=\"stylesheet\" href=\"/static/index/css/global.css\">
<script src=\"/static/index/js/slides.min.jquery.js\"></script>
<script>
\t\t\$(function(){
\t\t\t\$('#products').slides({
\t\t\t\tpreload: true,
\t\t\t\tpreloadImage: 'img/loading.gif',
\t\t\t\teffect: 'slide, fade',
\t\t\t\tcrossfade: true,
\t\t\t\tslideSpeed: 350,
\t\t\t\tfadeSpeed: 500,
\t\t\t\tgenerateNextPrev: true,
\t\t\t\tgeneratePagination: false
\t\t\t});
\t\t});
\t</script>
</head>
<body>
<div class=\"wrap\">
  <div class=\"header\">
    <div class=\"logo\">
      <h1><a href=\"index.html\"><img src=\"/static/index/images/logo.png\" alt=\"\"></a></h1>
    </div>
    <div class=\"h_right\">
      <div class=\"drp-dwn\">
        <ul>
          <li>
            <h3>Select ur Language :</h3>
          </li>
          <li>
            <select onChange=\"window.location=this.options[this.selectedIndex].value\">
              <option value=\"\">English</option>
              <option value=\"\">German</option>
              <option value=\"\">French</option>
            </select>
          </li>
          <li>
            <h3 style=\"margin-left: 10px;\">Currency :</h3>
          </li>
          <li>
            <select onChange=\"window.location=this.options[this.selectedIndex].value\">
              <option value=\"\">US Dollar-USD</option>
              <option value=\"\">Euro-EUR</option>
              <option value=\"\">Indian Rupee-INR</option>
            </select>
          </li>
        </ul>
      </div>
      <div class=\"header_top_right\">
        <div class=\"login\"> <span><a href=\"login.html\"><img src=\"/static/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
        <div class=\"shopping_cart\">
          <div class=\"cart_img\"> <img src=\"/static/index/images/header_cart.png\"> </div>
          <div class=\"cart\"> <a href=\"#\" title=\"View my shopping cart\" rel=\"nofollow\"> <span class=\"cart_title\">Cart</span> <span class=\"no_product\">(empty)</span> </a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
    <div class=\"clear\"></div>
    <div class=\"h_main\">
      <ul class=\"nav\">
        <li class=\"active\"><a href=\"index.html\">Home</a></li>
        <li><a href=\"maintain.html\">Maintains</a></li>
        <li><a href=\"repair.html\">Repairs</a></li>
        <li><a href=\"contact.html\">Contact</a></li>
      </ul>
      <div class=\"search\">
        <form>
          <input type=\"text\" value=\"\">
          <input type=\"submit\" value=\"\">
        </form>
      </div>
      <div class=\"clear\"></div>
    </div>
  </div>
  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"details\">
        <div class=\"product-details\">
          <div class=\"images_3_of_2\">
            <div id=\"container\">
              <div id=\"products_example\">
                <div id=\"products\">
                  <div class=\"slides_container\"> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-1.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-2.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-3.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-4.jpg\" alt=\" \" /></a> </div>
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
  <div class=\"footer\">
    <div class=\"f_left\">
      <div class=\"f_nav\">
        <ul>
          <li><a href=\"\">about us</a></li>
          <li><a href=\"\">site map</a></li>
          <li><a href=\"\">customer Service</a></li>
          <li><a href=\"\">search terms</a></li>
          <li><a href=\"\">contact us</a></li>
        </ul>
      </div>
      <div class=\"copy\">
        <p class=\"w3-link\">© All Rights Reserved | More Templates <a href=\"http://www.cssmoban.com/\" target=\"_blank\" title=\"模板之家\">模板之家</a> - Collect from <a href=\"http://www.cssmoban.com/\" title=\"网页模板\" target=\"_blank\">网页模板</a> </p>
      </div>
    </div>
    <div class=\"social-icons\">
      <ul>
        <li class=\"icon1\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon2\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon3\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon4\"><a href=\"#\" target=\"_blank\"> </a></li>
        <div class=\"clear\"></div>
      </ul>
    </div>
    <div class=\"clear\"></div>
  </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail/detail.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
<title>The Auto-Tuning Website Template | Details :: </title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--<link href='http://fonts.useso.com/css?family=Anaheim' rel='stylesheet' type='text/css'>-->
<link href=\"/static/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--image slider-->
<script type=\"text/javascript\" src=\"/static/index/js/jquery-1.7.2.min.js\"></script>
<script src=\"/static/index/js/jquery-slider.js\" type=\"text/javascript\"></script>
<script src=\"/static/index/js/easyResponsiveTabs.js\" type=\"text/javascript\"></script>
<link href=\"/static/index/css/easy-responsive-tabs.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
<link rel=\"stylesheet\" href=\"/static/index/css/global.css\">
<script src=\"/static/index/js/slides.min.jquery.js\"></script>
<script>
\t\t\$(function(){
\t\t\t\$('#products').slides({
\t\t\t\tpreload: true,
\t\t\t\tpreloadImage: 'img/loading.gif',
\t\t\t\teffect: 'slide, fade',
\t\t\t\tcrossfade: true,
\t\t\t\tslideSpeed: 350,
\t\t\t\tfadeSpeed: 500,
\t\t\t\tgenerateNextPrev: true,
\t\t\t\tgeneratePagination: false
\t\t\t});
\t\t});
\t</script>
</head>
<body>
<div class=\"wrap\">
  <div class=\"header\">
    <div class=\"logo\">
      <h1><a href=\"index.html\"><img src=\"/static/index/images/logo.png\" alt=\"\"></a></h1>
    </div>
    <div class=\"h_right\">
      <div class=\"drp-dwn\">
        <ul>
          <li>
            <h3>Select ur Language :</h3>
          </li>
          <li>
            <select onChange=\"window.location=this.options[this.selectedIndex].value\">
              <option value=\"\">English</option>
              <option value=\"\">German</option>
              <option value=\"\">French</option>
            </select>
          </li>
          <li>
            <h3 style=\"margin-left: 10px;\">Currency :</h3>
          </li>
          <li>
            <select onChange=\"window.location=this.options[this.selectedIndex].value\">
              <option value=\"\">US Dollar-USD</option>
              <option value=\"\">Euro-EUR</option>
              <option value=\"\">Indian Rupee-INR</option>
            </select>
          </li>
        </ul>
      </div>
      <div class=\"header_top_right\">
        <div class=\"login\"> <span><a href=\"login.html\"><img src=\"/static/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
        <div class=\"shopping_cart\">
          <div class=\"cart_img\"> <img src=\"/static/index/images/header_cart.png\"> </div>
          <div class=\"cart\"> <a href=\"#\" title=\"View my shopping cart\" rel=\"nofollow\"> <span class=\"cart_title\">Cart</span> <span class=\"no_product\">(empty)</span> </a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
    <div class=\"clear\"></div>
    <div class=\"h_main\">
      <ul class=\"nav\">
        <li class=\"active\"><a href=\"index.html\">Home</a></li>
        <li><a href=\"maintain.html\">Maintains</a></li>
        <li><a href=\"repair.html\">Repairs</a></li>
        <li><a href=\"contact.html\">Contact</a></li>
      </ul>
      <div class=\"search\">
        <form>
          <input type=\"text\" value=\"\">
          <input type=\"submit\" value=\"\">
        </form>
      </div>
      <div class=\"clear\"></div>
    </div>
  </div>
  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"details\">
        <div class=\"product-details\">
          <div class=\"images_3_of_2\">
            <div id=\"container\">
              <div id=\"products_example\">
                <div id=\"products\">
                  <div class=\"slides_container\"> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-1.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-2.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-3.jpg\" alt=\" \" /></a> <a href=\"#\" target=\"_blank\"><img src=\"/static/index/images/productslide-4.jpg\" alt=\" \" /></a> </div>
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
  <div class=\"footer\">
    <div class=\"f_left\">
      <div class=\"f_nav\">
        <ul>
          <li><a href=\"\">about us</a></li>
          <li><a href=\"\">site map</a></li>
          <li><a href=\"\">customer Service</a></li>
          <li><a href=\"\">search terms</a></li>
          <li><a href=\"\">contact us</a></li>
        </ul>
      </div>
      <div class=\"copy\">
        <p class=\"w3-link\">© All Rights Reserved | More Templates <a href=\"http://www.cssmoban.com/\" target=\"_blank\" title=\"模板之家\">模板之家</a> - Collect from <a href=\"http://www.cssmoban.com/\" title=\"网页模板\" target=\"_blank\">网页模板</a> </p>
      </div>
    </div>
    <div class=\"social-icons\">
      <ul>
        <li class=\"icon1\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon2\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon3\"><a href=\"#\" target=\"_blank\"> </a></li>
        <li class=\"icon4\"><a href=\"#\" target=\"_blank\"> </a></li>
        <div class=\"clear\"></div>
      </ul>
    </div>
    <div class=\"clear\"></div>
  </div>
</div>
</body>
</html>", "detail/detail.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/detail/detail.html");
    }
}
