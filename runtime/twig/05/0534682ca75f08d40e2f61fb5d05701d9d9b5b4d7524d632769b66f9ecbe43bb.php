<?php

/* index/index.html */
class __TwigTemplate_5705131da9fa2d276f7d44ab4e0b26e5cd849b2125963491faddcd6c0dfca651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "index/index.html", 1);
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
        echo "  <div class=\"container\">
    <section id=\"dg-container\" class=\"dg-container\">
      <div class=\"dg-wrapper\"> <a href=\"#\"><img src=\"/static/index/images/1.jpg\" alt=\"image1\" /></a> <a href=\"#\"><img src=\"/static/index/images/2.jpg\" alt=\"image2\" /></a> <a href=\"#\"><img src=\"/static/index/images/3.jpg\" alt=\"image3\" /></a> <a href=\"#\"><img src=\"/static/index/images/4.jpg\" alt=\"image4\" /></a> <a href=\"#\"><img src=\"/static/index/images/5.jpg\" alt=\"image5\" /></a> <a href=\"#\"><img src=\"/static/index/images/6.jpg\" alt=\"image1\" /></a> <a href=\"#\"><img src=\"/static/index/images/7.jpg\" alt=\"image2\" /></a> <a href=\"#\"><img src=\"/static/index/images/8.jpg\" alt=\"image3\" /></a> </div>
    </section>
  </div>
  <div class=\"main\">
    <div class=\"section group\">
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic1.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic3.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic2.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic4.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"clear\"></div>
    </div>
    <div class=\"section group btm\">
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic5.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic6.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic7.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic8.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"clear\"></div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
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
  <div class=\"container\">
    <section id=\"dg-container\" class=\"dg-container\">
      <div class=\"dg-wrapper\"> <a href=\"#\"><img src=\"/static/index/images/1.jpg\" alt=\"image1\" /></a> <a href=\"#\"><img src=\"/static/index/images/2.jpg\" alt=\"image2\" /></a> <a href=\"#\"><img src=\"/static/index/images/3.jpg\" alt=\"image3\" /></a> <a href=\"#\"><img src=\"/static/index/images/4.jpg\" alt=\"image4\" /></a> <a href=\"#\"><img src=\"/static/index/images/5.jpg\" alt=\"image5\" /></a> <a href=\"#\"><img src=\"/static/index/images/6.jpg\" alt=\"image1\" /></a> <a href=\"#\"><img src=\"/static/index/images/7.jpg\" alt=\"image2\" /></a> <a href=\"#\"><img src=\"/static/index/images/8.jpg\" alt=\"image3\" /></a> </div>
    </section>
  </div>
  <div class=\"main\">
    <div class=\"section group\">
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic1.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic3.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic2.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic4.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"clear\"></div>
    </div>
    <div class=\"section group btm\">
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic5.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic6.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic7.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem Ipsum is</h3>
        </a> </div>
      <div class=\"grid_1_of_4 images_1_of_4\"> <a href=\"/detail/index\"><img src=\"/static/index/images/pic8.jpg\"></a> <a href=\"/detail/index\">
        <h3>Lorem is simply </h3>
        </a> </div>
      <div class=\"clear\"></div>
    </div>
  </div>
{% endblock %}

", "index/index.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/index/index.html");
    }
}
