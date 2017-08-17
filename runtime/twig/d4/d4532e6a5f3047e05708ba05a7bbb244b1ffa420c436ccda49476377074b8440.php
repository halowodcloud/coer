<?php

/* public/head.html */
class __TwigTemplate_fa262303e771ca023fa1906d8be6564119e4ec8420b8c3cbdd19d9a3b1a91483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>The Auto-Tuning Website Template | Home</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <!--<link href='http://fonts.useso.com/css?family=Anaheim' rel='stylesheet' type='text/css'>-->
    <link href=\"STATIC/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--slider-->
    <script type=\"text/javascript\" src=\"STATIC/index/js/modernizr.custom.53451.js\"></script>
    <script type=\"text/javascript\" src=\"STATIC/index/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"STATIC/index/js/jquery.gallery.js\"></script>
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
            <h1><a href=\"index.html\"><img src=\"STATIC/index/images/logo.png\" alt=\"\"></a></h1>
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
                <div class=\"login\"> <span><a href=\"login.html\"><img src=\"STATIC/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
                <div class=\"shopping_cart\">
                    <div class=\"cart_img\"> <img src=\"STATIC/index/images/header_cart.png\"> </div>
                    <div class=\"cart\"> <a href=\"#\" title=\"View my shopping cart\" rel=\"nofollow\"> <span class=\"cart_title\">Cart</span> <span class=\"no_product\">(empty)</span> </a> </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"copyrights\">Collect from <a href=\"http://www.cssmoban.com/\" >免费模板</a></div>
        <div class=\"h_main\">
            <ul class=\"nav\">
                <li class=\"active\"><a href=\"index.html\">Home</a></li>
                <li><a href=\"maintain.html\">Maintains</a></li>
                <li><a href=\"repair.html\">Repairs</a></li>
                <li><a href=\"contact/index\">Contact</a></li>
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
        // line 80
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "public/head.html";
    }

    public function getDebugInfo()
    {
        return array (  107 => 81,  101 => 80,  20 => 1,);
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
    <title>The Auto-Tuning Website Template | Home</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <!--<link href='http://fonts.useso.com/css?family=Anaheim' rel='stylesheet' type='text/css'>-->
    <link href=\"STATIC/index/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--slider-->
    <script type=\"text/javascript\" src=\"STATIC/index/js/modernizr.custom.53451.js\"></script>
    <script type=\"text/javascript\" src=\"STATIC/index/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"STATIC/index/js/jquery.gallery.js\"></script>
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
            <h1><a href=\"index.html\"><img src=\"STATIC/index/images/logo.png\" alt=\"\"></a></h1>
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
                <div class=\"login\"> <span><a href=\"login.html\"><img src=\"STATIC/index/images/login.png\" alt=\"\" title=\"login\"></a></span> </div>
                <div class=\"shopping_cart\">
                    <div class=\"cart_img\"> <img src=\"STATIC/index/images/header_cart.png\"> </div>
                    <div class=\"cart\"> <a href=\"#\" title=\"View my shopping cart\" rel=\"nofollow\"> <span class=\"cart_title\">Cart</span> <span class=\"no_product\">(empty)</span> </a> </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"copyrights\">Collect from <a href=\"http://www.cssmoban.com/\" >免费模板</a></div>
        <div class=\"h_main\">
            <ul class=\"nav\">
                <li class=\"active\"><a href=\"index.html\">Home</a></li>
                <li><a href=\"maintain.html\">Maintains</a></li>
                <li><a href=\"repair.html\">Repairs</a></li>
                <li><a href=\"contact/index\">Contact</a></li>
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

    {% block content %}

    {% endblock %}", "public/head.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/public/head.html");
    }
}
