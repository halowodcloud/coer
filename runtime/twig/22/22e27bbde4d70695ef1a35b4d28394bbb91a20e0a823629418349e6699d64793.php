<?php

/* public/base.html */
class __TwigTemplate_1526875d2433f82ee9284c588e9d2783407253a9e3781a12d7cd10329dfa6374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "

";
        // line 87
        $this->displayBlock('foot', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>The Auto-Tuning Website Template | Home</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"/static/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"/static/index/css/global.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"/static/index/css/easy-responsive-tabs.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--slider-->
    <script type=\"text/javascript\" src=\"/static/index/js/modernizr.custom.53451.js\"></script>
    <script type=\"text/javascript\" src=\"/static/index/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/static/index/js/jquery.gallery.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#dg-container').gallery({
                autoplay\t:\ttrue
            });
        });
    </script>
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
                <div class=\"login\"> <span><a href=\"/login/index\"><img src=\"/static/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
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
                <li class=\"active\"><a href=\"/\">Home</a></li>
                <li><a href=\"/maintain/index\">Maintains</a></li>
                <li><a href=\"/repair/index\">Repairs</a></li>
                <li><a href=\"/contact/index\">Contact</a></li>
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
";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 87
    public function block_foot($context, array $blocks = array())
    {
        // line 88
        echo "    <div class=\"footer\">
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
                <p class=\"w3-link\">© All Rights Reserved | Templates By <a href=\"http://www.cssmoban.com/\" target=\"_blank\" title=\"NULL\">QZW</a> - Collect from <a href=\"http://www.cssmoban.com/\" title=\"NULL\" target=\"_blank\">WEB</a> </p>
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
</html>
";
    }

    public function getTemplateName()
    {
        return "public/base.html";
    }

    public function getDebugInfo()
    {
        return array (  131 => 88,  128 => 87,  123 => 83,  40 => 2,  37 => 1,  33 => 87,  29 => 85,  27 => 83,  24 => 82,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
<!DOCTYPE HTML>
<html>
<head>
    <title>The Auto-Tuning Website Template | Home</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"/static/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"/static/index/css/global.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"/static/index/css/easy-responsive-tabs.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--slider-->
    <script type=\"text/javascript\" src=\"/static/index/js/modernizr.custom.53451.js\"></script>
    <script type=\"text/javascript\" src=\"/static/index/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/static/index/js/jquery.gallery.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#dg-container').gallery({
                autoplay\t:\ttrue
            });
        });
    </script>
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
                <div class=\"login\"> <span><a href=\"/login/index\"><img src=\"/static/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
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
                <li class=\"active\"><a href=\"/\">Home</a></li>
                <li><a href=\"/maintain/index\">Maintains</a></li>
                <li><a href=\"/repair/index\">Repairs</a></li>
                <li><a href=\"/contact/index\">Contact</a></li>
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
{% endblock %}

{% block content %}
{% endblock %}


{% block foot %}
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
                <p class=\"w3-link\">© All Rights Reserved | Templates By <a href=\"http://www.cssmoban.com/\" target=\"_blank\" title=\"NULL\">QZW</a> - Collect from <a href=\"http://www.cssmoban.com/\" title=\"NULL\" target=\"_blank\">WEB</a> </p>
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
</html>
{% endblock %}
", "public/base.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/public/base.html");
    }
}
